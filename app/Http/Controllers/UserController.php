<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 17:46
 */

namespace App\Http\Controllers;

use App\Bind;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show($id)
    {
        echo Bind::find($id)->findUser;
    }
}