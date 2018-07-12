<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/11/2018
 * Time: 22:12
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Menu_Type;

class MenuController extends Controller
{
    public function showView()
    {

//        return view('menu/menu');
        $menu_type = Menu_Type::all();

        return view('menu/menu', ['menu_type' => $menu_type]);
    }
}