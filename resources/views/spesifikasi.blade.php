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

<body class="bg-[#E8FFFB] font-['Poppins'] w-full">
    <!-- NAVBAR -->
    <div class="fixed w-full z-20">
        @include('navbar')
    </div>
    <!-- NAVBAR END -->

    <section class="md:flex w-full justify-between px-8 relative">
        <div>
            <div class="w-full md:w-1/3 p-8 md:mt-12 md:fixed ">
                <h3 class="text-2xl my-3 font-semibold md:text-left text-center">{{ $product->nama_item }}</h3>
                <div class="border-2 border-purple-600 rounded-lg">
                    <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}">
                </div>
                <div class="my-2 md:text-left text-center  md:text-lg text-sm w-full">
                    <h1>Tersedia {{ $product->stock }}</h1>
                    <h1>{{ "Rp " . number_format($product->price,2,',','.') }}</h1>
                </div>
                <a href="https://wa.me/6281331571129" class="flex items-center justify-center bg-purple-600 rounded-full" target="_blank">
                    <img src="../Media/Icon/Whatsapp.png" alt="WhatsApp" class="w-8 md:w-12">
                    <div class=" md:text-lg text-sm font-bold text-white">Booking</div>
                </a>
            </div>
        </div>

        <div class="bg-white overflow-y-auto text-xs md:text-base rounded-lg w-full md:w-2/3 right-0 p-8 md:mt-20">
            <p>{{ $product->description }}</p>
        </div>
    </section>
</body>

</html>