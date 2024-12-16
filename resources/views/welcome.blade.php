@extends('layout.app')
@section('content')
<div class="container-fluid row row-cols-2 justify-content-center gap-3">

@forelse ($books as $b)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$b->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$b->author}}</h6>
      <p class="card-text">{{$b->description}}</p>
      <h6 class="card-subtitle mb-2 text-body-secondary">Price: {{$b->price}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Release Date: {{$b->release_date}}</h6>
      <a href="#" class="btn btn-warning">edit</a>
      <a href="#" class="btn btn-danger">delete</a>
    </div>
  </div>
@empty
<p class="alert alert-warning">The books are empty</p>
@endforelse

</div>
@endsection
