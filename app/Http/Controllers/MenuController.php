<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/11/2018
 * Time: 22:12
 */

namespace App\Http\Controllers;


class MenuController
{
    public function showView()
    {
        return view('menu/menu');
    }
}