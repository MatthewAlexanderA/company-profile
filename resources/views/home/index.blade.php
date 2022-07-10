@extends('home.layout')

@section('home')
active
@endsection

@section('content')

<div class="card-body">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slider as $s)
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 200px" src="{{ asset('storage/' . $s->image) }}" alt="No Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $s->title }}</h5>
                        <p><?php echo $s->content ?></p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

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

<div class="content mt-3">
    <br>
  <div class="card">
    <div class="card-body">
    @foreach ($why as $w)
      <h5 class="card-text" style="text-align: center">{{ $w->title }}</h5>
      <p class="card-text"><?php echo $w->content ?></p>
    @endforeach
    </div>
  </div>
</div>

<div class="content mt-3">
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

<div class="content mt-3">
    <br>
    <h3>Gallery</h3>
  <div class="row g-0">
    @foreach ($gallery as $g)
    <div class="col-md-3">
        <div class="card" style="">
            <img src="{{ asset('storage/' . $g->image) }}" class="card-img-top" alt="No Image">
        </div>
    </div>
    @endforeach
  </div>
</div>

<div class="content mt-3">
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

<div class="btn-floating fixed-bottom ms-3">
    <a href="https://wa.me/089517392715" target="_blank">
        <button class="btn-floating" style="border-radius:100px; background-color:rgb(80, 231, 80); width:50px; height:50px;">
            <i class="fa-brands fa-whatsapp"></i>
        </button>
    </a>
</div>

@endsection