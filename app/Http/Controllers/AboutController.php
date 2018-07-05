<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 6/27/2018
 * Time: 01:10
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

namespace App\Http\Controllers;


class AboutController
{
    public function showView()
    {
        return view('about/about');
    }
}