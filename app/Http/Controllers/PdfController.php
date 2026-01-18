<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use iio\libmergepdf\Merger;
use App\Models\Disposisi;
use setasign\Fpdi\Fpdi;
use FPDF;

class PdfController extends Controller
{
    protected $disposisi;

    public function generateAndMergePdf($id)
    {
        // Ambil data disposisi dan simpan ke properti class
        $this->disposisi = Disposisi::findOrFail($id);

        // Generate PDF dari view show.blade.php dengan pengaturan untuk menampilkan gambar
        $pdfFromView = Pdf::loadView('disposisis.pdf', ['disposisi' => $this->disposisi])
            ->setOptions([
                'isRemoteEnabled' => true,
                'chroot' => [
                    public_path(),
                    storage_path(),
                    base_path(),
                ],
            ]);

        // Simpan PDF dari view ke file sementara
        $tempPdfPath = storage_path('app/temp_disposisi.pdf');
        $pdfFromView->save($tempPdfPath);

        // Inisialisasi PDFMerger
        $merger = new Merger;

        // Tambahkan PDF yang baru di-generate dari view (urutan pertama)
        $merger->addFile($tempPdfPath);

        // Proses file PDF yang sudah ada
        $existingPdfPath = storage_path('app/public/' . $this->disposisi->file_surat);
        $compatiblePdfPath = $this->convertPdfWithFpdi($existingPdfPath);

        // Tambahkan file PDF yang sudah dikonversi
        $merger->addFile($compatiblePdfPath);

        // Gabungkan PDF
        $mergedPdf = $merger->merge();

        // Simpan PDF yang sudah digabungkan
        $mergedPdfPath = storage_path('app/merged_disposisi.pdf');
        file_put_contents($mergedPdfPath, $mergedPdf);

        // Hapus file sementara
        unlink($tempPdfPath);
        unlink($compatiblePdfPath);

        // Ambil nama file asli
        $originalFileName = pathinfo($this->disposisi->file_surat, PATHINFO_FILENAME);

        // Buat nama file gabungan
        $mergedFileName = 'Disposisi_' . $originalFileName . '.pdf';

        // Download atau tampilkan PDF yang sudah digabungkan dengan nama file yang diinginkan
        return response()->download($mergedPdfPath, $mergedFileName)->deleteFileAfterSend(true);
    }

    protected function convertPdfWithFpdi($originalPath)
    {
        $outputPath = storage_path('app/temp/converted_' . basename($originalPath));

        $pdf = new Fpdi();

        try {
            $pageCount = $pdf->setSourceFile($originalPath);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $templateId = $pdf->importPage($pageNo);
                $size = $pdf->getTemplateSize($templateId);

                $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
                $pdf->useTemplate($templateId);
            }

            $pdf->Output('F', $outputPath);
            return $outputPath;
        } catch (\Exception $e) {
            // Jika gagal, gunakan fallback conversion
            return $this->fallbackPdfConversion($originalPath);
        }
    }

    protected function fallbackPdfConversion($originalPath)
    {
        $outputPath = storage_path('app/temp/fallback_' . basename($originalPath));

        // Gunakan $this->disposisi->file_surat untuk konsistensi
        $originalFileUrl = asset('storage/' . $this->disposisi->file_surat);

        $pdf = new Fpdi();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Tambahkan pesan error
        $pdf->Cell(0, 10, 'Original PDF could not be processed', 0, 1, 'C');
        $pdf->Ln(10);

        // Tambahkan link download yang benar-benar bisa diklik
        $pdf->SetFont('Arial', 'U', 12);
        $pdf->SetTextColor(0, 0, 255); // Warna biru untuk link
        $pdf->Write(10, 'Click here to download the original PDF', $originalFileUrl);
        $pdf->SetTextColor(0, 0, 0); // Kembalikan ke warna hitam

        // Tambahkan catatan
        $pdf->Ln(15);
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(0, 8, 'Download original PDF: ' . $originalFileUrl);
        $pdf->Output('F', $outputPath);
        return $outputPath;
    }
}
