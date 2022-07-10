@extends('home.layout')

@section('about')
active
@endsection

@section('content')

<div class="content mt-3">
    <br>
    <div class="card mb-3">
        <div class="row g-0">
        @foreach ($about as $a)
        <div class="col-md-5">
            <img src="{{ asset('storage/' . $a->image) }}" class="img-fluid rounded-start" alt="No Image">
        </div>
        <div class="col-md-7">
            <div class="card-body">
            <h5 class="card-text" style="text-align: center">{{ $a->title }}</h5>
            <p class="card-text"><?php echo $a->content ?></p>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>

@endsection