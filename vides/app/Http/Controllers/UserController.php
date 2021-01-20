<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->paginate();
        return view('users.listUser', compact('users'));
    }
    public function create(Request $inf){
        $addUser = new User();
        
        $addUser->name = $inf->name;
        $addUser->rol = $inf->rol;
        $addUser->enterprise = $inf->enterprise;
        $addUser->email = $inf->email;
        $addUser->password = $inf->password;
        
        $addUser->save();

        return redirect()->route("dashboard.listUser");
    }

    public function edit($id){
        dd($id);   
    }

    public function destroy($id){
        
        dd($id);
    }
}
