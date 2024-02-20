<div class="mt-10 w-full mb-20 h-[73px] flex items-center justify-between md:px-0 px-5 md:w-[992px] lg:w-[1420px]">
    <a href="/">
        <img class="w-[73px] h-[73px]" src="{{ asset('assets/images/logo.png') }}" alt="">
    </a>
    <div class="sm:flex gap-6 items-center hidden">
        <a href="/">Accueil</a>
        <a href="/#services">Services</a>
        <a href="/#etapes">Etapes</a>
        <a href="/#contact">Contact</a>
    </div>
    <button class="bg-secondary rounded-md text-white py-3 px-6 hidden sm:block">
        S'inscrire
    </button>
    <svg class="w-8 h-8 sm:hidden cursor-pointer menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
    </svg>
    <div class="links pt-10 hidden bg-white sm:hidden top-0 left-0 flex-col px-5 absolute w-screen z-10 min-h-screen">
        <div class="flex w-full justify-between items-center">
            <a href="/">
                <img class="w-[73px] h-[73px]" src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <svg class="sm:hidden flex w-8 h-8 cursor-pointer xmark" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 384 512">
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </div>
        <div class="gap-6 items-center flex flex-col text-xl mt-[25%]">
            <a href="/">Accueil</a>
            <a href="/#services">Services</a>
            <a href="/#etapes">Etapes</a>
            <a href="/#contact">Contact</a>
        </div>
    </div>
</div>
