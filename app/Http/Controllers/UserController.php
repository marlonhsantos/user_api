<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(){
        return response()->json(UserModel::getUsers());
    }

    public function create(Request $req){
        UserModel::createUser($req->input('name'), $req->input('email'));
    }

    public function read($id){
        return response()->json(UserModel::readUser($id));
    }

    public function update($id, Request $req){
        UserModel::updateUser($id, $req->input('name'), $req->input('email'));
    }

    public function delete($id){
        UserModel::deleteUser($id);
    }

}
