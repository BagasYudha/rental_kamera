<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Transaksi</title>
  <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        <h2>Tambah Transaksi</h2>
        <form>
          <div class="grup-nama">
            <div class="left">
              <label for="nama-penyewa">Nama Penyewa</label>
              <input type="text" id="nama-penyewa" name="nama-penyewa">
              <label for="nama-item">Nama Item</label>
              <input type="text" id="nama-item" name="nama-item">
            </div>
            <div class="right">
              <div class="grup-waktu">
                <div class="date-time-input">
                  <label for="tanggal-ambil">Tanggal Ambil</label>
                  <input type="text" id="tanggal-ambil" name="tanggal-ambil">
                </div>
                <div class="Input-Time">
                  <label for="jam-ambil">Jam Ambil</label>
                  <input type="text" id="jam-ambil" name="jam-ambil">
                </div>
                <div class="Input-Time">
                  <label for="tanggal-kembali">Tanggal Kembali</label>
                  <input type="text" id="tanggal-kembali" name="tanggal-kembali">
                </div>
                <label for="jenis-jaminan">Jenis Jaminan</label>
                <div class="radio-group">
                  <input type="radio" id="ktp" name="jenis-jaminan" value="KTP" checked>
                  <label for="ktp">KTP</label>
                  <input type="radio" id="sim" name="jenis-jaminan" value="SIM">
                  <label for="sim">SIM</label>
                  <input type="radio" id="kta" name="jenis-jaminan" value="KTA">
                  <label for="kta">KTA</label>
                  <input type="radio" id="lainnya" name="jenis-jaminan" value="Lainnya">
                  <input type="text" id="lainnya" name="jenis-jaminan" value="Lainnya">
                  <label for="lainnya">Lainnya</label>
                </div>
              </div>
            </div>
          </div>
          <button href="{{ route('products.create') }}" type="submit">SELESAI</button>
        </form>
      </div>