<!doctype html>
<html lang="en">
  <head>
    <title>buat akun panitia</title>
  </head>
  <body>
    <h1>buat akun Peserta</h1>
    <h3>Lengkapi lagi tampilannya</h3>
    <button><a href="/">kembali</a></button>
    <button><a href="/loginpanitia">login panitia</a></button>

    <form action="/signup/peserta" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <input type="password" name="password-auth" placeholder="masukan ulang password"> <br>
        <button type="submit">daftar</button>
      </form>
  </body>
</html>