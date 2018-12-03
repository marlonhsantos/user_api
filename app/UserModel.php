<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';

    public static function getUsers(){
        return UserModel::all();
    }

    public static function createUser($name, $email){
        $user = new UserModel;
        $user->name = $name;
        $user->email = $email;
        $user->save();
    }

    public static function readUser($id){
        return UserModel::find($id);
    }

    public static function updateUser($id, $name, $email){
        $user = UserModel::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();
    }

    public static function deleteUser($id){
        return UserModel::destroy($id);
    }

}
