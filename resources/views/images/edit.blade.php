@extends('master')

@section('konten')
<div class="container-fluid">
    <div>
        <h2 class="text-center my-5">Edit Image</h2>
    </div>
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">

            {{-- tampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada kesalahan pada input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama HP dengan autocomplete --}}
                <div class="form-group mb-3">
                    <label for="hp_nama" class="form-label">Nama HP</label>
                    <input
                        type="text"
                        id="hp_nama"
                        class="form-control"
                        list="hp_list"
                        placeholder="Ketik nama HP lalu pilih"
                        value="{{ $image->hp->nama ?? '' }}"
                        autocomplete="off"
                    >
                    <datalist id="hp_list">
                        @foreach ($hps as $hp)
                            <option value="{{ $hp->nama }}" data-no="{{ $hp->no }}"></option>
                        @endforeach
                    </datalist>
                    <small class="text-muted">Pilih dari daftar agar nomor HP terisi otomatis.</small>
                </div>

                {{-- HP No (readonly, terisi otomatis) --}}
                <div class="form-group mb-3">
                    <label for="hp_no" class="form-label">HP No</label>
                    <input
                        type="text"
                        id="hp_no"
                        name="hp_no"
                        class="form-control"
                        value="{{ old('hp_no', $image->hp_no) }}"
                        required
                        readonly
                    >
                </div>

                {{-- Preview gambar lama --}}
                <div class="form-group mb-3">
                    <label class="form-label">Gambar Lama</label><br>
                    <img src="{{ asset('storage/images/' . $image->path) }}"
                         class="rounded mb-2"
                         style="max-width:200px; border:1px solid #ccc; padding:5px;"
                         alt="Gambar Lama">
                </div>

                {{-- Upload gambar baru --}}
                <div class="form-group mb-3">
                    <label for="path" class="form-label">Upload Gambar Baru (opsional)</label>
                    <input type="file" name="path" id="path" class="form-control" accept="image/*">

                    {{-- Preview image baru --}}
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview Image"
                             style="display:none; max-width:200px; border:1px solid #ccc; padding:5px;">
                    </div>
                </div>

                {{-- Caption --}}
                <div class="form-group mb-3">
                    <label for="caption" class="form-label">Caption (opsional)</label>
                    <textarea name="caption" class="form-control" rows="3"
                              placeholder="Tambahkan deskripsi foto">{{ old('caption', $image->caption) }}</textarea>
                </div>

                <button type="submit" class="btn btn-md btn-success">UPDATE</button>
                <a href="{{ route('images.index') }}" class="btn btn-md btn-secondary">BATAL</a>
            </form>
        </div>
    </div>
</div>

<script>
    // Preview image baru saat file dipilih
    document.getElementById('path').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });

    // Auto-fill hp_no ketika Nama HP dipilih dari datalist
    (function() {
        const namaInput = document.getElementById('hp_nama');
        const noInput   = document.getElementById('hp_no');
        const dataList  = document.getElementById('hp_list');

        function fillHpNo() {
            const val = namaInput.value;
            const options = dataList.querySelectorAll('option');
            let matchedNo = '';

            options.forEach(opt => {
                if (opt.value === val) {
                    matchedNo = opt.getAttribute('data-no') || '';
                }
            });

            noInput.value = matchedNo;
        }

        namaInput.addEventListener('change', fillHpNo);
        namaInput.addEventListener('blur', fillHpNo);
    })();
</script>
@endsection
