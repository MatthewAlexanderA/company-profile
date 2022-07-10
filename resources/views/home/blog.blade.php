@extends('home.layout')

@section('blog')
active
@endsection

@section('content')

<div class="content">
    <br>
    <h3>Blog</h3>
  <div class="row g-2">
    @foreach ($blog as $b)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top" alt="No Image">
            <div class="card-body">
            <h5 class="card-text" style="text-align: center">{{ $b->title }}</h5>
            <p class="card-text"><?php echo $b->content ?></p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>

@endsection