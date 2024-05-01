<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="Transaksi.css">
</head>
<body>

      <div class="container">

        <div class="header-container">
            <h1>Transaksi</h1>
            <a href="{{ route('transaksi.create') }}" class="TambahTransaksi">Tambah Transaksi</a>
          </div>
          <hr>
          
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Peminjam</th>
          <th scope="col">Jaminan</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jam Ambil</th>
          <th scope="col">Tanggal Ambil</th>
          <th scope="col">Tanggal Kembali</th>
          <th scope="col"></th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($transaksis as $transaksi)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $transaksi->nama }}</td>
        <td>{{ $transaksi->jaminan }}</td>
        <td>{{ $transaksi->namabarang }}</td>
        <td>{{ $transaksi->jamAmbil }}</td>
        <td>{{ $transaksi->tglAmbil }}</td>
        <td>{{ $transaksi->tglKembali }}</td>
        <td>{{ $transaksi->aksi }}</td>
        <td class="text-center">
            <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="tombol">Selesai</button>
            </form>
        </td>
    </tr>
@endforeach
                            </tbody>
                        </table>
                        {{ $transaksis->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>