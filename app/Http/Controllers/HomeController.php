<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 6/27/2018
 * Time: 01:02
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function showView()
    {
        return view('home');
    }
}