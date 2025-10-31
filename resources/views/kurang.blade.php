<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Kurang</title>
</head>
<body>
  <h1>Form Kurang-kurangan</h1>
  <form action="{{ route('storeKurang') }}" method="post">
    @csrf
    <label for="">Angka 1</label>
    <input type="text" placeholder="Masukkan Angka" name="angka1">
    <br><br>
    <label for="">Angka 2</label>
    <input type="text" placeholder="Masukkan Angka" name="angka2">
    <br>
    <button type="submit">Simpan</button>
  </form>

  <p>Hasilnya adalah : <strong>{{ $kurang ?? 0 }}</strong></p>
</body>
</html>