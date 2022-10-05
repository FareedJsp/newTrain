@extends('layout.main')
@section('content')

<form method="post" action="/updatestate/{{$state->id}}" enctype="multipart/form-data">

  @csrf

<div class="container mt-5">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3">Edit State</h4>

      <div class="mb-3">
        <label class="form-label">Country</label>
        <select class="form-control" name="country_id">
        <option value="{{$state->country_id}}">{{ $state->Country->name ?? null}}</option>
          @foreach (App\Models\Country::get() as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{$state->name}}">
        </div>

        <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection