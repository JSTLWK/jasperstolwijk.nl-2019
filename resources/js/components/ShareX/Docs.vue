<template>

    <div>

        <div class="h-screen">


            <div class="w-full bg-blue-main h-10">

            </div>

            <div class="flex flex-wrap h-full">
                <div class="w-full md:w-1/5 pt-8 pb-8 md:pb-0 px-6 bg-white">

                    <div v-for="(item, index) in data">

                        <div @click="changeContent(index)">
                            <div v-if="index !== currentId"
                                 class="px-5 py-2">
                                {{item.title}}
                            </div>
                            <div v-if="index === currentId"
                                 class="px-5 py-2 font-bold bg-blue-main text-white">
                                {{item.title}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full md:w-4/5 flex flex-wrap pt-10 px-10">
                    <transition name="fade"
                                mode="out-in">
                        <div class="w-full md:w-2/3"
                             v-html="currentContent">

                        </div>
                    </transition>
                    <div class="w-full md:w-1/3 md:pl-10 mt-5 md:mt-0">
                        <h3 class="font-bold">Latest news</h3>
                        <p v-for="item in news">
                            <a href="/sharex/dashboard"
                              class="text-blue-main">{{ item.title }}</a>
                        </p>

                        <div class="h-2 my-5 bg-blue-main">

                        </div>

                        <h3 class="font-bold ">Social media</h3>
                        <div class="flex mb-10 md:mb-0">
                            <a href="https://twitter.com/JasperWebDev"
                               target="_blank">
                                <div class="bg-brands-twitter mr-1 flex h-10 hover:shadow items-center justify-center rounded w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-auto w-6"
                                         viewBox="0 0 35.552 28.875">
                                        <path id="twitter-brands"
                                              d="M31.9,55.278c.023.316.023.632.023.947,0,9.633-7.332,20.731-20.731,20.731A20.591,20.591,0,0,1,0,73.686a15.073,15.073,0,0,0,1.76.09,14.593,14.593,0,0,0,9.046-3.113A7.3,7.3,0,0,1,3.993,65.61a9.189,9.189,0,0,0,1.376.113,7.707,7.707,0,0,0,1.917-.248,7.287,7.287,0,0,1-5.843-7.151v-.09a7.338,7.338,0,0,0,3.294.925,7.3,7.3,0,0,1-2.256-9.745,20.712,20.712,0,0,0,15.024,7.625,8.226,8.226,0,0,1-.18-1.669,7.293,7.293,0,0,1,12.61-4.985,14.346,14.346,0,0,0,4.625-1.76,7.267,7.267,0,0,1-3.2,4.015,14.607,14.607,0,0,0,4.2-1.128A15.663,15.663,0,0,1,31.9,55.278Z"
                                              transform="translate(0 -48.082)"
                                              fill="#fff"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/jasperstolwijk/"
                               target="_blank">
                                <div class="bg-brands-linkedin mx-1 flex h-10 hover:shadow items-center justify-center rounded w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-auto w-6"
                                         viewBox="0 0 35.554 35.554">
                                        <path id="linkedin-in-brands"
                                              d="M7.958,35.564H.587V11.826H7.958ZM4.269,8.588A4.289,4.289,0,1,1,8.538,4.279,4.3,4.3,0,0,1,4.269,8.588ZM35.547,35.564H28.191V24.008c0-2.754-.056-6.286-3.832-6.286-3.832,0-4.42,2.992-4.42,6.087V35.564H12.576V11.826h7.07v3.238h.1a7.745,7.745,0,0,1,6.974-3.833c7.46,0,8.831,4.913,8.831,11.293V35.564Z"
                                              transform="translate(0 -0.01)"
                                              fill="#fff"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://github.com/Hoopless"
                               target="_blank">
                                <div class="bg-brands-github ml-1 flex h-10 hover:shadow items-center justify-center rounded w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-auto w-6"
                                         viewBox="0 0 35.554 28.444">
                                        <path id="github-alt-brands"
                                              d="M13.785,83.607c0,1.548-.807,4.081-2.718,4.081s-2.718-2.533-2.718-4.081.807-4.081,2.718-4.081S13.785,82.059,13.785,83.607Zm21.77-3.741a16.054,16.054,0,0,1-1.3,7.037c-2.807,5.674-10.526,5.541-16.051,5.541-5.615,0-13.792.2-16.711-5.541A15.855,15.855,0,0,1,0,79.866a12.738,12.738,0,0,1,3.074-8.415,11.6,11.6,0,0,1-.57-3.615A7.376,7.376,0,0,1,3.585,64a11.574,11.574,0,0,1,8.059,2.667,28.373,28.373,0,0,1,6.57-.741,25.551,25.551,0,0,1,5.955.681A11.448,11.448,0,0,1,32.155,64a7.307,7.307,0,0,1,1.081,3.837,11.432,11.432,0,0,1-.57,3.57A12.762,12.762,0,0,1,35.554,79.866Zm-4.763,3.741c0-3.252-1.978-6.118-5.444-6.118a30.455,30.455,0,0,0-4.148.444,21.765,21.765,0,0,1-3.341.237,21.9,21.9,0,0,1-3.341-.237,29.961,29.961,0,0,0-4.148-.444c-3.467,0-5.444,2.867-5.444,6.118,0,6.5,5.955,7.5,11.14,7.5h3.57C24.844,91.11,30.792,90.118,30.792,83.607Zm-6.118-4.081c-1.911,0-2.718,2.533-2.718,4.081s.807,4.081,2.718,4.081,2.718-2.533,2.718-4.081S26.584,79.525,24.673,79.525Z"
                                              transform="translate(0 -64)"
                                              fill="#fff"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</template>

<script>
    import json from '../../../json/sharex-docs.json'
    import axios from 'axios';

    export default {
        name: "Docs",
        props: {
            newsEndpointUrl: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                currentId: 0,
                currentContent: "",
                data: json,
                news: [],
            }
        },
        created() {
            this.currentContent = this.data[this.currentId].content;
            this.getLatestNews();
        },
        methods: {
            changeContent(id) {
                this.currentId      = id;
                this.currentContent = this.data[this.currentId].content
            },
            getLatestNews() {
                axios.get(this.newsEndpointUrl)
                     .then(response => {
                         console.log(response);
                         this.news = response.data

                     })
            }
        }
    }
</script>

<style>
    .fade-enter {
        opacity: 0;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity 0.5s ease-out;
    }

    .fade-leave-to {
        opacity: 0;
    }

</style>
