<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="Transaksi.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>
    <nav class="px-[20px] font-['Poppins'] justify-between items-center flex w-full h-20 bg-[#ffffff67] backdrop-blur-sm border-b-[1px] border-white">
        <div class="justify-start w-56 h-full bg-cover bg-center" style="background-image: url('Media/Logo-hitam.png')">
        </div>
        <div class="flex justify-end w-full h-full items-center font-sans">
            <a href="/products" class="link font-bold px-3 py-2 mx-3">Dashboard</a>
            <a href="/Transaksi" class="link font-bold px-3 py-2 mx-3">Transaksi</a>
        </div>
    </nav>

    <div class="container">
        <div class="header-container">
            <h1 style="font-size: 2em;">Transaksi</h1>
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
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaksi->nama }}</td>
                    <td>{{ $transaksi->jaminan }}</td>
                    <td>{{ $transaksi->nama_item }}</td>
                    <td>{{ $transaksi->jamAmbil }}</td>
                    <td>{{ $transaksi->tglAmbil }}</td>
                    <td>{{ $transaksi->tglKembali }}</td>
                    <td class="aksi-cell">
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">
                                <box-icon name='check' color="white" size="35px"></box-icon>
                            </button>                        

                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $transaksis->links() }}
    </div>
</body>

</html>