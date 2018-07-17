<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/17/2018
 * Time: 23:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function showList(Request $rq)
    {
        $menutype_id = $rq->get('menutype_id');
        $menu = Menu::find($menutype_id);
        $this->data['menu'] = $menu;
        return view('menu/set_menu', $this->data);
    }
}