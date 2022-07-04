<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function admin()
    {
        $data = User::all();
        return view('dashboard.admin', compact('data'));
    }

    public function inputData()
    {
        return view('dashboard.userInput');
    }

    public function storeData(Request $request)
    {
        $this->validate($request, [
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['role'] = $request->role;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);

        User::insert($data);

        return redirect('/admin')->with('success', 'Data Berhasil Ditambah!');
    }

    public function editData($id)
    {
        $data = User::find($id);
        return view('dashboard.edit_user', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);

        $this->validate($request, [
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        return redirect('/admin')->with('success', 'Data User Berhasil Diupdate');
    }
}
