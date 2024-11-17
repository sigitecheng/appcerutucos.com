
@include('tambahanfitur.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #8B4513, #000000); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/">
                 <div class="flex items-center gap-[2px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img width="80px;" height="80px;" src="/assets/gambardepan/iconcos2.png" alt="/assets/gambardepan/iconcos2.png">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p></p> --}}
                        <p class="text-xs leading-[18px]">Coeroetoe Oerang Soenda</p>
                        <p class="font-semibold text-sm">Back</p>
                    </div>
                </div>
            </a>   
{{--              
             <a href="/lokasimakangratis">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0 text-white">
                        <img src="/assets/css/fe_css/images/tentangkami/tempatmakangratis.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        <p class="text-xs leading-[18px]">Location</p>
                        <p class="font-semibold text-sm">Lokasi Makan Gratis</p>
                    </div>
                </div>
            </a>    --}}
             
             {{-- <a href="/daftarumkm">
                 <div class="flex items-center gap-[10px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img src="/assets/css/fe_css/images/tentangkami/listumkm.png" alt="icon">
                    </div>
                    <div class="flex flex-col text-white">
                        <p class="text-xs leading-[18px]">Location</p>
                        <p class="font-semibold text-sm">Daftar UMKM</p>
                    </div>
                </div>
            </a>    --}}
             
             
        
            </nav>

            <div class="mt-[30px] z-10">
                @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px;">Selamat Datang ! <span class="font-bold" style="color:white"> {{ auth()->user()->name }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">Products Cos <br></h1>
                        @endif
             
                 @if(auth()->check()) 
                            <!-- Jika pengguna sudah login -->
                            <h1 class="font-semibold leading-[36px] text-white text-center" style="font-size: 18px;">Anda Adalah <span class="font-bold" style="color:white"> {{ auth()->user()->is_admin }}</span></h1>
                        @else
                            <!-- Jika pengguna belum login -->
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">Coeroetoe Oerang Soenda<br></h1>
                        @endif

            </div>
            
            <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 1rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                <img src="/assets/gambardepan/handmadecigar.png" class="width: 100%; height: 100%; object-fit: contain" alt="/assets/gambardepan/handmadecigar.png">
            </div>
            </div>

            {{-- <div class="container" style="display: flex; justify-content: center; margin-top: 10px; margin-left: 10px; margin-right: 10px;">
                <div class="scrollable-div" style="width: 100%; max-width: 100%; height: 300px; overflow-y: scroll; border: 1px solid #ccc; border-radius: 8px;">
                      
                    <div id="latest-fundrising">
                       <br>
                       <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 14px; padding-left: 10px; padding-right: 10px;">

                            
                            
                            <br><br>
                        </div>
                    </div>
                </div>
            </div> --}}
             


        <div class="flex flex-col gap-4 px-4">

            {{-- @foreach ($data_tentangkami as $data) --}}
            
            {{-- <div style="margin-top:10px;" class="w-full h-[1200px] flex shrink-0 rounded-2xl overflow-hidden">
                <iframe width="100%" height="100%" src="/assets/video/cerutu.mp4?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
             --}}

             <a href="/produk1" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/3.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/3.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Cos Grand Robusto</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">50</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">20 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">150 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">Parejo</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time Consumption: <span style="font-size: 14px; color: black;">60 Minutes</span></p>
                    
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">Cuban Taste</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">7/9</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">Besuki Naoogst</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">Javano</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">Javano</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">$100 / IDR Rp. 1.500.000,-</span></p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

             <a href="/produk2" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/costorpedo.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/costorpedo.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Cos Grand Torpedo</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">54</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">22 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">145 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">Piramide</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">50 Minutes</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">Cuban Taste</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">7/9</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">Besuki Naoogst</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">Javano</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">Javano</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">$100 / IDR Rp. 1.500.000,-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>


            
<a href="/produk7" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/8.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/8.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Cos Minion Cigar HT Box</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">50</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">20 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">50 mm</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">Parejo</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">15 Minutes</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">Cuban Taste</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">7/9</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">Besuki Naoogst</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">Javano</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">Javano</span></p>
                        {{-- <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p> --}}
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Packaging: <span style="font-size: 14px; color: black;">Glass Tubos</span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</a>


            
<a href="/produk3" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/1.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
            
<a href="/produk4" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/5.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/5.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
            
<a href="/produk5" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/6.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/6.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
            
<a href="/produk6" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/7.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/7.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

            
            
            
            
<a href="/produk8" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/9.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/9.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
            
            
<a href="/produk9" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/10.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/10.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
            
<a href="/produk10" class="card">
    <div class="card" style="position: relative; cursor: pointer;">
        <div class="w-full flex items-start p-[14px] gap-6 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, #8B4513, white); margin-top: 5px;">
            <!-- Gambar di Kiri -->
            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                <img src="/assets/gambardepan/dokumentasi/13.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/13.jpeg">
            </div>

            <!-- Konten Informasi Produk di Kanan -->
            <div class="flex flex-col gap-1 product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
                <div class="flex gap-4" style="display: flex; flex-wrap: wrap;">
                    <!-- Kolom Kiri (Informasi Utama) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">Produk: <span style="font-size: 14px; color: white;">Comming Soon</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Gauge: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Ring Diameter: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Length: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Cigar Shape: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Time: <span style="font-size: 14px; color: black;">-</span></p>
                    </div>

                    <!-- Kolom Kanan (Informasi Tambahan) -->
                    <div class="flex-1">
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Taste: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Strength: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Wrapper: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Blinder: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: black; font-size: 14px; font-weight: 600; line-height: 18px;">Filler: <span style="font-size: 14px; color: black;">-</span></p>
                        <p class="product-detail" style="color: green; font-size: 14px; font-weight: 600; line-height: 18px;">Price: <span style="font-size: 14px; color: green;">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

            
         
            {{-- @endforeach --}}
            
            
        </div>

             
        @include('tambahanfitur.menuandroid')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('tambahanfitur.informasiperusahaan')

                       <h6 class="text-center font-semibold text-sm text-stone-600" style="text-align: center; font-weight: 600; font-size: 0.875rem; color: #4B5563;">
                Developed By <a href="https://wa.me/081321455855" target="_blank">sarigit.com</a>
              </h6>


    </section>


    @include('tambahanfitur.footer')