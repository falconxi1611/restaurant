<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/20/2018
 * Time: 23:44
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuDetailController extends Controller
{
    public function showDetail(Request $request)
    {
        dd($request->get('menu_id'));
       $menu_id = $request->get('menu_id');
       dd($menu_id);
    }
}