@extends('admin.layout')

@section('dashboard')
active
@endsection

@section('title')
Dashboard
@endsection

@section('content')

<h5 class="mb-2 mt-4">Visitors Information</h5>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>

                <p>Total Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>10</h3>

                <p>Today Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-clock"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
</div>

<h5 class="mb-2 mt-4">Data Information</h5>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-dark">
            <div class="inner">
                <h3>{{ $service }}</h3>

                <p>Total Services</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $gallery }}</h3>

                <p>Total Galleries</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-image"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner" style="color: white">
                <h3>{{ $testimonial }}</h3>

                <p>Total Testimonials</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-comment"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>{{ $blog }}</h3>

                <p>Total Blog</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-file"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-orange">
            <div class="inner" style="color: white">
                <h3>{{ $slider }}</h3>

                <p>Total Slider</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-sliders"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-navy">
            <div class="inner">
                <h3>{{ $category_g }}</h3>

                <p>Total Category (Gallery)</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-quote-left"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ $category_b }}</h3>

                <p>Total Category (Blog)</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-quote-left"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
</div>

@endsection