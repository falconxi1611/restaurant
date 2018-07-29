<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 6/27/2018
 * Time: 01:20
 */

namespace App\Http\Controllers;

use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ServiceController extends Controller
{
    public function showView()
    {
        return view('home');
    }
}