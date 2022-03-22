<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Sự kiện nổi bật</h2>
      <p>Những sự kiện đặc sắc</p>
    </div>

    <div class="row">
      @foreach($speakers as $speaker)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
            <div class="details">
              <h3><a href="{{ route('speaker', $speaker->id) }}">{{ $speaker->name }}</a></h3>
              <p>{{ $speaker->description }}</p>
              <div class="social">
                @if($speaker->twitter)
                  <a class="buy-tickets cursor-pointer" href="{{ $speaker->twitter }}">Tham gia ngay</a>
                @endif
               
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
