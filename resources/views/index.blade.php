<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rofikoh Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-[#7A7A7A] to-black">
    <nav class="flex mx-auto max-w-full py-5 justify-between fixed text-center items-center">
        <div class=" ml-20 space-x-10">
            <h1 class="text-white font-extrabold text-xl">PORTFOLIO</h1>
        </div>

        <div class="ml-[600px] space-x-7">
            <a href="#home" class="text-white hover:text-red-600 font-extrabold text-sm">HOME</a>
            <a href="#portfolio" class="text-white hover:text-red-600 font-extrabold text-sm">PORTFOLIO</a>
            <a href="#blog" class="text-white hover:text-red-600 font-extrabold text-sm">BLOG</a>
            <a href="#contact" class="text-white hover:text-red-600 font-extrabold text-sm">CONTACT</a>
            <a href="{{ url('/panel') }}" class="text-white hover:text-sky-300 font-extrabold text-sm">LOGIN</a>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto flex py-48 px-0 justify-between">
        <div class="ml-20 mt-20">
            <h1 class="text-white text-6xl font-bold">MY NAME IS</h1>
            <h1 class="text-white text-6xl font-bold">ROFIKOH  IKOH</h1>
            <div class="bg-yellow-400 w-[150px] mt-5 ml-28">
                <h1 class="py-3 text-center text-lg font-semibold">I'M STUDENT</h1>
            </div>
        </div>

        <div class="mr-48">
            <img src="img/gambar2.png" alt="" class="w-[310px]">
        </div>
    </section>

    <section name="portfolio" id="portfolio" class="max-w-full mx-auto flex py-32 px-0 justify-between bg-[#E5E0E0]">
        <div class="ml-28">
            <img src="img/gambar2.png" alt="" class="w-[310px]">
        </div>

        <div class="text-center mx-auto">
            <h1 class="text-black text-5xl font-extrabold">HELLO</h1>
            <div class="mt-10 text-black text-5xl text-left">
                <p>Perkenalkan nama saya Rofikoh</p>
                <p>saya Mahaiswa Politkenik Harber</p>
                <p>Prodi Teknik Komputer.</p>      
        </div>   
        </div>
    </section>

    <section name="blog" id="blog" class="max-w-full mx-auto flex flex-wrap py-32 px-0 justify-between bg-[#E5E0E0]">
        <div class="mx-96">
            <h1 class="text-4xl text-black ml-48 font-bold">MY BLOG</h1>
        </div>

        <!-- <div class="ml-28 flex flex-wrap"> -->
            <div class="text-black flex flex-wrap ml-44 mt-12">
                <div class="ml-20 mr-40 mb-5">
                    <img src="img/gambar4.png" alt="" class="w-[300px]">
                    <p class="text-xl font-semibold mt-5">saya suka mengedit foto</p>
                    <p class="text-xl font-semibold">atau mengedit foto di canva</p>
                </div>

                <div>
                    <img src="img/gambar3.png" alt="" class="w-[300px]">
                </div>
            </div>
        <!-- </div> -->
    </section>

    <section name="blog" id="blog" class="max-w-full mx-auto flex flex-wrap py-32 px-0 justify-between bg-[#373737]">
        <div class="mx-96">
            <h1 class="text-5xl text-white ml-36 font-bold">CONTACT ME</h1>
        </div>

            <div class="text-white flex flex-wrap ml-44 mt-12">
                <div class="ml-7 mr-40 mb-5">
                    <h1 class="text-5xl font-semibold mt-5 italic">081215847170</h1>
                    <h1 class="text-5xl font-semibold mt-5 italic">rrofikoh24@gmail.com</h1>
                    <h3 class="text-2xl font-semibold mt-5 italic">Tegal, Jawa Tengah, Indonesia</h3>

                    <form method="POST" class="pt-20">
                        @csrf
                        <div class="text-white text-xl my-5 space-x-2">
                            <label for="nama" class="text-yellow-400">Nama </label>
                            <input type="text" name="nama" id="nama" class="w-[500px] rounded-md px-2 text-black">
                        </div>
            
                        <div class="text-white text-xl my-5 space-x-2">
                            <label for="email" class="text-yellow-400">Email </label>
                            <input type="email" name="email" id="email" class="w-[503px] rounded-md px-2 text-black">
                        </div>
            
                        <div class="text-white text-xl my-5 space-x-2">
                            <textarea name="pesan" id="pesan" cols="58" rows="3" class="text-black rounded-md px-2" placeholder="Pesan..."></textarea>
                        </div>
            
                        <button type="submit" class="bg-yellow-400 text-center py-1 px-10 rounded-md text-black mx-auto">Kirim</button>
                    </form>
                </div>

                <div class="-mt-10 -ml-20">
                    <img src="img/gambar1.png" alt="" class="w-[420px]">
                </div>
            </div>
    </section>
</body>
</html>