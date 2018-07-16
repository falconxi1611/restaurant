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

class MenuTypeController extends Controller
{
    public function showView()
    {
        $this->data['menu_type']  = Menu_Type::all();

        return view('menu/menu', $this->data);
    }
}