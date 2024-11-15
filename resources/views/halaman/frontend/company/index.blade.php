
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
                            <h1 class="font-extrabold leading-[36px] text-white text-center" style="font-size: 18px;">Company Cos <br></h1>
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
            
            <div style="margin-top:10px;" class="w-full h-[750px] flex shrink-0 rounded-2xl overflow-hidden">
                <iframe width="100%" height="100%" src="/assets/video/cerutu.mp4?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <a href="#" class="card">



                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513);  margin-top:10px;">
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>  About Coeroetoe Oerang Soenda </p>
                        <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>
                            Coeroetoe Oerang Soenda is a premium tobacco cigar brand that embodies the rich culture and traditional tobacco craftsmanship of Indonesia, particularly from the Sundanese region. This cigar uses carefully selected tobacco grown in the fertile lands of Indonesia, renowned for its exceptional quality. The production process involves traditional skills passed down through generations, ensuring that each cigar has a distinctive taste.
                        </p>
                     
                    </div>
                </div>

                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513);  margin-top:10px;">
                    {{-- <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div> --}}
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>  Raw Materials and Production Process    </p>
                        <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>
                            The "Coeroetoe Oerang Soenda" cigar uses tobacco grown organically in some of Indonesia’s best tobacco-producing regions, such as West Java. The tobacco is meticulously selected and processed using a natural fermentation method to preserve its authentic flavor and aroma. The cigar’s wrapper is made from carefully chosen tobacco leaves to ensure even burning and a smooth smoking experience.
                        </p>
                     
                    </div>
                </div>
                
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513);  margin-top:10px;">
                    {{-- <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div> --}}
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>  Flavor and Aroma </p>
                        <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>
                            The Coeroetoe Oerang Soenda cigar offers a rich and complex flavor, with warm, smooth tobacco notes dominating the profile. Its burn produces a distinctive aroma with a touch of spice and a slight sweetness, which comes from the unique blend of local tobaccos. Each puff provides a satisfying sensation for cigar enthusiasts seeking a different smoking experience from international brands.
                        </p>
                     
                    </div>
                </div>
                
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl" style="background-image: linear-gradient(to bottom, #8B4513, #8B4513);  margin-top:10px;">
                    {{-- <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="/assets/css/fe_css/images/logohaiucare/logohaiucareindonesia.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div> --}}
                    <div class="flex flex-col gap-1" style="margin-left: 15px; font-size:14px;">
                        <p style="color: black; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>  Distinctiveness of Indonesian Cigars </p>
                        <p style="text-align: justify; font-size:14px;" class="font-semibold text-white border-spacing-5"><i class="fas fa-home"></i>

                            Indonesian cigars, especially the Coeroetoe Oerang Soenda brand, bring the authenticity of local culture into the global cigar scene. With tobacco of world-class quality, this cigar not only appeals to local tobacco aficionados but also to cigar collectors abroad looking for a new and unique flavor experience.
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