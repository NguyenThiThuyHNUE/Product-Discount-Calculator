<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function Calculate_Discount(){
        return view('calculate.Calculate_Discount');
    }
 public function Calculate(Request $request){
   $description = $request->description;
   $price = $request->price;
   $percent= $request->percent;
   $discount_amount= $price * $percent * 0.1;
   $discount_price = $price - $discount_amount;
   return view('calculate.View_Calculate',compact('discount_amount', 'discount_price' ));
 }
}
