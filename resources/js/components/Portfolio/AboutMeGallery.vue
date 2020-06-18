<template>
    <div class="container mx-auto flex flex-wrap justify-center">


        <div v-for="item in gallery" class="w-full sm:w-1/3 my-6 px-5">
            <img :alt="item.description" v-lazy="item.img"
                 class="h-64 w-1/3 w-full rounded-lg shadow-md"/>
        </div>


    </div>
</template>

<script>
    import gallery from "../../../json/gallery.json"

    export default {
        name: "AboutMeGallery",
        data() {
            return {
                gallery: gallery
            }
        }
    }
</script>
<style scoped>

</style>
