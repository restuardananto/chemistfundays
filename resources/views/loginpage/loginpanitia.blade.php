<!doctype html>
<html lang="en">
  <head>
    <title>Chemist Fun Days</title>
  </head>
  <body>
    <h1>Login Panitia</h1>
    <h3>disini dikasih tampilan lagi yaa</h3>
    <button><a href="/">kembali</a></button>
    <button><a href="/loginpesertapage">login peserta</a></button>
    <p>jika belum punya akun daftar dulu disini</p>
    <button><a href="/daftarpeserta">daftar sebagai panitia</a></button>

    <form action="/login/panitia" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <button type="submit">login</button>
      </form>
  </body>
</html>