@extends('layout.main')
@section('content')

<form method="post" action="/insertstate" enctype="multipart/form-data">

  @csrf

<div class="container mt-5">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3">Add State</h4>

      <div class="mb-3">
        <label class="form-label">Country</label>
        <select class="form-control" name="country_id">
        <option value="">select country</option>
          @foreach (App\Models\Country::get() as $item)
               <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection