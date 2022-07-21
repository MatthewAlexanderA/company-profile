@extends('home.layout')

@section('blog')
active
@endsection

<head>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62d8fe74111cf30019708670&product=sticky-share-buttons' async='async'></script>
</head>

@section('content')

<div class="content">

    <a href="/blogs"><button class="btn btn-danger">Back</button></a>

    <h3 style="text-align: center">{{ $blog->title }}</h2>
    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="No Image"><br><br>

    <h5><?= $blog->content ?></h5>
    <br><br>
</div>

@endsection