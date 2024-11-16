
@include('tambahanfitur.header')


            <body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
                <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
                    
                    <div style="display: flex; flex-direction: column; background-image: linear-gradient(to bottom,  #000000, #8B4513); border-radius: 0 0 50px 50px; overflow: hidden;" class="header">
            
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
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">F.A.Q<br></h1>
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
{{--                         
                    <div style="margin-top:10px;" class="w-[200px] h-[200px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img width="50%" src="/assets/gambardepan/sandiagauno.jpeg" class="w-full h-full object-cover" alt="/assets/gambardepan/sandiagauno.jpeg">
                    </div> --}}



                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-info-circle"></i> 1. What is Cos Coeroetoe Oerang Soenda cigar?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                Cos Coeroetoe Oerang Soenda is a premium cigar made from high-quality tobacco. With a blend of local tobacco and a meticulous production process, this cigar offers a distinctive smoking experience with a unique aroma and flavor, celebrating Indonesian tobacco tradition and culture.
                            </p>
                        </div>
                    </div>
                    
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-map-marker-alt"></i> 2. Where is the tobacco used in this cigar sourced from?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                The tobacco used in Cos Coeroetoe Oerang Soenda cigars comes from Indonesia’s best tobacco-growing regions, known for producing top-quality leaves. We use carefully selected tobacco that is naturally processed to ensure an authentic and unique flavor profile.
                            </p>
                        </div>
                    </div>
                    
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-star"></i> 3. What makes Cos Coeroetoe Oerang Soenda cigar different from other cigars?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                What sets Cos Coeroetoe Oerang Soenda apart is its unique taste, blending local tobacco traditions with proven craftsmanship. We focus on using natural, high-quality tobacco and a fermentation process that preserves the freshness and strength of the cigar’s flavor.
                            </p>
                        </div>
                    </div>
                    
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-thermometer-half"></i> 4. How should I store the cigars to maintain their quality?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                To keep your cigars fresh and preserve their quality, store them in a humidor with humidity levels between 65-70% and temperatures ranging from 18-21°C (64-70°F). Avoid exposure to direct sunlight or extreme temperatures to prevent damage to the tobacco.
                            </p>
                        </div>
                    </div>
                    
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-user"></i> 5. Is Cos Coeroetoe Oerang Soenda cigar suitable for beginners?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                Cos Coeroetoe Oerang Soenda is designed to offer a unique and enjoyable smoking experience. For beginners, we recommend starting with lighter cigars and gradually exploring the local tobacco flavors. However, for more experienced smokers, this cigar offers a deep and satisfying flavor profile.
                            </p>
                        </div>
                    </div>
                    
                    <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513); margin-top: 10px;">
                        <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                            <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                <i class="fas fa-shopping-cart"></i> 6. Where can I purchase Cos Coeroetoe Oerang Soenda cigars?
                            </p>
                            <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5">
                                You can purchase Cos Coeroetoe Oerang Soenda cigars by contacting us through the details below, both offline and online. Be sure to buy from trusted sources to ensure you receive the authentic, high-quality product.
                            </p>
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