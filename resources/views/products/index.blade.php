<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Product - Edit Barang</title>
    <link rel="stylesheet" href="{{ ('Admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body style="background: lightcyan " class="bg-[#E8FFFB] font-['Poppins'] w-full overflow-x-hidden">
    <!-- NAVBAR -->
    <div class="fixed w-full z-20 top-0">
        @include('products.navbarAdmin')
    </div>
    <!-- NAVBAR END -->

    <div class="container mt-16">
        <div class="row mt-32">
            <div class="col-md-12">
                <div>
                    <!-- <h3 class="text-center my-4">Edit Barang</h3> -->
                    <a href="{{ route('products.create') }}" class="fixed btn btn-md" style="background-color: mediumslateblue; color: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); position: absolute; right: 140px;">Tambah Produk</a>
                    <br><br>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center my-4">Gambar</th>
                                    <th class="text-center my-4">Nama</th>
                                    <th class="text-center my-4">Harga</th>
                                    <th class="text-center my-4">Stok</th>
                                    <!-- <th scope="col" style="width: 20%">Aksi</th> -->
                                    <th class="text-center my-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $product->nama_item }}</td>
                                    <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td class="text-center">
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
                                <div class="alert alert-danger">
                                    Data Kamera belum Tersedia.
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        if (session('success'))
            Swal.fire({
                icon: "success",
                nama_item: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        elseif(session('error'))
        Swal.fire({
            icon: "error",
            nama_item: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        endif
    </script>

</body>

</html>