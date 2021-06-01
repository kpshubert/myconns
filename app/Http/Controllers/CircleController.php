<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class CircleController extends Controller
{
  public function index()
  {
    return view('circles');
  }
    //
  public function get(Request $request)
  {
    $circles = \App\Models\Circle::orderBy('circle_level', 'asc')->get();
    foreach ($circles as $circle => $circle_value) {
      $circle_value->buttonSet = $circle_value->id;
    }
    return response()->json($circles);
  }

  public function store(Request $request)
  {
    $circle = \App\Models\Circle::create($request->all());
    return response()->json($circle);
  }

  public function update(Request $request, $id)
  {
//    $saveData = $request->all();

    $circle = \App\Models\Circle::where('id','=',$id)->first();
//    if (isset($request->effectivedate) && (strpos($request->effectivedate, 'a') !== false || strpos($request->effectivedate, 'p') !== false)) {
//      $effectiveDate = date_create_from_format('Y-m-d G:i a', $request->effectivedate);
//      $effectiveDateString = date_format($effectiveDate, "Y-m-d H:i:s");
//      $saveData['effectivedate'] = $effectiveDateString;
//    }
//
//    if (isset($request->enddate) && (strpos($request->enddate, 'a') !== false || strpos($request->enddate, 'p') !== false)) {
//      $endDate = date_create_from_format('Y-m-d G:i a', $request->enddate);
//      $endDateString = date_format($endDate, "Y-m-d H:i:s");
//      $saveData['enddate'] = $endDateString;
//    }

    $circle->update($request->all());
  }

  public function delete($id)
  {
    \App\Models\Circle::destroy($id);
    return response()->json("ok");
  }
}
