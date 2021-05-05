<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah</title>
  </head>
  <body>
      <div class="container" style="margin-top: 100px">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('nomor')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          <form action="/admin/data/insert" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="nama" class="form-label">nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
              </div>
              <div class="mb-3">
                  <label for="nomor" class="form-label">nomor</label>
                  <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor">
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
              </div>
              <div class="mb-3">
                  <label class="form-label" for="pass">Password</label>
                  <input type="password" class="form-control @error('pass') is-invalid @enderror" id="pass" name="pass">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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