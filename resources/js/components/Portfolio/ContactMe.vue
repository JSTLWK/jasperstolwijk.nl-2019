<template>
    <div>
        <div v-if="! isLoading && ! completed "
             class="ml-auto w-full lg:w-5/6">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 mb-3 lg:pr-4">
                    <div class="flex flex-wrap items-center">
                        <label for="name"
                               class="block text-gray-900 text-sm font-bold">Name
                            <span class="text-xs -mt-2">*</span></label>
                        <label for="name"
                               v-if="errors.name"
                               class="ml-auto text-xs text-red-500">This field is required</label>
                    </div>
                    <input id="name"
                           v-model="name"
                           type="name"
                           required="required"
                           class="text-sm shadow appearance-none rounded w-full py-2 px-3 outline-none "
                           :class="{'border': errors.name, 'border-red-500': errors.name}">

                </div>
                <div class="w-full lg:w-1/2 mb-3">
                    <div class="flex flex-wrap items-center">
                        <label for="email"
                               class="block text-gray-900 text-sm font-bold">E-mail</label>
                        <label v-if="errors.email"
                               for="email"
                               class="ml-auto text-xs text-red-500">This field is required</label>
                    </div>
                    <input id="email"
                           v-model="email"
                           type="email"
                           required="required"
                           class="text-sm shadow appearance-none rounded w-full py-2 px-3 outline-none"
                           :class="{'border': errors.email, 'border-red-500': errors.email}">
                </div>
            </div>
            <div class="mb-2">
                <div class="flex flex-wrap items-center">
                    <label for="message"
                           class="block text-gray-900 text-sm font-bold">Message</label>
                    <label v-if="errors.message"
                           for="message"
                           class="ml-auto text-xs text-red-500">This field is required</label>
                </div>
                <textarea id="message"
                          v-model="message"
                          type="message"
                          required="required"
                          class="text-sm shadow appearance-none rounded w-full py-2 px-3 outline-none resize-none h-20"
                          :class="{'border': errors.message, 'border-red-500': errors.message}"></textarea>
            </div>
            <span @click="checkForm"
                  class="float-right cursor-pointer inline-block py-2 px-6 font-bold text-xs rounded text-white bg-blue-main hover:bg-green-dark uppercase shadow hover:shadow-md">
                Submit
            </span>
        </div>


        <div v-if="isLoading"
             class="w-full flex flex-wrap justify-center items-center h-48">
            <div class="w-full text-center">
                <i class="fas fa-spin fa-spinner fa-4x"></i>
            </div>
            <p class="m-0 p-0">Processing the data and sending the emails....</p>

        </div>


        <div v-if="completed"
             class="w-full flex flex-wrap justify-center items-center h-48">
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
        watch: {
            name: function(newQuestion, oldQuestion) {
                if (!newQuestion) {
                    this.errors.name = 'THis field is required';
                } else {
                    this.errors.name = "";
                }
            },
            email: function(newQuestion, oldQuestion) {
                if (!newQuestion) {
                    this.errors.email = 'This field is required';
                } else {
                    this.errors.email = "";
                }
            },
            message: function(newQuestion, oldQuestion) {
                if (!newQuestion) {
                    this.errors.message = 'This field is required';
                } else {
                    this.errors.message = "";
                }
            }
        },
        data() {
            return {
                errors: {
                    name: "",
                    email: "",
                    message: "",
                },
                isLoading: false,
                completed: false,
                test: {},
                name: "",
                email: "",
                message: "",
            }
        },
        methods: {

            checkForm() {

                if (!this.name) {
                    this.errors.name = 'This field is required';
                }

                if (!this.email) {
                    this.errors.email = 'This field is required';
                }

                if (!this.message) {
                    this.errors.message = 'This field is required';
                }

                if (this.name && this.email && this.message) {
                    this.sendEmail();
                }

            },
            sendEmail() {
                this.completed = false;
                this.isLoading = true;
                let self       = this;

                axios.post(this.EndPoint, {
                    name: this.name,
                    email: this.email,
                    message: this.message
                }).then(function(response) {
                    self.isLoading = false;
                    self.completed = true;
                }).catch(function(error) {
                    self.completed = false;
                    self.isLoading = false;

                    if (error.response.data.errors.message) {
                        self.errors.message = error.response.data.errors.message[0];
                    }

                    if (error.response.data.errors.email) {
                        self.errors.email = error.response.data.errors.email[0];
                    }

                    if (error.response.data.errors.name) {
                        self.errors.name = error.response.data.errors.name[0];
                    }
                });
            }
        }
    }
</script>
