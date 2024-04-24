<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="Transaksi.css">
</head>
<body>

      <div class="container">

        <div class="header-container">
            <h1>Transaksi</h1>
            <a href="{{ route('products.create') }}" class="TambahTransaksi">Tambah Transaksi</a>
          </div>
          <hr>
          
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Jaminan</th>
          <th>Nama Barang</th>
          <th>Jam Ambil</th>
          <th>Ambil</th>
          <th>Kembali</th>
          <th>Aksi</th>
        </tr>
      </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->Nama }}</td>
                                        <td>{{ $product->Jaminan }}</td>
                                        <td>{{ $product->Barang }}</td>
                                        <td>{{ $product->Jam }}</td>
                                        <td>{{ $product->Ambil }}</td>
                                        <td>{{ $product->Kembali }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>