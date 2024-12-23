@extends('layout.app')
@section('content')
<form class="d-flex" role="search" action="{{route('book.search')}}" method="POST">
    @csrf
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

@if (session('error'))
<p class="alert alert-danger">{{session('error')}}</p>
@endif

@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif
<div class="container-fluid row row-cols-2 justify-content-center gap-3">

@forelse ($books as $b)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$b->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$b->author}}</h6>
      <p class="card-text">{{$b->description}}</p>
      <h6 class="card-subtitle mb-2 text-body-secondary">Price: {{$b->price}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Release Date: {{$b->release_date}}</h6>
      <a href="{{route('book.update.page', $b->id)}}" class="btn btn-warning">edit</a>
      <form action="{{route('book.delete', $b->id)}}" method="POST">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
@empty
<p class="alert alert-warning">The books are empty</p>
@endforelse

</div>
@endsection
