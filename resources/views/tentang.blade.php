@section('style')
"{{asset('css/tentang.css')}}"    
@endsection
    @section('title')
    Tentang kami
    @endsection
    @include('template.header')
    <!-- Judul -->
    <section class="judul">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1 class="text-center">is simply dummy text</h1>
                    <h5 class="text-center">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Judul -->
    
    <!-- Tentang -->
    <section class="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4>Lorem ipsum dolor sit amet, consectetur.</h4>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quaerat modi culpa, hic molestias ad nostrum iusto suscipit et sequi ratione aperiam, ex quam illum. Quam ducimus odio magni ad. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eaque iusto nam. Quibusdam nostrum exercitationem ab, unde fugiat voluptatum tempore corporis incidunt error, distinctio voluptas quo dolorem repellat sed quam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos esse doloremque nostrum sunt autem nesciunt dicta consequuntur cupiditate, commodi omnis id iusto vitae dolore in, provident dolor animi labore sit.</p>
                </div>
                <div class="col-lg-2 col-md-1"></div>
                <div class="col-lg-5 col-md-6"><div class="img"></div></div>
            </div>
        </div>
    </section>
    <!-- AKhir Tentang -->

    <!-- Galeri -->
    <section class="galeri">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active position-relative">
                            <div class="img w-100"></div>
                          </div>
                          <div class="carousel-item">
                            <div class="img w-100"></div>
                          </div>
                          <div class="carousel-item">
                            <div class="img w-100"></div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Galeri -->

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
          <div class="col d-md-flex justify-content-end col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Telepon</a>
          </div>
          <div class="col d-md-flex justify-content-center col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Whatsapp</a>
          </div>
          <div class="col d-md-flex justify-content-start col-12">
            <a class="btn border-2 mt-4" href="#" role="button">Facebook</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Hubungi -->
@include('template.footer')