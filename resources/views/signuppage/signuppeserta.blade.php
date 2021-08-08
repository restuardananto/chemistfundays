<!doctype html>
<html lang="en">
  <head>
    <title>Chemist Fun Days</title>
  </head>
  <body>
    <h1>Landing Page</h1>
    <h3>disini dikasih tampilan tutorial cara login dan sebagainya</h3>
    <button><a href="/">kembali</a></button>
    <button><a href="/loginpesertapage">login peserta</a></button>

    <form action="/signup/peserta" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <input type="password" name="password-auth" placeholder="masukan ulang password"> <br>
        <button type="submit">daftar</button>
    </form>
  </body>
</html>