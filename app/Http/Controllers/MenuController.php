<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function datamenu(){
    $menus=Menu::all();
    return view('menu')->with('menus',$menus);
  }
  public function store(MenuRequest $request)
  {
    $gambar = $request->file('gambar');
      
    Menu::create([
      "nama_menu" => $nama = $request->nama_menu,
      "harga" => $request->harga,
      "keterangan" => $request->keterangan,
      "gambar" => $request->hasFile('gambar') ? $gambar->storeAs('images/menu', $nama . '.' . $gambar->extension()) : null,
    ]);
  
    return redirect()->back()->with('success','Data menu berhasil disimpun');
  }

}
