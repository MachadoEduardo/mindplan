<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::get();
  
        return view('users.index', compact('users'));
        // retorna uma view, nesse caso o diretorio 'users' e arquivo 'index' e também, retorna para a view os usuarios em forma de array
    }

    public function show($id){
        // $user = User::where('id', $id)->first();
        if(!$user = User::find($id))
            return redirect()->route('users.index'); // Caso nao tenha um usuario com o ID, ele retorna para o user index
        return view('users.show', compact('user')); 
    }

    public function create(){
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request){
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        // return route('users.show', $user->id); se quisesse redirecionar para o proprio usuario
        return redirect()->route('users.index');
    }

    public function edit($id){
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        return view('users.edit', compact('user')); 
    }

    public function update(StoreUpdateUserFormRequest $request, $id){
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if($request->password)
            $data['password'] = bcrypt($request->password);
        $user->update($data);

        return redirect()->route('users.index');
    }
}
