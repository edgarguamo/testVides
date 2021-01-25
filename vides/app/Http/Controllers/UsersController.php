<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDashboardUserRequest;
use App\Http\Requests\DashboardUserRequest;

use App\Models\Role;
use App\Models\User;

use App\Http\Controllers\Controller;


use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    
    public function index()
    {
        
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $users = User::with('roles')->get();
        $users = User::orderBy('id', 'desc')->paginate();

        return view('users.index', compact('users'));
    }

    public function create(){    

        $roles = Role::pluck('title', 'id');
        return view('users.create', compact('roles'));
    }

    public function store(DashBoardUSerRequest $request){
        
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        
        $user->save();

        $user->roles()->sync($request->input('roles',[]));
        
        return redirect()->route("users.index");
    }

    public function edit(User $user){

        $roles = Role::pluck('title', 'id');
        
        $user->load('roles');
        
        return view("users.edit", compact('user', 'roles'));
    }

    public function update(UpdateDashboardUserRequest $request, User $user)
    {

        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }


    public function destroy(User $user){
        

        $user->delete();
        
        return redirect()->route("users.index");

    }
}
