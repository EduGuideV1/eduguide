<div id="contact" class="flex flex-col gap-16 mb-20">
    <div class="flex gap-5 justify-center items-center">
        <div class="w-24 border-2 rounded-sm h-0 border-secondary"></div>
        <div class="font-bold text-secondary text-[40px]">Contactez nous</div>
        <div class="w-24 border-2 rounded-sm h-0 border-secondary"></div>
    </div>
    <div class="flex gap-40 justify-between items-center">
        <div class="flex flex-col w-[670px] gap-7">
            <h1 class="font-bold text-4xl">Obtenez une consultation gratuite maintenant</h1>
            <form class="flex flex-col gap-4">
                <p class="text-lg">
                    Nous vous offrons une consultation gratuite pour vous aider dans votre parcours d'apprentissage à
                    l'étranger. Inscrivez-vous dès maintenant pour en savoir plus.
                </p>
                <div class="flex flex-col">
                    <label class="font-bold text-lg mb-2" for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom"
                        class="pl-7 font-medium py-3 rounded-lg focus:outline-none focus:border-black focus:ring-offset-0 focus:ring-0 placeholder:duration-500 focus:placeholder:opacity-0 transition-opacity"
                        placeholder="John Doe" />
                </div>
                <div class="flex flex-col">
                    <label class="font-bold text-lg mb-2" for="email">Email</label>
                    <input
                        class="pl-7 font-medium py-3 rounded-lg focus:outline-none focus:border-black focus:ring-offset-0 focus:ring-0 placeholder:duration-500 focus:placeholder:opacity-0 transition-opacity"
                        type="email" id="email" name="email" placeholder="johndoe@gmail.com" />
                </div>
                <div class="flex flex-col">
                    <label class="font-bold text-lg mb-2" for="message">Message</label>
                    <textarea
                        class="pl-7 max-h-32 resize-none py-3 font-medium rounded-lg mb-1 focus:outline-none focus:border-black focus:ring-offset-0 focus:ring-0 placeholder:duration-500 focus:placeholder:opacity-0 transition-opacity"
                        name="message" placeholder="Entrez votre message" id="message"></textarea>
                </div>
                <button class="bg-secondary he font-medium text-white py-3 px-4 rounded-md">
                    Envoyez
                </button>
            </form>
        </div>
        <img class="w-[660px] h-[369px] rounded-md" src="{{ asset('assets/images/consultation.jpg') }}" alt="">
    </div>
</div>
