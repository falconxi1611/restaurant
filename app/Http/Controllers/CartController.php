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
use App\Customer_Info;
use App\Service_Detail;

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
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }


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

        $this->data['id_menu']    = $id_menu;
        $this->data['cart_name']  = $cart_name;
        $this->data['quantity']   = $quantity;
        $this->data['amount']     = $amount;
        $this->data['image']      = $image;
        $this->data['total']      = count($cart_name);
        $this->data['people_num'] = $people_num;
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

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
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

        return view('cart/checkout', $this->data);
    }

    public function payment(Request $request)
    {
        $total_amount = $request->input('total_amount');
        $input        = $request->input();
        session(['input' => $input]);
        $this->data['total_amount'] = $total_amount;

        return view('cart/payment', $this->data);
    }

    public function add(Request $request)
    {
        $deposit    = $request->input('deposit');
        $discount   = 0;
        $num_people = session('num_people');

        if (session('input')['fullname'] != null)
        {
            $fullname = session('input')['fullname'];
        }
        if (session('input')['phone'] != null)
        {
            $phone = session('input')['phone'];
        }
        if (session('input')['email'] != null)
        {
            $email = session('input')['email'];
        }
        if (session('input')['address'] != null)
        {
            $address = session('input')['address'];
        }
        $remark = session('input')['address'];

        $cart_id        = session('input')['id'];
        $cart_name      = session('input')['name'];
        $type           = session('input')['type'];
        $quantity_table = session('input')['quantity_table'];

        $total_amount = session('input')['total_amount'];
        $date_order   = date('Y-m-d', strtotime(session('date')));

        //Insert Customer Info
        $email_flg = Customer_Info::where('EMAIL', $email)->get(['EMAIL']);
        $point_new = $total_amount * 0.00001;
        if (count($email_flg) != null)
        {
            $point_old = Customer_Info::where('EMAIL', $email)->get();
            foreach ($point_old as $p)
            {
                $pnt_old = $p->POINT;
            }
            $update_point = Customer_Info::where('EMAIL', $email);
            $update_point->update(['POINT' => ($pnt_old + $point_new)]);
        }
        else
        {
            $cus                = new Customer_Info;
            $cus->CUSTOMER_NAME = $fullname;
            $cus->EMAIL         = $email;
            $cus->ADDRESS       = $address;
            $cus->PHONE         = $phone;
            $cus->POINT         = $point_new;
            $cus->save();
        }
        $status = 0;
        if ($deposit == $total_amount)
        {
            $status = 1;
        }
        //Insert ORDER
        $id_cus = Customer_Info::where('EMAIL', $email)->get();
        foreach ($id_cus as $cus)
        {
            $id = $cus->CUSTOMER_ID;
        }

        for ($i = 0; $i < count($cart_id); $i++)
        {
            if ($type[$i] != "Dịch vụ kèm theo")
            {
                $id_cart        = $cart_id[$i];
                $quantity_table = $quantity_table[$i];
                break;
            }
        }

//
        $order                     = new Order;
        $order->CUSTOMER_ID        = $id;
        $order->MENU_ID            = $id_cart;
        $order->NUMBER_OF_CUSTOMER = $num_people;
        $order->NUMBER_OF_TABLE    = $quantity_table;
        $order->NUMBER_OF_CUSTOMER = $num_people;
        $order->ORDER_DATE         = $date_order;
        $order->TIME_DATE          = session('time');
        $order->TOTAL_AMOUNT       = $total_amount;
        $order->DISCOUNT           = $discount;
        $order->DEPOSIT            = $deposit;
        $order->REST_MONEY         = ($total_amount - $discount - $deposit);
        $order->STATUS             = $status;
        $order->REMARK             = $remark;
        $order->save();

//       Insert SERVICE DETAIL
        $id = Order::orderBy('ORDER_ID', 'DESC')->get(['ORDER_ID'])->first();
        $id = json_decode($id);
        $id = $id->ORDER_ID;

        for ($i = 0; $i < count($cart_id); $i++)
        {
            if ($type[$i] == "Dịch vụ kèm theo")
            {
                $sd             = new Service_Detail;
                $sd->SERVICE_ID = $cart_id[$i];
                $sd->ORDER_ID   = $id + 1;
                $sd->save();
                $id++;
            }
        }
        $request->session()->flush();


        return view('success');
    }
}