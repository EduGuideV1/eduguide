<div class="flex md:w-[992px] lg:w-[1420px] mx-5 flex-col gap-16 mb-20">
    <div class="flex gap-5 justify-center items-center">
        <div class="w-24 hidden sm:block border-2 rounded-sm h-0 border-secondary"></div>
        <div class="font-bold text-secondary text-[40px] text-center">Destinations favorites</div>
        <div class="w-24 hidden sm:block border-2 rounded-sm h-0 border-secondary"></div>
    </div>
    <div id="sliderContainer" class="relative select-none">
        <img src="{{ asset('storage/pays/spain.png') }}"
            class="sm:h-auto h-[500px] object-cover rounded-[10px] slider-img" alt="Image de pays">
        <div
            class="flex sm:justify-between items-center w-full absolute justify-center text-white z-20 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="cursor-pointer w-[45px] border-4 rounded-full p-2 fill-white border-white ml-4 rotate-180 sm:block hidden left-arrow"
                viewBox="0 0 448 512">
                <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>

            <div class="flex flex-col justify-center items-center gap-[73px]">
                <h1 class="font-bold md:text-6xl slider-title text-4xl sm:text-5xl">Espagne</h1>
                <p class="font-semibold max-w-[1000px] hidden lg:block text-center text-2xl slider-p">
                    L'Espagne est une destination de choix pour les étudiants internationaux en quête d'une éducation de
                    qualité dans un cadre exceptionnel. Avec des universités de renom et un environnement propice à
                    l'apprentissage, l'Espagne offre une myriade d'opportunités académiques.
                </p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg"
                class="cursor-pointer w-[45px] border-4 rounded-full p-2 fill-white border-white mr-4 sm:block hidden right-arrow"
                viewBox="0 0 448 512">
                <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
        </div>
        <div class="bg-black opacity-50 w-full h-full absolute top-0 left-0 z-10 rounded-[10px]"></div>
    </div>
</div>
