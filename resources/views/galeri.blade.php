@section('style')
"{{asset('css/galeri.css')}}"    
@endsection
@section('title')
    Galeri
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

    <!-- Galeri-->
    <section class="galeriA">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <h4>Lorem ipsum, dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dicta reprehenderit modi odit dolorem laudantium iure</p>
                </div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
            </div>
        </div>
    </section>

    <section class="galeriB">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <img src="{{asset('img/produk.png')}}"  alt="" srcset="">
                </div>
                <div class="col-md-4 col-6">
                    <h4>Lorem ipsum, dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dicta reprehenderit modi odit dolorem laudantium iure</p>
                </div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
            </div>
        </div>
    </section>

    <section class="galeriC">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6">
                    <h4>Lorem ipsum, dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dicta reprehenderit modi odit dolorem laudantium iure</p>
                </div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
            </div>
        </div>
    </section>

    <section class="galeriB">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <img src="{{asset('img/produk.png')}}"  alt="" srcset="">
                </div>
                <div class="col-md-4 col-6">
                    <h4>Lorem ipsum, dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dicta reprehenderit modi odit dolorem laudantium iure</p>
                </div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
            </div>
        </div>
    </section>

    <section class="galeriA">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <h4>Lorem ipsum, dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dicta reprehenderit modi odit dolorem laudantium iure</p>
                </div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
                <div class="col-md-4 col-6"><img src="{{asset('img/produk.png')}}"  alt="" srcset=""></div>
            </div>
        </div>
    </section>
    <!-- Akhir Galeri-->
@include('template.footer')