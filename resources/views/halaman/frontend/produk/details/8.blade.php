
@include('tambahanfitur.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom, #8B4513, #000000 ); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/produk">
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
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">About Cos <br></h1>
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
                
            <a href="#" class="card">
                        
                    <div style="margin-top:10px;" class="w-[200px] h-[200px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img width="50%" src="/assets/gambardepan/dokumentasi/9.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/9.jpeg">
                    </div>




                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513);  margin-top:10px;">
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-cigar" style="margin-right: 8px;"></i> Produk : <span style="font-size: 14px; color: white;">Cooming Soon</span>
                        </p>
                        <br>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-ring" style="margin-right: 8px;"></i> Ring Gauge : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-circle" style="margin-right: 8px;"></i> Ring Diameter : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-ruler" style="margin-right: 8px;"></i> Length : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-shapes" style="margin-right: 8px;"></i> Cigar Shape : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-clock" style="margin-right: 8px;"></i> Time Consumption : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-tint" style="margin-right: 8px;"></i> Taste : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-bolt" style="margin-right: 8px;"></i> Strength : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-leaf" style="margin-right: 8px;"></i> Wrapper : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-puzzle-piece" style="margin-right: 8px;"></i> Blinder : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: white; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-puzzle-piece" style="margin-right: 8px;"></i> Filler : <span style="font-size: 14px; color: white;">-</span>
                        </p>
                        <p class="product-detail" style="color: orange; font-size: 14px; font-weight: 600; line-height: 18px;">
                            <i class="fas fa-dollar-sign" style="margin-right: 8px;"></i> Price : <span style="font-size: 14px; color: orange;">-</span>
                        </p>
                        
                    
                     
                    </div>
                </div>

                {{-- <div class="w-full flex flex-col items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;"> --}}
                    {{-- <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div> --}}
                    {{-- <div class="w-full flex justify-center">
                        <a href="https://wa.me/6281321455855" target="_blank" style="width: 100%; max-width: 400px;">
                            <button class="btn btn-success" style="border-radius: 10px; width: 100%; background-color: #28a745; color: white; text-align: center; padding: 10px; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <i class="fas fa-shopping-cart"></i>
                                Order Here
                            </button>
                        </a>
                    </div>
                </div> --}}
                
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