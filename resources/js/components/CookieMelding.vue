<template>
    <div v-show="! closeCookie" class="bg-blue-500 bottom-0 fixed mx-5 sm:mx-10 my-5 px-2 py-5 right-0 text-white sm:w-2/5">
        <h2 class="px-4 font-bold text-xl">Wil jij ook een goed werkende site?</h2>
        <p class="px-4 py-2 text-sm">Mijn website gebruikt cookies om content en advertenties te personaliseren, om functies voor sociale media te
            bieden en om ons website verkeer te analyseren. Ook delen we informatie over uw gebruik van mijn site met
            onze partners voor social media, adverteren en analyse.
        </p>
        <div class="flex flex-wrap">
            <div class="w-1/2 px-2">
                <div @click="acceptCookie" class="rounded-lg cursor-pointer py-4 text-blue-500 bg-white flex justify-center items-center">
                    Accepteren
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="h-full flex justify-center items-center">
                    <a href="#">Lees meer</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Cookies from 'js-cookie'

    export default {
        name: "CookiePopUp",
        data() {
            return {
                closeCookie: false,
            }
        },
        methods: {
          acceptCookie() {
                this.closeCookie = true;
                Cookies.set('cookie-popup', 'true')
          }
        },
    }
</script>
