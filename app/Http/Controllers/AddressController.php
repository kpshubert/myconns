<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class AddressController extends Controller
{
  public function index()
  {
    return view('addresses');
  }
    //
  public function get(Request $request)
  {
    $addresses = \App\Models\Address::orderBy('created_at', 'desc')->get();
    foreach ($addresses as $address => $address_value) {
      $address_value->buttonSet = $address_value->id;
    }
    return response()->json($addresses);
  }

  public function store(Request $request)
  {
    $requestdata = $request;
    Log::debug('$request->user');
    Log::debug($request->user());
    $owner = Auth::id();
    $requestdata->owner = $owner;
    $address = \App\Models\Address::create($requestdata->all());
    return response()->json($address);
  }

  public function update(Request $request, $id)
  {
    $address = \App\Models\Address::where('id','=',$id)->first();

    $address->update($request->all());
  }

  public function delete($id)
  {
    \App\Models\Address::destroy($id);
    return response()->json("ok");
  }
}
