<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubmitCoupons;
use Illuminate\Http\Request;

class SubmitCouponsController extends Controller
{
    public function submit_coupon($subdomain){
        $categoria_home = Category::all();
        return view('submit_coupons.store',['categoria_home'=>$categoria_home]);

    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre_coupon' => 'required|max:255',
            'email_coupon' => 'required|email|max:255',
            'message_coupon' => 'required|regex:/^[(\\)\\=\\&\\$\\;\\-\\_\\*\\"\\<\\>\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
        ]);
        // $name = $request->name;

        $submitcoupons = new SubmitCoupons();
        $submitcoupons->name = $request->nombre_coupon;
        $submitcoupons->correo = $request->email_coupon;
        $submitcoupons->mensage = $request->message_coupon;
        $submitcoupons->save();
        // return "fsdfds".$submitcoupons;
        return redirect("/submit/coupon")->with("ok-crear", "");

    }
}
