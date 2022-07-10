@extends('home.layout')

@section('contact')
active
@endsection

@section('content')

<div class="content mt-3">
    <br>
    <h3>Contact Us</h3>
    @foreach ($contact as $c)
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-house"></i></span>
        <input type="text" class="form-control" value="{{ $c->alamat }}" disabled>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="text" class="form-control" value="{{ $c->telp }}" disabled>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" class="form-control" value="{{ $c->email }}" disabled>
    </div>
    <a href="{{ $c->web }}" target="_blank"><div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-computer"></i></i></i></span>
        <input type="text" class="form-control" value="{{ $c->web }}" disabled>
    </div></a>
    @endforeach
</div>

<div class="content mt-3">
    <div id="map" style="height: 400px;"></div>

<script type="text/javascript">
    function initMap() {
      const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatLng,
      });

      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello!",
      });
    }

    window.initMap = initMap;
</script>

<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

</div>

<div class="content mt-3">
    <div class="col-md-12">

        <div class="card card-dark">
        <div class="card-header">
        <h3 class="card-title">Contact Us</h3>
        </div>
        
        
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject" value="{{ old('subject') }}">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                        <input id="contents" type="hidden" name="content" class="form-control" value="{{ old('content') }}">
                        <trix-editor input="contents"></trix-editor>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
</div>

@endsection