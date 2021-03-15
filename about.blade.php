@extends('template/layout')

@section('title','About')

@section('content')

<div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr1.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Real Betis vs Barcelona</h5>
        <p class="card-text">Gol Perdana Trincao Jadi Penentu Kemenangan Blaugrana Olahraga Barcelona
        Sheffield vs Chelsea: Tekuk Tuan Rumah, The Blues Naik ke Posisi Lima</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr2.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Lionel Messi Jadi Pemain Terbaik Satu Dekade Terakhir</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-3 mr-3" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/gbr3.jpg') }}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">5 Pemain Sepak Bola Terkaya pada 2021</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


@endsection