@extends('home.layout')

@section('service')
active
@endsection

@section('content')

<div class="content">
    <br>
    <h3>Service</h3>
  <div class="row g-0">
    @foreach ($service as $s)
    <div class="col-md-4">
        <div class="card ms-4 me-4" style="width: 18rem;">
            <img src="{{ asset('storage/' . $s->image) }}" class="card-img-top" alt="No Image">
            <div class="card-body">
            <h5 class="card-text" style="text-align: center">{{ $s->title }}</h5>
            <p class="card-text"><?php echo $s->content ?></p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>

@endsection