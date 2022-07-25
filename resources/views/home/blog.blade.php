@extends('home.layout')

@section('blog')
active
@endsection

@section('content')

<div class="content">
    <br>
    <div class="row">
        <h3>Blog</h3>
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
      <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="{{ url()->current() }}" autocomplete="off" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
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
              <h5 class="card-text pb-3 mt-2" style="text-align: center">{{ $b->title }}</h5>
            </div>
        </div>
      </a>
    </div>
    @endforeach
    @forelse ($blog as $b)
    @empty
        <p class="text-center mb-5">No Record Found</p>
    @endforelse
  </div>
</div>

@endsection