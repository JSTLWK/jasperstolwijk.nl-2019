<template>
    <div>
        <div v-if="! isLoading && ! completed " class="ml-auto w-5/6 mr-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 mb-3 lg:pr-4">
                    <label for="name"
                           class="block text-gray-900 text-sm font-bold">Name</label>
                    <input id="name"
                           v-model="name"
                           type="name"
                           required="required"
                           autofocus="autofocus"
                           class="text-sm shadow appearance-none rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline ">
                </div>
                <div class="w-full lg:w-1/2 mb-3">
                    <label for="email"
                           class="block text-gray-900 text-sm font-bold">E-mail</label>
                    <input id="email"
                           v-model="email"
                           type="email"
                           required="required"
                           autofocus="autofocus"
                           class="text-sm shadow appearance-none rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline ">
                </div>
            </div>
            <div class="mb-2">
                <label for="message"
                       class="block text-gray-900 text-sm font-bold">Message</label>
                <textarea id="message"
                          v-model="message"
                          type="message"
                          required="required"
                          autofocus="autofocus"
                          class="text-sm shadow appearance-none rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline resize-none h-20"></textarea>
            </div>
            <span @click="sendEmail" class="float-right cursor-pointer inline-block py-2 px-6 font-bold text-xs rounded text-white bg-blue-main hover:bg-green-dark uppercase shadow hover:shadow-md">
                Submit
            </span>
        </div>


        <div v-if="isLoading" class="w-full flex flex-wrap justify-center items-center h-48">
            <div class="w-full text-center">
                <i class="fas fa-spin fa-spinner fa-4x"></i>
            </div>
            <p class="m-0 p-0">Processing the data and sending the emails....</p>

        </div>


        <div v-if="completed" class="w-full flex flex-wrap justify-center items-center h-48">
            <div class="text-blue-main w-full text-center">
                <i class="fas fa-check fa-4x"></i>
            </div>
            <p class="m-0 p-0 text-center">E-mails send! <br>Check your inbox if you received an e-mail</p>

        </div>


    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        props: {
            EndPoint: String
        },
        data() {
            return {
                isLoading: false,
                completed: false,
                name: "",
                email: "",
                message: "",
            }
        },
        methods: {


            sendEmail() {
                this.completed = false;
                this.isLoading = true;

                axios.post(this.EndPoint, {
                    name: this.name,
                    email: this.email,
                    message: this.message
                }).then(function(response) {
                    this.isLoading = false;
                    this.completed = true;
                    console.log(response);
                }).catch(function(error) {
                    console.log(error);
                });
            }
        }
    }
</script>
