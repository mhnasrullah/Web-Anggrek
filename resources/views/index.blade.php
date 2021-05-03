@section('style')
"{{asset('css/style.css')}}"    
@endsection
@section('title')
    {{$nama}}
@endsection
@include('template.header')
    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-10 col">
            <h1 class="text-center">is simply dummy text of the printing and</h1>
            <h5 class="text-center">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h5>
            <div class="d-flex justify-content-center">
              <a class="btn border-2 mt-4 mb-5" href="#" role="button">Hubungi</a>
            </div>
            <div class="image"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Sekilas Anggrek -->
    <section class="sekilas">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-6">
            <div class="img w-100"></div>
          </div>
          <div class="col-1 d-lg-flex d-md-none d-none"></div>
          <div class="col mt-md-0 mt-4">
            <h4>is simply dummy text of the printing and</h4>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Sekilas Anggrek -->

    <!-- Produk -->
    <section class="produk">
      <div class="container">
        <div class="row mb-4 align-items-center mb-md-3 mb-5">
          <div class="col-lg-5 col-md-12">
            <h4>Lorem ipsum dolor sit amet</h4>
            <p class="mb-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-1 d-lg-flex d-md-none d-none"></div>
          <div class="col">
            <div class="img w-100"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 ">
            <img src="{{asset('img/produk.png')}}" class="w-100" alt="" srcset="">
            <h6 class="text-center mt-md-4 mt-2 fw-bolder">Lorem ipsum</h6>
            <p class="text-center mb-md-0 mb-3">Lorem ipsum dolor amet</p>
          </div>
          <div class="col-md-4 col-12">
            <img src="{{asset('img/produk.png')}}" class="w-100" alt="" srcset="">
            <h6 class="text-center mt-md-4 mt-2 fw-bolder">Lorem ipsum</h6>
            <p class="text-center mb-md-0 mb-3">Lorem ipsum dolor amet</p>
          </div>
          <div class="col-md-4 col-12">
            <img src="{{asset('img/produk.png')}}" class="w-100" alt="" srcset="">
            <h6 class="text-center mt-md-4 mt-2 fw-bolder">Lorem ipsum</h6>
            <p class="text-center mb-md-0 mb-3">Lorem ipsum dolor amet</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Produk -->

    <!-- Lokasi -->
    <section class="lokasi">
      <div class="container">
        <div class="row align-items-center">
          <div class="col d-lg-none mb-3">
            <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur </h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
          </div>
          <div class="col-lg-9 col-md-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5272.968045066934!2d111.91788345702204!3d-8.074684213849762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd656e6c7dad70255!2sPendowo%20Jok%20Mobil!5e0!3m2!1sid!2sid!4v1619529401629!5m2!1sid!2sid"  style="border: 4px solid #c4df9c;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-md-12 d-flex d-lg-none justify-content-center">
            <a class="btn border-2 mt-1" href="#" role="button">Lihat di map</a>
          </div>
          <div class="col d-none d-lg-inline-block">
            <h4>Lorem ipsum dolor sit amet, consectetur </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            <a class="btn border-2 mt-4" href="#" role="button">Lihat di map</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Lokasi -->
    
    <!-- Hubungi -->
    <section class="hubungi">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur </h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
          </div>
        </div>
        <div class="row gy-0">
          <div class="col-md-4 d-md-flex justify-content-end col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Telepon</a>
          </div>
          <div class="col-md-4 d-md-flex justify-content-center col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Whatsapp</a>
          </div>
          <div class="col-md-4 d-md-flex justify-content-start col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Facebook</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Hubungi -->
    @include('template.footer')