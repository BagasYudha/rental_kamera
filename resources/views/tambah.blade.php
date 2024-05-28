<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="{{ asset('tambah.css') }}">
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
                    <input type="time" id="jamAmbil" name="jamAmbil" required>
                </div>
            </div>
            <div class="form-group">
                <div class="left">
                    <label for="nama_item">Nama Barang</label>
                    <select id="nama_item" name="nama_item" class="select-barang">
                        <option value="" disabled selected>Pilih barang</option>
                        @foreach($products as $product)
                            <option value="{{ $product->nama_item }}">{{ $product->nama_item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="right">
                    <label for="tglAmbil">Tanggal Ambil</label>
                    <input type="date" id="tglAmbil" name="tglAmbil" required>
                </div>
            </div>
            <div class="form-group">
                <div class="left">
                    <label for="jaminan"> Jaminan : </label><br>
                    <input type="radio" id="ktp" name="jaminan" value="KTP" required>
                    <label for="ktp">KTP</label><br>
                    <input type="radio" id="sim" name="jaminan" value="SIM">
                    <label for="sim">SIM</label><br>
                    <input type="radio" id="kta" name="jaminan" value="KTA">
                    <label for="kta">KTA</label><br>
                </div>
                <div class="right">
                    <label for="tglKembali">Tanggal Kembali</label>
                    <input type="date" id="tglKembali" name="tglKembali" required>
                </div>
            </div>
            <div class="button-container">
                <button type="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</body>
</html>
