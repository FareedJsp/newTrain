@extends('layout.main')
@section('content')

<form method="post" action="/updatecity/{{$city->id}}" enctype="multipart/form-data">

  @csrf

<div class="container mt-5">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3">Edit City</h4>

      <div class="mb-3">
        <label class="form-label">State</label>
        <select class="form-control" name="state_id">
        <option value="{{$city->id}}">{{ $city->State->name ?? null}}</option>
          @foreach (App\Models\State::get() as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{$city->name}}">
        </div>

        <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection