<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental | KaryCam</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-[#E8FFFB] font-['Poppins'] w-full overflow-x-hidden">

    <!-- NAVBAR -->
    <div class="fixed w-full z-20">
        @include('navbar')
    </div>
    <!-- NAVBAR END -->

    <!-- CONTAIN 1 -->
    <section class="pt-12 md:pt-20 px-2 flex justify-between w-full">
        <div class="md:ml-8 ml-0">
            <!-- div teks -->
            <div class="md:mt-14 fixed w-full z-10 md:w-1/3">
                <div class="md:block hidden">
                    <h3 class="text-xl">Selamat datang di</h3>
                    <h1 class="font-semibold text-6xl" style="background: linear-gradient(to right, #4F46E5, #02CCFE); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent; ">KaryCam!</h1>
                    <p class="mt-3 text-lg">
                        Kamu lagi butuh alat apa nih?<br>
                        Kayanya ada disini!<br>
                    </p>
                </div>

                <!-- Menu -->
                <div class="py-2 font-semibold md:font-bold text-sm md:text-base text-black flex flex-wrap gap-3  justify-center md:justify-start bg-[#e8fffb67] backdrop-blur-sm border-b-[1px] broder-white  md:border-none">
                    <a href="#camera">
                        <h1 class=" inline-block border-2 border-[#8152fb] hover:text-[#8152FB] rounded-full md:p-1 px-2 md:px-5">Kamera</h1>
                    </a>
                    <a href="#lensa">
                        <h1 class=" inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full md:p-1 px-2 md:px-5">Lensa</h1>
                    </a>
                    <a href="#tripod">
                        <h1 class=" inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full md:p-1 px-2 md:px-5">Tripod</h1>
                    </a>
                </div>
            </div>
            <!-- Menu End  -->
        </div>
        <!-- CONTAIN 1 END-->

        <!-- RENTAL -->
        <div class="md:right-0 w-full md:w-2/3 my-12">
            <!-- camera -->
            <section id="camera" class="flex flex-wrap justify-center gap-4">
                <!-- Item -->
                @foreach ($cameras as $product)
                <a href="{{ route('spesifikasi.show', $product->id) }}">
                    <div class="link-item w-[120px] md:w-[190px] p-2 md:p-4">
                        <div class="h-2/5">
                            <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" style="object-fit:cover" class="w-[100px] h-[100px] md:w-[154px] md:h-[154px]" />
                        </div>
                        <div class="mt-4">
                            <h1 class="shorten-text font-bold text-xs md:text-base mt-[-8px]">{{ $product->nama_item }}</h1>
                            <p class="font-normal text-[8px] md:text-xs">Tersedia {{ $product->stock }}</p>
                            <h1 class="text-[#8152fb] text-xs md:text-base font-semibold">{{ "Rp " . number_format($product->price,2,',','.') }}</h1>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- item end  -->
            </section>

            <section id="lensa" class="flex flex-wrap justify-center  gap-4 mt-4">
                <!-- Item -->
                @foreach ($lensas as $product)
                <a href="{{ route('spesifikasi.show', $product->id) }}">
                    <div class="link-item w-[120px] md:w-[190px] p-2 md:p-4">
                        <div class="h-2/5">
                            <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" style="object-fit:cover" class="w-[100px] h-[100px] md:w-[154px] md:h-[154px]" />
                        </div>
                        <div class="mt-4">
                            <h1 class="shorten-text font-bold text-xs md:text-base mt-[-8px]">{{ $product->nama_item }}</h1>
                            <p class="font-normal text-[8px] md:text-xs">Tersedia {{ $product->stock }}</p>
                            <h1 class="text-[#8152fb] text-xs md:text-base font-semibold">{{ "Rp " . number_format($product->price,2,',','.') }}</h1>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- item end  -->
            </section>

            <section id="tripod" class="flex flex-wrap justify-center  gap-4 mt-4">
                <!-- Item -->
                @foreach ($tripods as $product)
                <a href="{{ route('spesifikasi.show', $product->id) }}">
                    <div class="link-item w-[120px] md:w-[190px] p-2 md:p-4">
                        <div class="h-2/5">
                            <img src="{{ asset('/storage/products/' . $product->image) }}" alt="{{ $product->nama_item }}" style="object-fit:cover" class="w-[100px] h-[100px] md:w-[154px] md:h-[154px]" />
                        </div>
                        <div class="mt-4">
                            <h1 class="shorten-text font-bold text-xs md:text-base mt-[-8px]">{{ $product->nama_item }}</h1>
                            <p class="font-normal text-[8px] md:text-xs">Tersedia {{ $product->stock }}</p>
                            <h1 class="text-[#8152fb] text-xs md:text-base font-semibold">{{ "Rp " . number_format($product->price,2,',','.') }}</h1>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- item end  -->
            </section>
        </div>
        <!-- RENTAL END -->
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elements = document.querySelectorAll('.shorten-text');
            elements.forEach(function(element) {
                var text = element.innerText;
                if (text.length > 13) {
                    element.innerText = text.substring(0, 10) + '...';
                }
            });
        });
    </script>
</body>

</html>