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
        $list_type = Menu_Type::all();
        $this->data['menu_type'] = $list_type;
        if($list_type === null)
        {
            return view('errors/error');
        }
        return view('menu/menu', $this->data);
    }
}