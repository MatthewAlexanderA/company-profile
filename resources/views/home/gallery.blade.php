@extends('home.layout')

@section('gallery')
active
@endsection

@section('content')

<div class="col-12">
    <div class="card card-primary">
        <div class="card-body">
            <div>
                <div class="btn-group w-100 mb-2 bg-light">
                    <a class="btn btn-light active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-light" href="javascript:void(0)" data-filter="Gx"> Gx </a>
                    <a class="btn btn-light" href="javascript:void(0)" data-filter="V / V Max"> V / V Max </a>
                </div>
                <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle=""> Shuffle items </a>
                </div>
                <div>
                    <div class="filter-container p-0 row-g0" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 3735px;">
                        @foreach ($gallery as $g)
                        <div class="filtr-item col-md-4" data-category="{{ $g->category }}" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 479px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                            <p href="{{ asset('storage/' . $g->image) }}" data-toggle="lightbox" data-title="{{ $g->category }}">
                                <div class="col-md-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('storage/' . $g->image) }}" class="card-img-top" alt="No Image">
                                        <div class="card-body">
                                        <h5 class="card-text" style="text-align: center">{{ $g->title }}</h5>
                                        <p class="card-text"><?php echo $g->content ?></p>
                                        </div>
                                    </div>
                                </div>
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection