<template>
    <div class="container mx-auto sm:-mt-24">
        <div>
            <div class="flex items-center text-white justify-center relative">
                <svg class="w-full sm:w-1/2"
                     viewBox="0 0 200 190"
                     xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(100 100)"
                          d="m29.9-40c12.5 7.9 28.7 11.8 36.9 21.8 8.1 10.1 8.2 26.3-1.3 34.5-9.6 8.1-28.6 8.1-41.1 10.5-12.6 2.4-18.5 7.1-23.1 5.3-4.5-1.9-7.8-10.3-20.9-12.5s-36 1.9-45.5-4c-9.5-5.8-5.6-21.5 4.1-30.5 9.7-8.9 25.2-11 36.3-19.3s17.9-22.8 25.7-24.2c7.7-1.3 16.4 10.6 28.9 18.4z"
                          fill="#4299e1"/>
                </svg>
                <div class="absolute">
                    <h2 class="text-3xl sm:text-4xl text-center">Recent projects</h2>
                </div>
            </div>
        </div>
        <div class="hidden sm:flex flex-wrap sm:-mt-24">
            <div class="flex mr-24 overflow-hidden relative w-full">
                <div class="z-10 relative text-white flex items-center text-white justify-center  text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 mt-1 mt-2 w-2/4" viewBox="0 0 148.856 170.886">
                        <path id="Path_1" data-name="Path 1" d="M40.5-76.3c8.3,10.9,8.9,29.2,13.3,43.1,4.4,14,12.6,23.6,14.6,34.3,2,10.8-2.3,22.7-8.9,32.9C53,44.2,44.1,52.7,33.8,60.8c-10.3,8.2-22,16-35.9,19.6-13.8,3.6-29.8,3-37.7-6.5-7.9-9.6-7.8-28-14.6-41.8S-74.9,9.1-78.8-2.2c-3.8-11.4,2.2-25,11-35.3C-59-47.9-47.4-55-35.7-63.9c11.8-8.9,23.8-19.6,37.8-23.2S32.2-87.1,40.5-76.3Z" transform="translate(79.962 88.45)" fill="#4299e1"/>
                    </svg>


                    <div class="absolute">
                        <i class="fas fa-filter text-3xl"></i>
                    </div>
                </div>
                <div class="absolute mt-3 w-full"
                     style="height: 10.5rem; padding-left: 9.25rem;">
                    <div class="bg-blue-200 w-full h-full rounded-r-md rounded-tl-lg flex flex-wrap justify-around pl-20 py-4">
                        <div class="mr-5">
                            <h3 class="text-xl text-gray-700 font-bold">Framework</h3>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           v-model="filters.tags" id="Statamic" value="Statamic"
                                           class="hidden"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none"> Statamic</span>
                            </label>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           class="hidden"
                                           v-model="filters.tags" id="Prestashop" value="Prestashop"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none"> Prestashop</span>
                            </label>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           v-model="filters.tags" id="Laravel" value="Laravel"
                                           class="hidden"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none"> Laravel</span>
                            </label>
                        </div>

                        <div class="mx-5">
                            <h3 class="text-xl text-gray-700 font-bold">Language</h3>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           v-model="filters.tags" id="PHP" value="PHP"
                                           class="hidden"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none"> PHP</span>
                            </label>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           v-model="filters.tags" value="VueJS"
                                           class="hidden"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none"> VueJS</span>
                            </label>
                            <label class="custom-label flex z-10 my-1">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2 z-10">
                                    <input type="checkbox"
                                           v-model="filters.tags" value="Javascript"
                                           class="hidden"
                                           checked>
                                    <svg class="hidden w-4 h-4 text-green-600 pointer-events-none z-10"
                                         viewBox="0 0 172 172">
                                        <g fill="none"
                                           stroke-width="none"
                                           stroke-miterlimit="10"
                                           font-family="none"
                                           font-weight="none"
                                           font-size="none"
                                           text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                  fill="currentColor"
                                                  stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span class="select-none ">Javascript</span>
                            </label>
                        </div>

                        <div class="">
                            <label class="block text-xl text-gray-700 font-bold mb-2">
                                Search
                            </label>
                            <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                                   id="inline-full-name"
                                   type="text"
                                   v-model="title"
                                   placeholder="Search Project">
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Results -->

        <div class="container mx-auto -mt-8 sm:mt-8 flex flex-wrap">
            <div v-for="project in projects" class="w-full sm:w-1/3 px-2">
                <a href=""
                   title="">
                    <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4">
                        <div :style="{ backgroundImage: `url('${project.head_img}')` }"
                             class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"></div>
                        <div class="w-56 md:w-64 bg-white -mt-32 shadow-lg rounded-lg overflow-hidden">
                            <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">{{ project.title}}
                            </div>
                            <div class="flex h-32 px-3 bg-blue-200">
                                <p class="text-blue-800 text-center text-sm font-bold pt-1">
                                    {{ project.introduction }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "ProjectsFilter",
        props: {
            endpoint: String,
        },
        data: function() {
            return {
                filters: {
                    tags: [],
                },
                title: "",
                projects: "",
                url: this.endpoint
            }
        },
        watch: {
            filters: {
                handler(newValue, oldValue) {

                    if (newValue.tags.length > 0) {
                        this.url = this.endpoint + "?tags=" + newValue.tags;

                        this.title = "";
                        this.getProjects();
                    } else {
                        this.url = this.endpoint;
                        this.getProjects();
                    }

                },
                deep: true
            },
            title: {
                handler(newValue, oldValue) {
                    this.filters.tags = [];
                    this.url          = this.endpoint + "?title=" + newValue;

                    this.getProjects();
                }
            }
        },
        created() {
            this.getProjects();
        },
        methods: {
            getProjects() {

                let self = this;

                axios.get(this.url)
                     .then(function(response) {
                         self.projects = response.data;
                     })
                     .catch(function(error) {
                         // handle error
                         console.log(error);
                     });
            }
        }
    }
</script>

<style scoped>
    .custom-label input:checked + svg {
        display: block !important;
    }
</style>
