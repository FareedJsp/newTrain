@extends('layout.main')
@section('content')

@php

$coca = App\Models\Country::get();

echo is_array($coca);
    
$data = App\Models\Country::get('name');

echo is_array($data);

echo "Today is " . date("Y/m/d") . "<br>";

$kola = json_decode($coca);

echo is_array($kola);

echo count($kola);

@endphp

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }
  
{{$coca}}
{{App\Models\Country::get('name')}}


{{-- <table class="mt-5 table table-bordered table-striped">
<thead>

    <tr>
      <th>No</th>
      <th>Country</th>
      <th>State</th>
    </tr>

    </thead>

    <tbody>

      @php
        $no = 1
      @endphp

      @foreach (App\Models\Country::get() as $row)
  
        <tr>
          <td> {{ $no++ }} </td>
          <td> {{ $row->name}} </td>
        </tr>

    @endforeach

    </tbody>
</table> --}}

{{-- <table class="mt-5 table table-bordered table-striped">
    <thead>
    
        <tr>
          <th>No</th>
          <th>Country</th>
          <th>State</th>
        </tr>
    
        </thead>
    
        <tbody>
    
          @php
            $no = 1
          @endphp
    
          @foreach (App\Models\State::get() as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ App\Models\State::get('name') }} </td>
            </tr>
    
        @endforeach
    
        </tbody>
    </table> --}}

    @php
        $state0 = App\Models\State::get()
    @endphp

    {{-- {{$state0}} --}}

    @php
      
    echo "<br>";
    
    $state1 = DB::table('states')->where('country_id', '1')->first();
 
    // echo $state1->name;

    echo "<br>";

    $state2 = DB::table('states')->where('country_id', '1')->pluck('name');
 
    // echo $state2;

    echo "<br>";

    $titles = DB::table('states')->pluck('name');

    // echo $titles;

    echo "<br>";

    // $tito = DB::table('states')->where('country_id', '1')->pluck('name');

    // foreach ($tito as $x) {
    //     echo $x. ", ";

    //     $pau = DB::table('states')->distinct()->get();

    //     echo $pau;

    // }

    // $pau = DB::table('states')->distinct()->get();

    //     echo $pau;

        echo "<br>";
        echo "<br>";


    // $users = DB::table('countries')
    //         ->crossJoin('states')
    //         ->get();

    //   echo $users;

    

    @endphp

@endsection