<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kamera</title>
    <link rel="stylesheet" href="{{ ('Admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightcyan">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <!-- Logo -->
                    <img class="logo-icon" alt="" src="{{ ('media/logo-hitam.png') }}" />
                    <!-- Tombol Tambah Produk -->
                    <a href="{{ route('products.create') }}" class="btn btn-md mb-3" style="background-color: mediumslateblue; color: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); position: absolute; top: 45px; right: 140px;">Tambah Produk</a>
                    <br><br>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- Tabel Data Kamera -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center my-4">Gambar</th>
                                    <th class="text-center my-4">Nama</th>
                                    <th class="text-center my-4">Harga Sewa</th>
                                    <th class="text-center my-4">Stok</th>
                                    <th class="text-center my-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop untuk setiap produk -->
                                @forelse ($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td class="text-center">
                                            <!-- Form untuk tindakan: Tampilkan, Edit, Hapus -->
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm" style="background-color: lightcyan; color: black; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">SHOW</a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm" style="background-color: lightcyan; color: black; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <!-- Pesan jika data tidak tersedia -->
                                    <div class="alert alert-danger">
                                        Data Kamera belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Pesan dengan SweetAlert
        if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        endif

    </script>

</body>
</html>
