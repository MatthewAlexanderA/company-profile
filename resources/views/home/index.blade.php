@extends('home.layout')

@section('home')
active
@endsection

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($slider as $s)
          <div class="carousel-item active">
            <img src="{{ asset('storage/' . $s->image) }}" class="d-block w-100" style="max-height: 300px;" alt="No Image">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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