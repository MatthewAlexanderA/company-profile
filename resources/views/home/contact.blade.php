@extends('home.layout')

@section('contact')
active
@endsection

@section('content')

<div class="content mt-3">
    <br>
    <h3>Contact Us</h3>
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
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-6" id="sec-568b">
        <div class="u-expanded u-grey-light-2 u-map">
          <div class="embed-responsive">
            <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=graha%20nurul%20menteng&amp;z=18&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyZ3JhaGElMjBudXJ1bCUyMG1lbnRlbmclMjIlMkMlMjJ6b29tJTIyJTNBMTglMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCUyQyUyMmVtYmVkJTIyJTNBJTIyJTIyJTdE"></iframe>
          </div>
        </div>
    </section>
</div>

{{-- <div class="content mt-3">
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

</div> --}} 

<div class="content mt-3">
    <div class="col-md-12">

        <div class="card card-dark">
        <div class="card-header">
        <h3 class="card-title">Contact Us</h3>
        </div>
        
        
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {!! NoCaptcha::renderJs('en', false, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
</div>

<script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>

@endsection