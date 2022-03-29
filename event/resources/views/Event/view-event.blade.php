@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>Nội dung sự kiện</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
          <div class="details">
            <h2>{{ $speaker->name }}</h2>
            <a class="buy-tickets2" href="#">Tham gia ngay</a>
            <p class="mt-2">{{ $speaker->full_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection