@extends('layout.main')
@section('content')

<div class="card">
      <div class="card-header">
            <div class="row">
                  <div class="col">
                        <h3 class="card-title">State Data</h3>
                  </div>
                  <div class="col">
                        <a href="/createstate" class="btn btn-outline-secondary mb-3">Add State</a>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                              <p>{{ $message }}</p>
                        </div> 
                        @endif
                  </div>
            </div>
      </div>

            

      <!-- /.card-header -->

      <div class="card-body">

<table id="example1" class="table table-bordered table-striped">

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
            <td> {{ $row->name }} </td>
            <td>
                @php

                    $x = $row->id;

                    $tito = DB::table('states')->where('country_id', $x)->pluck('name');

                @endphp

                  @foreach ($tito as $row0)

                        {{$row0. ", "}}

                  @endforeach
            </td>

      @endforeach

      </tbody>

</table>

      </div>
</div>

@endsection