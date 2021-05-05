<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>{{$nama}}</title>
  </head>
  <body>
    
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <span class="navbar-brand mb-0 h1">Admin, Hasan Nasrullah</span>
        <a href="#" class="text-white text-decoration-none">Log out</a>
      </div>
    </nav>
   
    <div class="container">
      <div class="card-deck mt-4">
        <div class="row">
          <div class="col-12 col-md-4 mt-2 d-flex align-items-center">
            <h1>Lorem ipsum dolor sit.</h1>
          </div>
          @for($i=0;$i<5;$i++)
            <div class="col-12 col-md-4 mt-2">
              <div class="card border-2 border-dark">
                <img src="../img/{{$gambars[$i]->file}}" class="mx-auto d-block w-100" alt="...">
                <div class="card-body">
                  <div class="mb-3">
                    <form action="" method="POST">
                      <input class="form-control mb-2" type="file" id="formFile">
                      <button type="submit" class="btn btn-primary w-100">Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
      <hr class="mt-4">
      <div class="card-deck mt-4">
        <div class="row">
          <div class="col-12 col-md-4 mt-2 d-flex align-items-center">
            <h1>Lorem ipsum dolor sit.</h1>
          </div>
          @for($i=5;$i<10;$i++)
            <div class="col-12 col-md-4 mt-2">
              <div class="card border-2 border-dark">
                <img src="../../img/{{$gambars[$i]->file}}" class="mx-auto d-block w-100" alt="...">
                <div class="card-body">
                  <div class="mb-3">
                    <form action="" method="POST">
                      <input class="form-control mb-2" type="file" id="formFile">
                      <button type="submit" class="btn btn-primary w-100">Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
      <hr class="mt-4">
      <div class="card-deck mt-4">
        <div class="row">
          <div class="col-12 col-md-4 mt-2 d-flex align-items-center">
            <h1>Lorem ipsum dolor sit.</h1>
          </div>
          @for($i=10;$i<15;$i++)
            <div class="col-12 col-md-4 mt-2">
              <div class="card border-2 border-dark">
                <img src="../img/{{$gambars[$i]->file}}" class="mx-auto d-block w-100" alt="...">
                <div class="card-body">
                  <div class="mb-3">
                    <form action="" method="POST">
                      <input class="form-control mb-2" type="file" id="formFile">
                      <button type="submit" class="btn btn-primary w-100">Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
      <hr class="mt-4">
      <div class="card-deck mt-4">
        <div class="row">
          <div class="col-12 col-md-4 mt-2 d-flex align-items-center">
            <h1>Lorem ipsum dolor sit.</h1>
          </div>
          @for($i=15;$i<20;$i++)
            <div class="col-12 col-md-4 mt-2">
              <div class="card border-2 border-dark">
                <img src="../img/{{$gambars[$i]->file}}" class="mx-auto d-block w-100" alt="...">
                <div class="card-body">
                  <div class="mb-3">
                    <form action="" method="POST">
                      <input class="form-control mb-2" type="file" id="formFile">
                      <button type="submit" class="btn btn-primary w-100">Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
      <hr class="mt-4">
      <div class="card-deck mt-4">
        <div class="row">
          <div class="col-12 col-md-4 mt-2 d-flex align-items-center">
            <h1>Lorem ipsum dolor sit.</h1>
          </div>
          @for($i=20;$i<24;$i++)
            <div class="col-12 col-md-4 mt-2">
              <div class="card border-2 border-dark">
                <img src="../img/{{$gambars[$i]->file}}" class="mx-auto d-block w-100" alt="...">
                <div class="card-body">
                  <div class="mb-3">
                    <form action="" method="POST">
                      <input class="form-control mb-2" type="file" id="formFile">
                      <button type="submit" class="btn btn-primary w-100">Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>