<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightcyan">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                <!-- Pesan error untuk gambar produk -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        Gambar wajib diunggah.
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA PRODUK</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Nama Produk">

                                <!-- Pesan error untuk nama produk -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        Nama produk wajib diisi.
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DESKRIPSI PRODUK</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Deskripsi Produk">{{ old('description') }}</textarea>

                                <!-- Pesan error untuk deskripsi produk -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        Deskripsi produk wajib diisi.
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">HARGA SEWA</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Produk">

                                        <!-- Pesan error untuk harga sewa -->
                                        @error('price')
                                            <div class="alert alert-danger mt-2">
                                                Harga produk wajib diisi dengan angka.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">STOK</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" placeholder="Masukkan Stok Produk">

                                        <!-- Pesan error untuk stok -->
                                        @error('stock')
                                            <div class="alert alert-danger mt-2">
                                                Stok produk wajib diisi dengan angka.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</body>
</html>
