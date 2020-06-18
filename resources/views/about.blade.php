@extends('componets.layout')

@section('title', 'About me')

@section('content')

    <div class="container mx-auto flex flex-wrap my-12">
        <div class="w-full sm:w-1/2 flex justify-center items-center">
            <div class="px-4 sm:px-0">
                <h2 class="text-4xl font-bold text-gray-700">So, Here I am Jasper!</h2>
                <p class="text-lg text-gray-700">
                    I enjoy taking complex problems and turning them into solutions for the liking of the customer. I
                    love
                    the logic around programmers and you can wake me up every single moment to write a piece of code.
                    <br/>
                    <br/>
                    When I’m not coding or helping people out. You’ll see me at beautiful locations all around the
                    world.
                </p>
            </div>
        </div>
        <div class="w-full mt-12 sm:mt-0 sm:w-1/2 flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 class="w-2/3"
                 viewBox="0 0 541 434.957">
                <defs>
                    <pattern id="pattern"
                             width="1"
                             height="1"
                             viewBox="0 80.864 523 416.957">
                        <image preserveAspectRatio="xMidYMid slice"
                               width="523"
                               height="697.333"
                               xlink:href="{{asset('img/me-myself.jpeg')}}"/>
                    </pattern>
                    <filter id="_077353e6-2550-497b-8303-064b03df357c"
                            x="0"
                            y="0"
                            width="541"
                            height="434.957"
                            filterUnits="userSpaceOnUse">
                        <feOffset dy="3"
                                  input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="3"
                                        result="blur"/>
                        <feFlood flood-opacity="0.161"/>
                        <feComposite operator="in"
                                     in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)"
                   filter="url(#_077353e6-2550-497b-8303-064b03df357c)">
                    <path id="_077353e6-2550-497b-8303-064b03df357c-2"
                          data-name="077353e6-2550-497b-8303-064b03df357c"
                          d="M296.776-59.2C339.817-44.148,383.46-20.37,410.549,16.049c27.089,36.72,37.623,86.383,18.661,125.21-18.962,38.526-67.421,66.518-97.218,97.82-30.1,31.6-42.138,66.518-66.217,76.45-24.079,9.632-60.2-5.719-100.529,1.2S80.368,353.153,69.232,336C57.794,318.84,79.766,255.032,57.794,216.505,35.822,178.28-29.492,165.037-61.095,133.735c-31.9-31.3-29.5-80.664-.3-106.549C-32.2,1.6,24.084-.2,66.824-15.554,109.865-30.6,139.361-59.5,175.479-70.333S253.736-74.547,296.776-59.2Z"
                          transform="translate(93.16 81.67)"
                          fill="url(#pattern)"/>
                </g>
            </svg>
        </div>
    </div>


    <div class="bg-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg"
             class=""
             viewBox="0 0 1920 256">
            <path id="Path_89"
                  data-name="Path 89"
                  d="M0,64,106.667,74.7C213.333,85,426.667,107,640,138.7c213.333,32.3,426.667,74.3,640,64C1493.333,192,1706.667,128,1813.333,96L1920,64V320H0Z"
                  transform="translate(1920 320) rotate(180)"
                  fill="#fff"/>
        </svg>
        <div class="container mx-auto py-12 text-white">
            <h3 class="text-4xl text-center font-bold mb-10">History</h3>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 mb-12 sm:mb-0 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         class="w-2/3 ml-auto  mr-24"
                         viewBox="0 0 360 299.409">
                        <defs>
                            <pattern id="history"
                                     preserveAspectRatio="xMidYMid slice"
                                     width="100%"
                                     height="100%"
                                     viewBox="0 0 5643 4000">
                                <image width="5643"
                                       height="4000"
                                       xlink:href="{{ asset('/img/history.jpg') }}"/>
                            </pattern>
                        </defs>
                        <path id="everyday-basics-M9rZ4A5LwEs-unsplash"
                              d="M287.281,36.583c19.143,52-14,128-74.859,173.718-60.573,46-148.574,61.715-207.432,22.572S-83.3,99.441-58.44,39.726c25.143-60,104.288-85.144,179.718-84C196.707-42.847,268.137-15.132,287.281,36.583Z"
                              transform="translate(67.301 44.313)"
                              fill="url(#history)"/>
                    </svg>
                </div>
                <div class="w-full sm:w-1/2 text-lg px-4 sm:px-0">
                    I got my first laptop at the age of 6 which was a high-end laptop for that time being with Windows
                    XP on it. Started to play a game called ‘Habbo Hotel’ which was popular in my country and most
                    children played it. After a few years my friends on their created their own ‘Habbo Hotel’ called
                    Retro-Hotel which I made HTML pages for and did their ‘online radio’. <br/><br/>

                    At the age of 12, a friend of mine bought Minecraft which I played for almost 8 years. In those 8
                    years, I’ve got a ton of experience with programming and being a support agent for people. I’ve made
                    PHP Applications based on information, customized HTML pages to display information and helping
                    people with their issues. <br/><br/>

                    I am always improving myself into getting better at languages, started to see patterns and make sure
                    the pieces I write are simple and understandable for all programmers. Keeping myself up-to-date with
                    all the information.
                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 1920 256">
            <path id="Path_88"
                  data-name="Path 88"
                  d="M0,64,106.667,74.7C213.333,85,426.667,107,640,138.7c213.333,32.3,426.667,74.3,640,64C1493.333,192,1706.667,128,1813.333,96L1920,64V320H0Z"
                  transform="translate(0 -64)"
                  fill="#bee3f8"/>
        </svg>
    </div>

    <div class="bg-blue-200 py-12 text-gray-700">
        <div class="container mx-auto"
             id="app">
            <h3 class="text-4xl font-bold px-4 sm:px-0">Progress of this portfolio</h3>
            <p class="w-full sm:w-1/2 px-4 sm:px-0">
                Over the past years, you can see my experience and my skills grow on this website. As well when it comes
                to creating the website as when it comes to making sure the user-experience is acting as expected.
            </p>
            <portfolio-progress/>

        </div>
        {{-- Process of the projects (Vue element) --}}
    </div>


    <div class="bg-blue-500 text-white">
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 1920 256">
            <path id="Path_90"
                  data-name="Path 90"
                  d="M0,64,106.667,74.7C213.333,85,426.667,107,640,138.7c213.333,32.3,426.667,74.3,640,64C1493.333,192,1706.667,128,1813.333,96L1920,64V320H0Z"
                  transform="translate(1920 320) rotate(180)"
                  fill="#bee3f8"/>
        </svg>
        <div class="container mx-auto mb-24">
            <h3 class="text-4xl font-bold text-center mb-10">Contact methods</h3>
            <div class="flex flex-wrap justify-center items-center">
                <div class="w-1/2 sm:w-1/5 flex my-1 sm:my-0 flex-col justify-center items-center">
                    <i class="fab fa-twitter fa-6x"></i>
                    <p class="mt-5">@HooplessMC</p>
                </div>
                <div class="w-1/2 sm:w-1/5 flex my-1 sm:my-0 flex-col justify-center items-center">
                    <i class="far fa-envelope-open fa-6x"></i>
                    <p class="mt-5">jasperstolwijk@icloud.com</p>
                </div>
                <div class="w-1/2 sm:w-1/5 flex my-1 sm:my-0 flex-col justify-center items-center">
                    <i class="fab fa-linkedin fa-6x"></i>
                    <p class="mt-5">jasperstolwijk</p>
                </div>
                <div class="w-1/2 sm:w-1/5 flex my-1 sm:my-0 flex-col justify-center items-center">
                    <i class="fab fa-github fa-6x"></i>
                    <p class="mt-5">Hoopless</p>
                </div>
                <div class="w-1/2 sm:w-1/5 flex my-1 sm:my-0 flex-col justify-center items-center">
                    <i class="fas fa-phone fa-6x"></i>
                    <p class="mt-5">+31 6 28 33 31 43</p>
                </div>

            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 1920 255">
            <path id="Path_91"
                  data-name="Path 91"
                  d="M0,64,106.667,74.7C213.333,85,426.667,107,640,138.7c213.333,32.3,426.667,74.3,640,64C1493.333,192,1706.667,128,1813.333,96L1920,64V320H0Z"
                  transform="translate(0 -64)"
                  fill="#fff"/>
        </svg>

    </div>


    <div class="container mx-auto text-gray-700">
        <h3 class="text-4xl font-bold text-center">Beautiful pictures</h3>
        <p class="text-lg text-center mx-12 sm:mx-56">
            Since I was born, I’ve travelled across the world to see
            the most beautiful places and cultures around the world.
            I’ve captured this by taking pictures and I would like to
            share them with you.
        </p>

        <div id="app">
            <about-me-gallery/>
        </div>
        {{-- ToDo: VueJs Lazy Loading images (6 images at first 3 x 2) --}}

    </div>


@endsection
