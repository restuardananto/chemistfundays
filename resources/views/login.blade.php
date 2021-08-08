<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/csscustom/login.css') !!}">

    <title>Log In</title>
  </head>
  <body>
   <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
           <a class="navbar-brand" href="#">
               <img src="{!! asset('assets/img/vector-logo.png') !!}" height="80" width="170" class="logocfd">
           </a>
           <button class="navbar-toggler mb-4 bg-kuning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
           aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link rounded-pill bg-ungu1 shadow" href="#">Panitia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill bg-ungu2 shadow" href="#">Peserta</a>
                    </li>

                </ul>

            </div>
       </div>
   </nav>

   <!--Content-->
   <div class="container">
       <div class="row mt-5 mb-5">

           <div class="col-lg-12 gambar">
               <img src="{!! asset('assets/img/maskot.png') !!}" width="100%">
           </div>
           <div class="col-lg-12 atom-1">
               <img src="{!! asset('assets/img/atom-logo.png') !!}" width="100%">
           </div>
           <div class="col-lg-12 atom-2">
            <img src="{!! asset('assets/img/atom-logo.png') !!}" width="100%">
        </div>
        <div class="col-lg-12 atom-3">
            <img src="{!! asset('assets/img/atom-logo.png') !!}" width="100%">
        </div>

           <div class="col-sm-12 position-relative p-4">
            <h1 class="display-1 text-truncate tebel-banget"><b>Have fun and be came the winner !</b></h1>
           </div>
       </div>
   </div>
     <!--Login Page-->
     <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <div class="input-field">
                        <input type="text" placeholder="Email" class="untuk-login">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" class="untuk-password">
                    </div>
                    <div class="col-sm-12 position-relative p-4">
                        <a class="nav-link active tebel-regis" href="#">Register Now!</a>
                    </div>
                    <div class="">
                        <a href="#" class="button rounded-pill shadow tombol">Login</a>
                    </div>
                </form>
                
            </div>

        </div>
      </div>     
    

    <script src="bs5/dist/js/bootstrap.bundle.js" ></script>

    
  </body>
</html>