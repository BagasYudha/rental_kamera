<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->nama_item }}</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-[#E8FFFB] font-['Poppins'] w-full overflow-x-hidden">

    <!-- NAVBAR -->
    <div class="fixed w-full z-20">
        <nav class="px-[20px] font-['Poppins'] justify-between items-center flex w-full h-20 bg-[#e8fffb67] backdrop-blur-sm border-b-[1px] border-white">
            <a href="/adminlog" class="justify-start w-56 h-full bg-cover bg-center" style="background-image: url('Media/Logo-hitam.png')">
            </a>
            <div class="flex justify-end w-full h-full items-center font-sans">
                <a href="/" class="link font-bold px-3 py-2 mx-3">Beranda</a>
                <a href="/rental" class="link font-bold px-3 py-2 mx-3">Rental</a>
                <a href="/#Contact" class="link font-bold px-3 py-2 mx-3">Hubungi Kami</a>
            </div>
        </nav>
    </div>
    <!-- NAVBAR END -->

    <div class="container flex">
        <div class="left flex flex-col items-start p-5 fixed top-0 left-0">
            <h3 class="NamaBarang text-2xl font-semibold absolute top-20 left-24">{{ $product->nama_item }}</h3>
            <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" class="mt-32 ml-16 border-2 border-purple-600 p-5 rounded-lg max-w-xs">
            <div class="harga mt-4 ml-16">
                Tersedia {{ $product->stock }}<br>
                {{ "Rp " . number_format($product->price,2,',','.') }}
            </div>
            <div class="logo-whatsapp flex items-center bg-purple-600 w-52 h-12 ml-14 rounded-full mt-4">
                <a href="https://wa.me/6281331571129" class="whatsapp-link flex items-center" target="_blank">
                    <img src="./Media/Icon/Whatsapp.png" alt="WhatsApp" class="w-16 ml-2 mb-32 border-none"><span class="whatsapp-text text-xl ml-1 font-bold text-white">Booking</span>
                </a>
            </div>
        </div>
        <div class="right flex-2 p-12 bg-white overflow-y-auto ml-[600px] mt-24 relative rounded-lg">
            <p>{{ $product->description }}</p>
        </div>
    </div>
    </main>
</body>

</html>