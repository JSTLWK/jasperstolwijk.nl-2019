<template>
    <div>
        <h2 class="w-full text-center text-3xl mb-10 font-bold">Projects</h2>
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/4 lg:pr-6 my-2">
                <div class="relative mb-5">
                    <input v-model="title" class="bg-white rounded-full text-black w-full h-8 px-5"
                           placeholder="Search project"/>
                    <svg class="absolute h-4"
                         style="top: 25%; right: 10px;"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 27.995 28">
                        <path id="search-solid"
                              d="M27.614,24.208l-5.452-5.452a1.311,1.311,0,0,0-.93-.383h-.891a11.369,11.369,0,1,0-1.969,1.969v.891a1.311,1.311,0,0,0,.383.93l5.452,5.452a1.307,1.307,0,0,0,1.854,0l1.548-1.548A1.319,1.319,0,0,0,27.614,24.208ZM11.374,18.373a7,7,0,1,1,7-7A7,7,0,0,1,11.374,18.373Z"
                              fill="#707070"/>
                    </svg>
                </div>

                <div class="bg-white rounded text-black p-4">
                    <h2 class="text-xl">Filter</h2>

                    <h3 class="pl-4 text-lg mt-2">Framework</h3>
                    <label class="custom-label items-center flex pl-4">
                        <div class="bg-white shadow w-4 h-4 p-1 flex justify-center items-center mr-2">
                            <input v-model="filters.tags" id="Laravel" value="Laravel" type="checkbox"
                                   class="hidden">
                            <svg class="hidden h-4 text-blue-main pointer-events-none"
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
                        <span class="select-none">Laravel</span>
                    </label>
                    <h3 class="pl-4 text-lg mt-2">Language</h3>
                    <label class="custom-label items-center flex pl-4">
                        <div class="bg-white shadow w-4 h-4 p-1 flex justify-center items-center mr-2">
                            <input v-model="filters.tags" id="PHP" value="PHP" type="checkbox"
                                   class="hidden">
                            <svg class="hidden w-6 h-6 text-blue-main pointer-events-none"
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
                        <span class="select-none">PHP</span>
                    </label>
                    <label class="custom-label items-center flex pl-4">
                        <div class="bg-white shadow w-4 h-4 p-1 flex justify-center items-center mr-2">
                            <input v-model="filters.tags" value="VueJS" type="checkbox"
                                   class="hidden">
                            <svg class="hidden w-6 h-6 text-blue-main pointer-events-none"
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
                        <span class="select-none">VueJS</span>
                    </label>
                    <label class="custom-label items-center flex pl-4">
                        <div class="bg-white shadow w-4 h-4 p-1 flex justify-center items-center mr-2">
                            <input v-model="filters.tags" value="React" type="checkbox"
                                   class="hidden">
                            <svg class="hidden w-6 h-6 text-blue-main pointer-events-none"
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
                        <span class="select-none">React</span>
                    </label>
                    <label class="custom-label items-center flex pl-4">
                        <div class="bg-white shadow w-4 h-4 p-1 flex justify-center items-center mr-2">
                            <input v-model="filters.tags" value="Javascript" type="checkbox"
                                   class="hidden">
                            <svg class="hidden w-6 h-6 text-blue-main pointer-events-none"
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
                        <span class="select-none">Javascript</span>
                    </label>
                </div>

            </div>
            <div class="w-full sm:w-3/4">
                <div class="flex flex-wrap">
                    <div v-for="project in projects" class="w-full md:w-1/2 px-2 my-2">
                        <div class="bg-white text-black rounded">
                            <div class="h-48 rounded-t bg-cover bg-top"
                                 :style="{ backgroundImage: `url('${project.head_img}')` }"></div>
                            <div class="p-5">
                                <h3 class="text-xl font-black text-black mb-3">{{ project.title}}</h3>
                                <p> {{ project.introduction }} </p>
                            </div>
                        </div>
                    </div>

                </div>
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
                    }

                },
                deep: true
            },
            title: {
                handler(newValue, oldValue) {
                    this.filters.tags = [];
                    this.url = this.endpoint + "?title=" + newValue;

                    this.getProjects();
                }
            }
        },
        created(){
            this.getProjects();
        },
        methods: {
          getProjects() {

              let self = this;

              axios.get(this.url)
                   .then( function (response) {
                       console.log(response);
                       self.projects = response.data;
                   })
                   .catch(function (error) {
                       // handle error
                       console.log(error);
                   });
          }
        }
    }
</script>
