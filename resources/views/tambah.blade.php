<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Transaksi</h2>
        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <div class="left">
                    <label for="nama">Nama Penyewa</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="right">
                    <label for="jamAmbil">Jam Ambil</label>
                    <input type="text" id="jamAmbil" name="jamAmbil" required>
                </div>
            </div>
            <div class="form-group">
                <div class="left">
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" id="namabarang" name="namabarang" required>
                </div>
                <div class="right">
                    <label for="tglAmbil">Tanggal Ambil</label>
                    <input type="text" id="tglAmbil" name="tglAmbil" required>
                </div>
            </div>
            <div class="form-group">
                <div class="left">
                    <label for="jaminan">Jaminan</label>
                    <input type="text" id="jaminan" name="jaminan" required>
                </div>
                <div class="right">
                    <label for="tglKembali">Tanggal Kembali</label>
                    <input type="text" id="tglKembali" name="tglKembali" required>
                </div>
            </div>
            <div class="button-container">
                <button type="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</body>
</html>