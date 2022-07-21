@extends('home.layout')

@section('blog')
active
@endsection

@section('content')

<div class="content">
    <br>
    <div class="row">
      <div class="col-md-4">
        <h3>Blog</h3>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="{{ url()->current() }}" method="get">
            <div class="input-group mb-3">
              <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                <select name="filter" id="" style="width: 200px;">
                  <option value="" selected>All Category</option>
                  @foreach ($category as $c)
                    <option value="{{ $c->category }}">{{ ucfirst($c->category) }}</option>
                  @endforeach
                </select>
            </div>
        </form>
      </div>
    </div>
  <div class="row g-2">
    @foreach ($blog as $b)
    <div class="col-md-4">
      <a class="" href="{{ route('blogs.show',$b->id) }}" style="color: black">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top" alt="No Image">
            <div class="card-body">
              <p class="card-text mt-0 mb-0">{{ $b->category }}</p>
              <h5 class="card-text pb-3 mt-0" style="text-align: center">{{ $b->title }}</h5>
            </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection