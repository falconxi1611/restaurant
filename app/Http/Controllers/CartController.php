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
        echo "<pre>"; dd($request); echo "</pre>"; die;
        dd($request->input('amount_1'));
        return ('Hello Form');
    }
}