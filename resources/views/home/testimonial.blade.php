@extends('home.layout')

@section('testimonial')
active
@endsection

@section('content')

<div class="content">
    <br>
    <h3>Testimonial</h3>
  <div class="row g-2">
    @foreach ($testimonial as $t)
    <div class="col-md-6">
        <div class="card" style="">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $t->image) }}" class="img-fluid rounded-start" alt="No Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-text" style="text-align: center">{{ $t->name }}</h5>
                    <p class="card-text"><b>{{ $t->agency }}</b></p>
                    <p class="card-text"><?php echo $t->content ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>

@endsection