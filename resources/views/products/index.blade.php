<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Product - Edit Barang</title>
    <link rel="stylesheet" href="{{ ('Admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-[#ffffff] font-['Poppins'] w-full overflow-x-hidden">
    <!-- NAVBAR -->
    <div class="fixed w-full z-20 top-0">
        @include('products.navbarAdmin')
    </div>
    <!-- NAVBAR END -->

    <div class="container mt-16">
        <div class="row mt-32">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 style="margin-left: 60px; font-weight: bold; font-size: 20px;">Data Barang</h3>
                    <a href="{{ route('products.create') }}" class="btn btn-md" style="font-weight: bold; margin-right: 60px; background-color: mediumslateblue; color: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Tambah Produk</a>
                </div>
                <hr>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center my-4">Gambar</th>
                                    <th class="text-center my-4">Nama</th>
                                    <th class="text-center my-4">Kategori</th>
                                    <th class="text-center my-4">Harga Sewa</th>
                                    <th class="text-center my-4">Stok</th>
                                    <th class="text-center my-4" style="width: 180px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">{{ $product->nama_item }}</td>
                                    <td class="text-center">{{ $product->categories }}</td>
                                    <td class="text-center">{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                    <td class="text-center">{{ $product->stock }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-flex justify-content-center align-items-center gap-1">
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm d-flex align-items-center justify-content-center p-2" style="background-color: lightcyan; color: black; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); width: 40px; height: 40px;">
                                                <img src="/Media/Icon/show.png" alt="Show" style="width: 20px;">
                                            </a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm d-flex align-items-center justify-content-center p-2" style="background-color: lightcyan; color: black; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); width: 40px; height: 40px;">
                                                <img src="/Media/Icon/pensil.png" alt="Edit" style="width: 20px;">
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center justify-content-center p-2" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); width: 40px; height: 40px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px; fill: lightcyan;">
                                                    <path d="M135.2 3.4C138.9 1.2 143.2 0 147.6 0H300.4c4.4 0 8.7 1.2 12.4 3.4L334 15H448v48H416v392c0 30.9-25.1 56-56 56H88c-30.9 0-56-25.1-56-56V63H0V15H114L135.2 3.4zM368 63H80v392c0 8.8 7.2 16 16 16H352c8.8 0 16-7.2 16-16V63zM160 128c8.8 0 16 7.2 16 16V368c0 8.8-7.2 16-16 16s-16-7.2-16-16V144C144 135.2 151.2 128 160 128zM288 128c8.8 0 16 7.2 16 16V368c0 8.8-7.2 16-16 16s-16-7.2-16-16V144C272 135.2 279.2 128 288 128z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data produk belum tersedia.
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
        // Pesan dengan sweetalert
        if (session('success'))
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