<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{asset('build/assets/images/Fresh_Stock_Content.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%;height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="mb-5">First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000" >
      <img src="{{asset('build/assets/images/pexels-pixabay-268533.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%;height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="mb-5">First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="{{asset('build/assets/images/sun-rise.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%;height:500px">
    <div class="carousel-caption d-none d-md-block">
        <h1 class="mb-5">First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
  </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


