@extends('layouts.app')

@section('content')

<div class="carousel slide carousel-fade" data-ride="carousel">

  <!-- SLIDESHOW CODE.-->
  
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>



<style type = 'text/css'>
  html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 0.5;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url({{ secure_asset('images/1.png') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(2) {
    background: url({{ secure_asset('images/2.png') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(3) {
    background: url({{ secure_asset('images/3.png') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}
.item:nth-child(4) {
    background: url({{ secure_asset('images/4.png') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.item:nth-child(5) {
    background: url({{ secure_asset('images/IMG_9946.JPG') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.item:nth-child(6) {
    background: url({{ secure_asset('images/IMG_9950.JPG') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: fixed;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  color:#000;
  margin-top: 20px;
  padding: 10px;
  /*text-shadow: 2px 2px #000;*/
}
</style>

<script type = 'text/javascript';>
  $('.carousel').carousel();
</script>

<center>
<img src="images/custom-logo.png" alt="Mountaineers" height="800" width="800">
</center>

<div id='welcome'>
  
  <center>
  <img src="images/color.png" alt="Mountaineers" height="370" width="1000">
  </center>
</div>
@endsection
