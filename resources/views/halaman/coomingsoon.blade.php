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
 

</nav>
               
               <div style="width: 50%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   <img src="/assets/gambardepan/soon.png" class="width: 100%; height: 100%; object-fit: contain" alt="background">
               </div>
   
        </div>
         
         
            
        </div>

             
        @include('tambahanfitur.menuandroid')

        {{-- @include('fe_dashboard.menu.enter') --}}


        @include('tambahanfitur.informasiperusahaan')

        

        
        
        <h6 class="text-center font-semibold text-sm text-stone-600" style="text-align: center; font-weight: 600; font-size: 0.875rem; color: #4B5563;">
            Developed By <a href="https://wa.me/081321455855" target="_blank">sarigit.com</a>
        </h6>
        
    </section>

    @include('tambahanfitur.header')