@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
   {{--<div class="flex-center position-ref full-height">--}}

   <div id="app">

       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <delete-confirm></delete-confirm>
           </div>
         </div>
         <div class="row">
           <div class="col-md-12">
             <create-update-address></create-update-address>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <addresses></addresses>

             </div>
         </div>
       </div>


   </div>

   {{--</div>--}}
@endsection
