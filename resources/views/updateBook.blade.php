@extends('layout.app')
@section('content')
<br><br>
<div class="container rounded shadow p-5">

<h1>Update Book Data</h1>
<br><br>
<form action="{{route('book.update', $book->id)}}" method="POST">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$book->name}}">
    </div>

    @error('name')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="description" value="{{$book->description}}">
      </div>

      @error('description')
      <p class="alert alert-danger">{{$message}}</p>
      @enderror

    <div class="mb-3">
        <label for="" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="author" value="{{$book->author}}">
    </div>

    @error('author')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
        <label for="" class="form-label">Release Date</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="release_date" value="{{$book->release_date}}">
    </div>

    @error('release_date')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="price" value="{{$book->price}}">
    </div>

    @error('price')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
