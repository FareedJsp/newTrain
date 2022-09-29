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
        <th>State</th>
        <th>City</th>
        <th>Action(s)</th>
      </tr>

      </thead>

      <tbody>

        @php
          $no = 1
        @endphp

        @foreach ($state as $row)

          <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $row->State->name }} </td>
            <td> {{ $row->name ?? null}} </td>
              <td>
                  <a href="/showstate/{{$row->id}}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="/editstate/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="/deletestate/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
              </td>
          </tr>

      @endforeach

      </tbody>

</table>

      </div>
</div>

@endsection