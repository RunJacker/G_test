<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 17:13
 */

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        return view('user.profile',['user'=>User::findOrFail($id)]);
    }
}