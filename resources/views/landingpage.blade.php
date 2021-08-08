<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/csscustom/landingpage.css') !!}">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex flex-row justify-content-start">
          <a class="navbar-brand" href="/">
            <img src="{!! asset('assets/img/vector-logo.png') !!}" height="50" width="120">
          </a>
            <div class="menu collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="/signuppesertapage">
                    <p>Buat akun</p>
                </a>
                <a href="/loginpesertapage">
                  <button type="button" class="tombol btn">Masuk</button>
                </a>
              </div>
            </div>
        </div>
      </nav>
  </body>
</html>