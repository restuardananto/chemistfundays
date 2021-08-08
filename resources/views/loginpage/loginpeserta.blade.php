<!doctype html>
<html lang="en">
  <head>
    <title>Chemist Fun Days</title>
  </head>
  <body>
    <h1>Login Peserta</h1>
    <h3>Lengkapi lagi tampilannya</h3>
    <button><a href="/">kembali</a></button>
    <button><a href="/loginpanitiapage">login panitia</a></button>
    <p>jika belum punya akun daftar dulu disini</p>
    <button><a href="/signuppeserta">daftar sebagai peserta</a></button>

    <form action="/login/pesertapage" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <button type="submit">login</button>
      </form>
  </body>
</html>