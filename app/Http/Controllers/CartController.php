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
use Cart;
use App\Order;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $totalCart    = count($request->input());
        $id_menu      = array();
        $cart_name    = array();
        $quantity     = array();
        $amount       = array();
        $image        = array();
        $people       = array();
        $total_amount = 0;

        for ($i = 1; $i < $totalCart; $i++)
        {
            $item_name0 = "id_menu_" . $i;
            $id         = $request->input($item_name0);
            if ($id != "")
            {
                $id_menu[] = $id;
            }

            $item_name1 = "shoe_item_" . $i;
            $name       = $request->input($item_name1);
            if ($name != "")
            {
                $cart_name[] = $name;
            }

            $item_name2 = "quantity_" . $i;
            $num        = $request->input($item_name2);
            if ($num != "")
            {
                $quantity[] = $num;
            }

            $item_name3 = "amount_" . $i;
            $price      = $request->input($item_name3);
            if ($price != "")
            {
                $amount[] = $price;
            }

            $item_name4 = "image_" . $i;
            $img        = $request->input($item_name4);
            if ($img != "")
            {
                $image[] = $img;
            }

            $item_name5 = "people_num_" . $i;
            $people_num = $request->input($item_name5);
            if ($people_num != "")
            {
                $people[] = $people_num;
            }

            $total_amount += $price * $num;
        }

        $this->data['id_menu']      = $id_menu;
        $this->data['cart_name']    = $cart_name;
        $this->data['quantity']     = $quantity;
        $this->data['amount']       = $amount;
        $this->data['image']        = $image;
        $this->data['total']        = count($cart_name);
        $this->data['total_amount'] = $total_amount;
        $this->data['people_num']   = $people;

        return view('cart/checkout', $this->data);
    }

    public function remove(Request $request)
    {
        $id_del     = $request->input('id_del');
        $id_menu    = $request->input('id_menu');
        $cart_name  = $request->input('name');
        $image      = $request->input('image');
        $quantity   = $request->input('quantity');
        $people_num = $request->input('people_num');
        $amount     = $request->input('amount');

        array_splice($id_menu, $id_del, 1);
        array_splice($cart_name, $id_del, 1);
        array_splice($image, $id_del, 1);
        array_splice($quantity, $id_del, 1);
        array_splice($people_num, $id_del, 1);
        array_splice($amount, $id_del, 1);

        $this->data['id_menu']  = $id_menu;
        $this->data['cart_name']  = $cart_name;
        $this->data['quantity']   = $quantity;
        $this->data['amount']     = $amount;
        $this->data['image']      = $image;
        $this->data['total']      = count($cart_name);
        $this->data['people_num'] = $people_num;

        $total_amount = 0;
        for ($i = 0; $i < count($amount); $i++)
        {
            $total_amount = $total_amount + ($amount[$i] * $quantity[$i]);
        }
        $this->data['total_amount'] = $total_amount;

        return view('cart/checkout', $this->data);
    }

    public function edit(Request $request)
    {
        $id_edit      = $request->input('id_edit');
        $new_quantity = $request->input('new_quantity');
        $id_menu      = $request->input('id_menu');
        $cart_name    = $request->input('name');
        $image        = $request->input('image');
        $quantity     = $request->input('quantity');
        $people_num   = $request->input('people_num');
        $amount       = $request->input('amount');

        $total_amount = 0;

        for ($i = 0; $i < count($amount); $i++)
        {
            if ($i == $id_edit)
            {
                $quantity[$i] = $new_quantity;
            }
            $total_amount = $total_amount + ($amount[$i] * $quantity[$i]);
        }

        $this->data['id_menu']      = $id_menu;
        $this->data['cart_name']    = $cart_name;
        $this->data['quantity']     = $quantity;
        $this->data['amount']       = $amount;
        $this->data['image']        = $image;
        $this->data['total']        = count($cart_name);
        $this->data['people_num']   = $people_num;
        $this->data['total_amount'] = $total_amount;

        return view('cart/checkout', $this->data);
    }

    public function payment(Request $request)
    {
        $input = $request->input();
        session(['input' => $input]);

        return view('cart/payment');
    }

    public function add()
    {
        echo "<pre>";
        var_dump(session('input')['name']);
        echo "</pre>";
        die;
        $p                     = new Order;
        $p->CUSTOMER_ID        = 1;
        $p->MENU_ID            = 1;
        $p->NUMBER_OF_TABLE    = 50;
        $p->NUMBER_OF_CUSTOMER = 100;
        $p->ORDER_DATE         = '2018-07-25';
        $p->TIME_DATE          = '12:00';
        $p->TOTAL_AMOUNT       = 1300000;
        $p->DISCOUNT           = 0;
        $p->DEPOSIT            = 500000;
        $p->REST_MONEY         = 600000;
        $p->PAYMENT_METHOD     = 1;
        $p->STATUS             = 0;

        $p->save();
        echo "<pre>";
        var_dump("OK");
        echo "</pre>";
        die;
    }
}