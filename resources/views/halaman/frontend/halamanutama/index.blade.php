
@include('tambahanfitur.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom,  #000000, #8B4513); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
            <nav class="pt-5 px-3 flex justify-between items-center">
             
             <a href="/aboutus">
                 <div class="flex items-center gap-[2px]">
                     <div class="w-10 h-10 flex shrink-0">
                        <img width="80px;" height="80px;" src="/assets/gambardepan/iconcos2.png" alt="/assets/gambardepan/iconcos2.png">
                    </div>
                    <div class="flex flex-col text-white">
                        {{-- <p></p> --}}
                        <p class="text-xs leading-[18px]">Bandung, West Java, Indonesia</p>
                        <p class="font-semibold text-sm">About Us</p>
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
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">Cos Indonesia<br></h1>
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
        
<a href="/paymentgateways">

    <div style="margin-top: 0.5rem; margin-bottom: 0.5rem;">
        <div style="text-align: center;">
            {{-- <button style="padding: 8px 12px; border-radius: 9999px; background-color: silver; font-weight: bold; font-size: 0.875rem; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s; border: none;">
                Donasi
            </button> --}}
        </div>
                
    </div>

</div>
</a>


        {{-- ===================================================================================================== --}}
        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-lg">Cos Cigar Indonesia <br></h2>
                <a  href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm"><span style="font-size: 14px;">Coeroetoe Oerang Soenda</span></a>
            </div>
            <div class="main-carousel mt-[14px]">
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/3.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Cos Grand Robusto</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ 100,00</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/costorpedo.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Cos Torpedo</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ 100,00</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/1.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/5.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/6.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/7.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/8.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/9.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
            
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/dokumentasi/10.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/dokumentasi/1.jpeg">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="#" class="font-bold line-clamp-2 hover:line-clamp-none">Comming Soon</a>
                            <p class="text-xs leading-[18px]">Specification: <span class="font-bold text-[#000000]">Klik Me</span></p>
                            <p class="text-xs leading-[18px]">Price : <span class="font-bold text-[#FF7815]">$ -,</span></p>
                        </div>

                        {{-- <progress style="color: #000000" id="fund" value="100" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    
                    </div>
                </div>
            
            </div>
        </div>
        <br>

        <div class="px-4 flex justify-between items-center mb-4">
            <h2 class="font-bold text-sm">Company <br>Cigar Cos Indonesia</h2>
            <a href="#" style="padding: 6px 12px; border-radius: 9999px; background-color: #E8E9EE; font-weight: bold; font-size:12px; text-decoration: none; color: #000000; transition: background-color 0.3s, color 0.3s;" class="rounded-full bg-[#E8E9EE] font-semibold text-sm">
               <i class="fas fa-utensil-spoon" style="margin-right: 5px;"></i> Coeroetoe Oerang Soenda
              </a>
            
              
            {{-- <a href="" class="p-[6px_12px] rounded-full bg-blue-500 hover:bg-stone-200 font-semibold text-sm text-white hover:text-stone-800">Daftar Mitra</a> --}}
        </div>
        <br>
                <div id="popular-fundrising" class="mt-4" style="display: flex; overflow-x: auto;">
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/aboutus" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/aboutus.png" alt="/assets/gambardepan/aboutus.png" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">About Us</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/company" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/company.png" alt="/assets/gambardepan/company.png" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Company</span>
                        </a>
                    </div>
                    
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="/produk" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/produk.png" alt="/assets/gambardepan/produk.png" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Product</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="#" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/ourpartnerts.png" alt="/assets/gambardepan/ourpartnerts.png" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">F.A.Q</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                    <div class="px-4 first-of-type:pl-8 last-of-type:pr-8 ml-4 mr-4" style="margin-left: 8px; margin-right: 8px; flex: 0 0 auto; width: 135px;">
                        <a href="#" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]" style="display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 15px; border: 1px solid #E8E9EE; border-radius: 30px; min-height: 160px; width: 135px;">
                            <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                                <img src="/assets/gambardepan/mitra.png" alt="/assets/gambardepan/mitra.png" style="width: 60px; height: 60px; flex-shrink: 0; overflow: hidden;">
                            </div>
                            <span class="font-semibold text-center my-auto" style="font-weight: 600; text-align: center; font-size:14px">Our Partners</span>
                        </a>
                    </div>
                    
                    <!-- Tambahkan div lainnya di sini dengan gaya yang sama -->
                </div>
              


                
                
                <div id="popular-fundrising" class="mt-8">
                    {{-- =============================================================================== --}}
                    
               
                    <div class="px-4 popular-link" style="display: flex; justify-content: center; align-items: center;">
                        
                        


                        <a href="/aboutus" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="/assets/gambardepan/aboutus.png" alt="/assets/gambardepan/aboutus.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        About Us
                      </a>
                      
                        {{-- <a href="#" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="/assets/gambardepan/company.png" alt="/assets/gambardepan/company.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;">
                        Company
                      </a> --}}
                      
                        <a href="/produk" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                        <img src="/assets/gambardepan/produk.png" alt="/assets/gambardepan/produk.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem; color:white;">
                        Products
                      </a>
                      
                    </div>
                    <div class="px-4 popular-link mt-4" style="display: flex; justify-content: center; align-items: center;">
                    
                    
                          
                        <a href="#" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                            <img src="/assets/gambardepan/mitra.png" alt="/assets/gambardepan/mitra.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem; color:white;">
                            Our Partners
                          </a>
                    
                          
                        <a href="#" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                            <img src="/assets/gambardepan/ourpartnerts.png" alt="/assets/gambardepan/ourpartnerts.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem; color:white;">
                            F.A.Q
                          </a>

                        <a href="#" style="display: flex; align-items: center; padding: 4px 12px; margin: 0 12px 12px 0; border-radius: 9999px; background-color: #6B4226; font-weight: bold; font-size: 0.875rem; color: #fff; transition: background-color 0.3s, color 0.3s; font-size:12px">
                            <img src="/assets/gambardepan/mitra.png" alt="/assets/gambardepan/mitra.png" style="width: 1.25rem; height: 1.25rem; margin-right: 0.5rem; color:white;">
                            Contact Us
                          </a>
                    </div>
                  </div>
                  
        
                  @include('tambahanfitur.menuandroid')
                  
                </div>
            </div>
            @include('tambahanfitur.informasiperusahaan')
            {{-- @include('fe_dashboard.menu.android') --}}
        

    </section>
    
    @include('tambahanfitur.footer')
