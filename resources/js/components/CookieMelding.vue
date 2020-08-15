<template>
    <div v-show="! closeCookie" class="bg-blue-500 bottom-0 fixed mx-5 sm:mx-10 my-5 px-2 py-5 right-0 text-white sm:w-2/5">
        <h2 class="px-4 font-bold text-xl">Do you like a good working site?</h2>
        <p class="px-4 py-2 text-sm">My Website uses cookies to personalize content and advertisements and to analyze our website traffic.
        </p>
        <div class="flex flex-wrap">
            <div class="w-1/2 px-2">
                <div @click="acceptCookie" class="rounded-lg cursor-pointer py-4 text-blue-500 bg-white flex justify-center items-center">
                    Accept
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="h-full flex justify-center items-center">
                    <a href="https://cookie-consent.app.forthe.top/why-websites-use-cookies/" target="_blank">Read more</a>
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
