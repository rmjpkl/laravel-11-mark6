<?php

namespace App\Http\Controllers;

//import model product
use App\Models\User;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Support\Facades\Hash;

//import Facades Storage
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all Users
        $users = User::all();

        //render view with Users
        return view('users.index', compact('users'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('Users.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'name'        => 'required|min:5',
            'username'    => 'required|min:5',
            'password'    => 'required|min:5',
            'rupam'       => 'required|min:5',
            'jabatan'     => 'required|min:5',
            'is_admin'    => 'required|min:1'
        ]);

        // dd($request);



        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/Users', $image->hashName());

        //create User
        User::create([
            'name'        => $request->name,
            'username'    => $request->username,
            'password'    => Hash::make($request->password),
            'rupam'       => $request->rupam,
            'jabatan'     => $request->jabatan,
            'is_admin'    => $request->is_admin
        ]);

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get User by ID
        $User = User::findOrFail($id);

        //render view with User
        return view('Users.show', compact('User'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get User by ID
        $user = User::findOrFail($id);

        //render view with User
        return view('users.edit', compact('user'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
    // Validate form
    $request->validate([
        'name'        => 'required|min:5',
        'username'    => 'required|min:5',
        'rupam'       => 'required|min:5',
        'jabatan'     => 'required|min:5',
        'is_admin'    => 'required|min:1'
    ]);


    // Get User by ID
    $User = User::findOrFail($id);

    // Prepare data for update
    $data = [
        'name'        => $request->name,
        'username'    => $request->username,
        'rupam'       => $request->rupam,
        'jabatan'     => $request->jabatan,
        'is_admin'    => $request->is_admin
    ];

    // Check if password is provided
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    // Update User
    // dd($request);
    $User->update($data);

    // Redirect to index
    return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diubah!']);
}


    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get User by ID
        $User = User::findOrFail($id);

        // //delete image
        // Storage::delete('public/Users/'. $User->image);

        //delete User
        $User->delete();

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
