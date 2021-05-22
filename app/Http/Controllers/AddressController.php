<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return response()->json($addresses);
  }

  public function store(Request $request)
  {
    $requestdata = $request;
    $r = unpack('v*', fread(fopen('/dev/random', 'r'),16));
    $uuid = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      $r[1], $r[2], $r[3], $r[4] & 0x0fff | 0x4000,
      $r[5] & 0x3fff | 0x8000, $r[6], $r[7], $r[8]);
    $requestdata->userid = $uuid;
    $address = \App\Models\Address::create($requestdata->all());
    return response()->json($address);
  }

  public function delete($id)
  {
    \App\Models\Address::destroy($id);
    return response()->json("ok");
  }
}
