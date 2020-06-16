<template>
    <div class="w-full mt-10">
        <VueSlickCarousel v-bind="settings">

            <template #prevArrow="arrowOption">
                <div class="h-12 rounded-full w-12 bg-blue-500 text-center flex items-center justify-center text-white">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </template>

            <div>
                <h2 class="text-3xl mb-10 text-center">2018</h2>
                <div class="overflow-scroll overflow-x-hidden mx-56" :style="{height: '500px'}">
                    <img src="/img/portfolio-progress/2018.png"
                         alt="">
                </div>
            </div>
            <div>
                <h2 class="text-3xl mb-10 text-center">2019</h2>
                <div class="overflow-scroll overflow-x-hidden mx-56" :style="{height: '500px'}">
                    <img src="/img/portfolio-progress/2019.png"
                         alt="">
                </div>
            </div>
            <div>
                <h2 class="text-3xl mb-10 text-center">2020</h2>
                <div class="overflow-scroll overflow-x-hidden mx-56" :style="{height: '500px'}">
                    <img src="/img/portfolio-progress/2020.png"
                         alt="">
                </div>
            </div>
            <template #nextArrow="arrowOption">
                <div class="h-12 rounded-full w-12 bg-blue-500 text-center flex items-center justify-center text-white">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </template>

        </VueSlickCarousel>
    </div>
</template>

<script>
    import VueSlickCarousel from 'vue-slick-carousel'

    export default {
        name: "PortfolioProgress",
        components: { VueSlickCarousel },
        data() {
            return {
                settings: {
                    "lazyLoad": "ondemand",
                    "autoplay": true,
                    "slidesToScroll": 1,
                    "dots": false,
                    "edgeFriction": 0.35,
                    "infinite": true,
                    "speed": 1000,
                    "slidesToShow": 1,
                }
            }
        },

    }
</script>

<style scoped>
    /*! purgecss start ignore */

    .slick-next{
        position: absolute;
        z-index: 1000;
        top: 50%;
        right: -60px; overflow-x-hidden
    }
    .slick-prev{
        position: absolute;
        z-index: 1000;
        top: 50%;
        left: -60px;
    }
    /*! purgecss end ignore */

</style>
