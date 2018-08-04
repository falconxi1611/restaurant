<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 8/5/2018
 * Time: 00:33
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function getLogin()
    {
        return view('login/login');
    }
}