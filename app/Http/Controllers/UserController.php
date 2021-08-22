<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        //select * from users
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email'),
        ]);
        return redirect('users');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        //delete from users where id  = ?
        return redirect('users');
    }

    //detalles por  ID
    public function show($id)
    {
        $user = User::find($id);
        // select * from users where id = ?
        return view('users.show', compact('user'));
    }

    //editar
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id)->update([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email'),
        ]);
        return redirect('users')->with('status', 'Se ha actualizado correctamente :)');
    }
}
