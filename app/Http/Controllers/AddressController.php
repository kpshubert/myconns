<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DB;

class AddressController extends Controller
{
  public function index()
  {
    return view('addresses');
  }
    //
  public function get(Request $request)
  {
    $addresses = DB::table('addresses')->leftJoin('circles', 'circles.circle_level', '=', 'highestcircle')->select('addresses.*', DB::raw("CONCAT(addresses.highestcircle, '-', circles.name) AS circle_info"))->get();
    foreach ($addresses as $address => $address_value) {
      $address_value->buttonSet = $address_value->id;
    }
    return response()->json($addresses);
  }

  public function store(Request $request)
  {
    $requestdata = $request;
    $owner = Auth::id();
    $requestdata->owner = $owner;
    $address = \App\Models\Address::create($requestdata->all());
    return response()->json($address);
  }

  public function update(Request $request, $id)
  {
    $saveData = $request->all();

    $address = \App\Models\Address::where('id','=',$id)->first();
    Log::debug('$saveData->highestcircle');
    Log::debug($saveData['highestcircle']);
    if (isset($request->effectivedate) && (strpos($request->effectivedate, 'a') !== false || strpos($request->effectivedate, 'p') !== false)) {
      $effectiveDate = date_create_from_format('Y-m-d G:i a', $request->effectivedate);
      $effectiveDateString = date_format($effectiveDate, "Y-m-d H:i:s");
      $saveData['effectivedate'] = $effectiveDateString;
    }

    if (isset($request->enddate) && (strpos($request->enddate, 'a') !== false || strpos($request->enddate, 'p') !== false)) {
      $endDate = date_create_from_format('Y-m-d G:i a', $request->enddate);
      $endDateString = date_format($endDate, "Y-m-d H:i:s");
      $saveData['enddate'] = $endDateString;
    }

    $address->update($saveData);
  }

  public function delete($id)
  {
    \App\Models\Address::destroy($id);
    return response()->json("ok");
  }
}
