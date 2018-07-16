<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/17/2018
 * Time: 00:23
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    public function showList()
    {
        $menutype_id         = Request::get('menutype_id');
        $menu                = Menu::find($menutype_id);
        $this->data['menu'] = $menu;

        return view('menu/set_menu', $this->data);
    }
}