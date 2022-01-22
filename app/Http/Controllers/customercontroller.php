<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\customer;
use Session;

class customercontroller extends Controller
{
  public function addCustomer(){
    return view('add-customer');
  }
  public function storeCustomer(Request $request){
    //return 'name';
   $customer = new customer();
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->password = $request->password;
    $customer->image = $request->image;
    if ($request->hasfile('image')) {
        $file =  $customer->image;
        $ext = $file->getClientOriginalExtention();
        return $ext;
    }
   
   }
}
