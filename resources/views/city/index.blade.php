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
        <th>City</th>
        <th>State</th>
        <th>Action(s)</th>
      </tr>

      </thead>

      <tbody>

        @php
          $no = 1
        @endphp

        @foreach ($city as $row)

          <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $row->name }} </td>
            <td> {{ $row->State->name }} </td>
              <td>
                  <a href="/editcity/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="/deletecity/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
              </td>
          </tr>

      @endforeach

      </tbody>

</table>

      </div>
</div>

@endsection