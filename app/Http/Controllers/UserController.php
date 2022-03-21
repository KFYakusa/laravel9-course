<?php

namespace App\Http\Controllers;

use App\Http\Requests\formUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    public function getListUser(Request $req){
        // dd('usercontroller@index');
        $search = $req->search;
        $users = $this->user->getUsers(search: $req->search ?? '');

        return view('user.getListUser', compact('users'));
    }
    public function getUser($id){

        if(!$user = $this->user->find($id)) return redirect()->back();
        return view('user.getUser ',compact('user'));
    }
    public function createPage(){
        return view('user.createPage');
    }
    public function createUser(formUserRequest $req){

        $data = $req->only(['name','email','password']);
        $data['password'] = bcrypt($req->password);

        $this->user->create($data);

        return redirect()->route('user.getListUser');
    }

    public function deleteUser($id){

        if(!$user = $this->user->find($id)) return redirect()->back();
        $user->delete();
        return redirect()->route('user.getListUser');

    }

    public function editPage($id){
        if(!$user = $this->user->find($id)) return redirect()->back();

        return view('user.editPage',compact('user'));
    }
    public function editUser(formUserRequest $req ,$id){
        if(!$user = $this->user->find($id)) return redirect()->back();

        $data = $req->only('name','email');
        if($req->password) $data['password'] = bcrypt($req->password);

        $user->update($data);
        return redirect()->route('user.getListUser');
    }
}
