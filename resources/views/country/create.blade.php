@extends('layout.main')
@section('content')

<form method="post" action="/insertcountry" enctype="multipart/form-data">

  @csrf

<div class="container mt-5">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3">Add Country</h4>

        <div class="mb-3">
          <label class="form-label">Country Name</label>
          <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
          <label class="form-label">Short Name</label>
          <input type="text" class="form-control" name="sortname">
        </div>

        <div class="mb-3">
          <label class="form-label">Phone Code</label>
          <input type="text" class="form-control"  name="phonecode">
        </div>

        <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection