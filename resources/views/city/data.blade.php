@extends('layout.main')
@section('content')

<div class="card">
      <div class="card-header">
            <div class="row">
                  <div class="col">
                        <h3 class="card-title">City Data</h3>
                  </div>
                  <div class="col">
                        <a href="/createcity" class="btn btn-outline-secondary mb-3">Add City</a>

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
        <th>State</th>
        <th>City</th>
      </tr>

      </thead>

      <tbody>

            @php
            $no = 1
        @endphp
  
          @foreach (App\Models\State::get() as $row)
  
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->name }} </td>
              <td>
                  @php
  
                      $x = $row->id;
  
                      $tito = DB::table('cities')->where('state_id', $x)->pluck('name');
  
                  @endphp
  
                    @foreach ($tito as $row0)
  
                          {{$row0. ", "}}
  
                    @endforeach
              </td>
              </tr>
  
        @endforeach

      </tbody>

</table>

      </div>
</div>

@endsection