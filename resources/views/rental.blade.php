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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        .link-item {
    transform-origin: 50% 50%;
    width: 190px;
    height: 230px;
    padding: 0px 16px 0px 16px;
    border-radius: 16px;
    border-width: 2px;
    border-color: #e4f6ff;
    transition: all 0.3s ease;
    position: relative;
}

.link-item:hover {
    scale: 1.05;
    border-color: #8152fb;
}
    </style>

</head>

<body class="bg-[#E8FFFB] font-['Poppins'] w-full overflow-x-hidden">

    <!-- NAVBAR -->
    <div class="fixed w-full z-20">
        @include('navbar')
    </div>
    <!-- NAVBAR END -->

    <!-- CONTAIN 1 -->
    <section class="pt-32 px-[44px] flex justify-between w-full">
        <div>
            <!-- div teks -->
            <div class="md:mt-14 fixed w-1/3">
                <h3 class="text-xl">Selamat datang di</h3>
                <h1 class="font-semibold text-6xl" style="background: linear-gradient(to right, #4F46E5, #02CCFE); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent; ">KaryCam!</h1>
                <p class="mt-3 text-lg">
                    Kamu lagi butuh alat apa nih?<br>
                    Kayanya ada disini!<br>
                </p>

                <!-- Menu -->
                <div class="mt-2 font-bold text-black flex-wrap">
                    <a href="#camera">
                        <h1 class="mt-3 mr-3 inline-block  border-2 border-[#8152fb] hover:text-[#8152FB] rounded-full p-1 px-5">Kamera</h1>
                    </a>
                    <a href="#lensa">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-5">Lensa</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-5">Lightning</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-5">Tripod</h1>
                    </a>
                    <a href="#">
                        <h1 class="mt-3 mr-3 inline-block hover:text-[#8152FB] border-2 border-[#8152fb] rounded-full p-1 px-5">Aksesoris</h1>
                    </a>
                </div>
            </div>
            <!-- Menu End  -->
        </div>
        <!-- CONTAIN 1 END-->

        <!-- RENTAL -->
        <div class="right-0 w-2/3">
            <!-- camera -->
            <section id="camera" class="flex flex-wrap gap-4">
                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>

                <!-- Item -->
                <a href="/spesifikasi">
                    <div class="link-item">
                        <div>
                            <img src="Media/rental/26_eos_250d_bk_thefront_ef-s18-55iii_d4120ae9eba94280ab1158c449525a54.png" alt="Item Sewa" class="h-2/5">
                        </div>
                        <h1 class="font-bold mt-[-8px]">Canon EOS 200D</h1>
                        <p class="font-normal text-xs">Tersedia 5</p>
                        <h1 class="text-[#8152fb] font-semibold">Rp 50.000/hari</h1>
                    </div>
                </a>
            </section>
            <!-- camera end -->

            <!-- lensa -->
            <div class="my-[20px]">
                <section id="lensa" class="flex flex-wrap gap-4">

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                    <!-- Item -->
                    <a href="/spesifikasi">
                        <div class="link-item">
                            <div>
                                <img src="Media/rental/Lensa1.png" alt="Item Sewa" class="h-2/5">
                            </div>
                            <h1 class="font-bold">Sony Fix 35mm</h1>
                            <p class="font-normal text-xs">Tersedia 12</p>
                            <h1 class="text-[#8152fb] font-semibold">Rp 40.000/hari</h1>
                        </div>
                    </a>

                </section>
            </div>
            <!-- lensa end -->

    </section>
    </div>
    <!-- RENTAL END -->
    </section>
</body>

</html>