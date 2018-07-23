<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/23/2018
 * Time: 00:06
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $a = $request->input();

        echo "<pre>"; var_dump(count($a)); echo "</pre>"; die;
        echo "<pre>"; var_dump($request->input()); echo "</pre>"; die; $a;
        echo "<pre>"; echo $b; echo "</pre>"; die;
//        echo "<pre>"; var_dump($a); echo "</pre>"; die;
//        echo "<pre>"; dd($request); echo "</pre>"; die;
//        dd($request->input('amount_'));
        return ('Hello Form');
    }
}