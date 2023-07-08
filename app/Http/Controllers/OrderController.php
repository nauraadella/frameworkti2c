<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function dataorder(){
    $orders=Order::all();
    return view('orderan')->with('orders',$orders);
  }
  public function store1(Request $request)
  {
    $validatedData = $request ->validate([
        'nama_pemesan' => 'required',
        'nama_pesanan' => 'required',
        'nohp' => 'required',
        'alamat' => 'required',
    ]);
    Order::create($validatedData);
    return redirect()->back()->with('success','Data menu berhasil disimpun');
  }

}
