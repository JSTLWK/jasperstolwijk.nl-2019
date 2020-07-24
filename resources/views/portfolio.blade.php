@extends('components.layout')

@section('title', 'Full Stack Developer')
@section('meta-desc', 'My name is Jasper Stolwijk, I\'m an student and Full-stack Developer')

@section('content')
    {{--  Section 1: Intro/Header   --}}
    <div class="text bg-blue-500">
        <div class="container mx-auto flex flex-wrap py-5 sm:px-10 sm:pt-32">

            <div class="w-full sm:w-1/2 px-2 mb-2 sm:mb-0 text-white flex">
                <div class="sm:mr-12 mt-10">
                    <h2 class="text-4xl font-medium"><span class="uppercase">It's me!</span> Jasper Stolwijk</h2>
                    <p class="text-lg">Yes, this is me, Jasper Stolwijk. I'm an IT Nerd and also an IT Student living my
                        life in the Netherlands. Besides developing applications, I am a traveller, soccer lover and
                        like
                        gaming.</p>
                    <div class="flex mt-4">
                        <a href="{{ route('portfolio.about') }}" class="bg-grey-charcoal rounded-md cursor-pointer hover:bg-gray-700 text-white p-3 mr-5">
                            More info <i class="fas fa-info-circle ml-3"></i>
                        </a>
                        <a href="#projects" class="bg-purple-700 rounded-md cursor-pointer hover:bg-purple-600 text-white p-3 mr-5">
                            See what I did <i class="fas fa-arrow-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="coding mb-10 inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased
                  bg-gray-800  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
                    <div class="top mb-2 flex">
                        <div class="h-3 w-3 bg-red-500 rounded-full"></div>
                        <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
                        <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="mt-4 flex flex-wrap" id="typing">

                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                1 <br>
                            </div>
                            <span class="text-orange-500" id="typing-1"></span>
                        </div>

                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                2
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                3
                            </div>
                            <div>
                                <span class="text-orange-500" id="typing-2"></span>
                                <span class="text-white" id="typing-3"></span><span class="text-orange-500" id="typing-4"></span>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                4
                            </div>

                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                5
                            </div>
                            <div>
                                <span class="text-orange-500" id="typing-5"></span>
                                <span class="text-white" id="typing-6"></span>
                                <span class="text-orange-500" id="typing-7"></span>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                6
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                7
                            </div>
                            <div class="ml-3">
                                <span class="text-orange-500" id="typing-8"></span>
                                <span class="text-purple-400" id="typing-9"></span>
                                <span id="typing-10"></span>
                                <span class="text-green-750" id="typing-11"></span><span class="text-orange-500" id="typing-12"></span>
                            </div>
                        </div>

                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                8
                            </div>
                            <div class="ml-3">
                                <span class="text-orange-500" id="typing-13"></span>
                                <span class="text-purple-400" id="typing-14"></span>
                                <span id="typing-15"></span>
                                <span class="text-green-750" id="typing-16"></span><span class="text-orange-500" id="typing-17"></span>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                9
                            </div>
                            <div class="ml-3">
                                <span class="text-orange-500" id="typing-18"></span>
                                <span class="text-purple-400" id="typing-19"></span>
                                <span id="typing-20"></span>
                                <span class="text-green-750" id="typing-21"></span><span class="text-orange-500" id="typing-22"></span>
                            </div>
                        </div>


                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                10
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                11
                            </div>
                            <div class="ml-3">
                                <span class="text-orange-500" id="typing-23"></span>
                                <span class="text-yellow-500" id="typing-24"></span><span id="typing-25"></span>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                12
                            </div>
                            <div class="ml-3">
                                <div class="ml-3">
                                    <span class="text-orange-500" id="typing-26"></span><span class="text-green-750" id="typing-27"></span><span class="text-orange-500" id="typing-28"></span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                13
                            </div>
                            <div class="ml-3" id="typing-29">

                            </div>
                        </div>

                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                14
                            </div>
                            <div>

                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                15
                            </div>
                            <div>
                                <span class="text-orange-500" id="typing-30"></span>
                            </div>
                        </div>

                        <div class="w-full flex">
                            <div class="text-gray-600 w-6 mr-3">
                                16
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <svg viewBox="0 0 1440 320"
             xmlns="http://www.w3.org/2000/svg">
            <path d="m0 64 60 26.7c60 26.3 180 80.3 300 90.6 120 10.7 240-21.3 360-42.6 120-21.7 240-31.7 360-21.4 120 10.7 240 42.7 300 58.7l60 16v128h-60-300-360-360-300-60z"
                  fill="#fff"/>
        </svg>
    </div>

    {{-- Section 2: Skill explanation --}}
    <div class="container mx-auto py-10 mb-40 flex flex-wrap">

        <div class="w-full sm:w-1/2 flex justify-center items-center">
            <svg class="w-full sm:px-24"
                 data-name="Layer 1"
                 viewBox="0 0 1144 617.32"
                 xmlns="http://www.w3.org/2000/svg">
                <title>developer activity</title>
                <path transform="translate(-28 -141.34)"
                      d="M1172,537.57a181.92,181.92,0,0,1-6.85,49.6,180.06,180.06,0,0,1-19.27,44.28c0,50.1-33.82,93.4-82.91,114a167.3,167.3,0,0,1-64.73,12.8H245.17c-40.25,0-77.55-10.86-108.14-29.36A185.76,185.76,0,0,1,112.2,711c-34-29.22-55.08-69.6-55.08-114.2A180.5,180.5,0,0,1,28,498.08c0-73.36,43.39-136.44,105.55-164.29a174.52,174.52,0,0,1,25.51-9.12q4.63-1.26,9.36-2.26a175.39,175.39,0,0,1,25.51-3.5q4.65-.29,9.35-.33H205c3.46,0,6.89.12,10.3.32l1.12-1.9q2.06-3.44,4.22-6.81,3.9-6.14,8.18-12.1,4.48-6.29,9.35-12.38l.83-1q2.76-3.44,5.64-6.8,9-10.49,19-20.35c72.11-70.68,185.08-116.18,312.08-116.18,98.82,0,189.15,27.55,258.34,73.07A174.18,174.18,0,0,1,920,191.86c97.74,0,177,80.37,177,179.51a184.9,184.9,0,0,1-1,18.78A180,180,0,0,1,1172,537.57Z"
                      fill="#4299e1"
                      opacity=".1"/>
                <path transform="translate(-28 -141.34)"
                      d="m263.66 257.52v20.35h-19q8.93-10.48 19-20.35z"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="245.02"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="279.88"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="314.75"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="349.61"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="419.35"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="454.21"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="489.08"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="523.94"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="558.81"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="593.68"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="628.54"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="663.41"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="698.28"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="733.14"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="837.74"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="872.61"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="907.47"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="942.34"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="977.2"
                      y="111.02"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <path transform="translate(-28 -141.34)"
                      d="m228.8 298.08v12.1h-8.18q3.9-6.18 8.18-12.1z"
                      fill="#4299e1"/>
                <rect x="210.15"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="245.02"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="279.88"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="314.75"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="349.61"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="419.35"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="454.21"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="489.08"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="523.94"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="558.81"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="593.68"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="628.54"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="663.41"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="698.28"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="733.14"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="768.01"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="837.74"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="872.61"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="907.47"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="942.34"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="977.2"
                      y="143.33"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <path transform="translate(-28 -141.34)"
                      d="m159.06 324.67v17.83h-25.51v-8.71a174.52 174.52 0 0 1 25.51-9.12z"
                      fill="#4299e1"
                      opacity=".2"/>
                <polygon points="165.93 177.57 165.93 201.16 140.42 201.16 140.42 181.07"
                         fill="#4299e1"
                         opacity=".2"/>
                <rect x="175.28"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="210.15"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="245.02"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="279.88"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="314.75"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="349.61"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="419.35"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="454.21"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="489.08"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="523.94"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="558.81"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="593.68"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="628.54"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="663.41"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="698.28"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="733.14"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="802.87"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="837.74"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="872.61"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="907.47"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="942.34"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="977.2"
                      y="175.65"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="105.55"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="140.42"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="175.28"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="210.15"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="245.02"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="279.88"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="314.75"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="349.61"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="419.35"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="454.21"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="489.08"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="523.94"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="558.81"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="593.68"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="628.54"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="663.41"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="698.28"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="733.14"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="837.74"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="872.61"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="907.47"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="942.34"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="977.2"
                      y="207.96"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="105.55"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="140.42"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="175.28"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="210.15"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="245.02"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="279.88"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="314.75"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="349.61"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="419.35"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="454.21"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="489.08"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="523.94"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="558.81"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="593.68"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="628.54"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="663.41"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="698.28"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="733.14"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="837.74"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="872.61"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="907.47"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="942.34"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="977.2"
                      y="240.28"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="105.55"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="140.42"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="175.28"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="210.15"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="245.02"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="279.88"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="314.75"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="349.61"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="419.35"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="454.21"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="489.08"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="523.94"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="558.81"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="593.68"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="628.54"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="663.41"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="698.28"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="733.14"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="837.74"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="872.61"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="907.47"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="942.34"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".4"/>
                <rect x="977.2"
                      y="272.59"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="105.55"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="140.42"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="175.28"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="210.15"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="245.02"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".7"/>
                <rect x="279.88"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="314.75"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="349.61"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="384.48"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="419.35"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="454.21"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="489.08"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="523.94"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="558.81"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="593.68"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="628.54"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <rect x="663.41"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="698.28"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="733.14"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="768.01"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="802.87"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="837.74"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="872.61"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="907.47"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="942.34"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"
                      opacity=".2"/>
                <rect x="977.2"
                      y="304.91"
                      width="25.51"
                      height="25.51"
                      fill="#4299e1"/>
                <circle cx="734.52"
                        cy="363.89"
                        r="34.87"
                        fill="#767d9f"/>
                <path transform="translate(-28 -141.34)"
                      d="m760.71 460.87q5.22 22.78 8.86 45.9c0.73 4.58 1.38 9.41-0.28 13.74-1.39 3.61-4.22 6.43-6.44 9.59s-3.9 7.21-2.55 10.83 5.29 5.6 9.05 6.62c10.76 2.9 22.23 0.79 32.94-2.35a53.29 53.29 0 0 0 13.81-5.72c4.54-2.88 8.26-6.88 11.68-11 15.61-18.93 25.83-41.65 35.45-64.23a39.12 39.12 0 0 1-33.11-13.34c-3.94-4.63-6.83-11.08-4.61-16.74-6.51 3.57-14.24 3.81-21.25 6.25a75.49 75.49 0 0 0-12.5 6.15q-7.18 4.15-14.28 8.46c-5.41 3.26-10.48 6.16-16.77 5.84z"
                      fill="#ae6e79"/>
                <path transform="translate(-28 -141.34)"
                      d="m833.64 487.05c-6.11 11.89-14.06 23.32-25.41 30.4s-26.63 9-38 2c-5.6-3.42-9.84-8.62-14.73-13s-11-8.13-17.57-7.56c-7.24 0.63-12.91 6.28-17.76 11.69-7.36 8.22-14.47 16.79-19.68 26.52-10 18.7-12.37 40.56-11.93 61.76s3.51 42.29 3.58 63.49c0.1 26.08-4.32 51.95-8.79 77.64 41.1-5.06 82.25 6 123.44 10.19 26.36 2.71 52.92 2.65 79.42 2.58 4.66 0 9.62-0.12 13.5-2.7a18.2 18.2 0 0 0 5.59-6.64c3.66-6.75 5.13-14.45 6.15-22.06 2.59-19.22 2.67-38.68 2.74-58.08 0.18-47 0.35-94.17-5.62-140.8-1.47-11.47-3.35-23-7.75-33.73s-11.58-20.6-21.62-26.35c-6.45-3.7-21.4-10.14-29-6.41-8.53 4.16-12.47 23.1-16.56 31.06z"
                      fill="#767d9f"/>
                <path transform="translate(-28 -141.34)"
                      d="M836.68,619.77c-1.55-29-7.86-59.95,5.57-85.69,3.3-6.32-8.54-14.21-4.88-20.33a92.08,92.08,0,0,0,10.06-23.93c.76-2.89,1.37-5.95.65-8.85-1.33-5.29-6.56-8.44-11-11.66-4.9-3.56-7.42-14.41-9-20.28s12.57,1.2,18.26-.89c7.9-2.89,17.94-1.07,25.82,1.86,4.4,1.62,9.18,1.76,13.87,1.88,9.11.24,18.25.47,27.29-.65,4.06-.51,8.13-1.28,12.21-1.05,10.41.59,19.46,7.71,25.62,16.13s10.08,18.23,15.13,27.35c4.21,7.6,9.23,14.78,12.82,22.69,3.18,7,5.19,14.52,7.18,22l5.13,19.19a25.58,25.58,0,0,1,1.26,8.51c-.26,3.07-1.62,5.93-3,8.66A164.12,164.12,0,0,1,971,603.2c-10.79,13.23-23.89,25.16-30.3,41-2.5,6.17-3.89,12.73-5.16,19.27a707.94,707.94,0,0,0-10.9,79.15,174.2,174.2,0,0,0-36.52-12.21,177.61,177.61,0,0,0-19-3c-5.59-.58-12.8.52-18.12-1-8.9-2.53-9.88-17.58-11.23-25.46-2.16-12.55-2.59-25.32-2.67-38C837,648.53,837.45,634.14,836.68,619.77Z"
                      fill="#4c4981"/>
                <path transform="translate(-28 -141.34)"
                      d="M641.23,565.54c4.21,24,8.85,48.07,18,70.62-.23.22-.46.42-.69.62-.81.69-1.65,1.34-2.53,2-2.05,1.44-4.3,2.66-6,4.54a8,8,0,0,0-1.5,2.45,5.48,5.48,0,0,0,0,4.47c-4.77,2.11-10.31,1.46-15.66,1.26-4.61-.17-9.08,0-12.78,2.53-5.14,3.54-6.69,10.34-7.52,16.52q-.46,3.38-.79,6.77-.32,3.15-.52,6.32a188.61,188.61,0,0,0-.19,21q.08,1.92.21,3.84c-16.34-.39-31.23-8.91-45.32-17.19-3.22-1.89-6.54-3.88-8.63-7A15.8,15.8,0,0,1,555,674c0-.51.09-1,.16-1.52a41.58,41.58,0,0,1,2.29-8.68,107.2,107.2,0,0,1,19.19-32.65c3.58-4.18,7.61-8.27,9.28-13.52.73-2.29,1-4.72,1.74-7,3.32-9.88,15.3-14.55,19.4-24.14,1-2.29,1.46-4.8,2.7-7a17.63,17.63,0,0,1,4.25-4.75c.73-.61,1.49-1.2,2.24-1.79q10.54-8.26,20.31-17.45,1.82-1.71,3.6-3.46A59.48,59.48,0,0,0,641.23,565.54Z"
                      fill="#4c4981"/>
                <path transform="translate(-28 -141.34)"
                      d="M742,494.56c-1.44,1.52-3,2.95-4.53,4.37l-.41.37-1.62,1.5a39,39,0,0,0-7.55,8.79l-.17.28c-5.1,9.13-3.21,20.37-1.79,30.74a261.55,261.55,0,0,1,2.37,39c-.26,18-2.38,35.88-2.42,53.86,0,4.08.09,8.15.27,12.23.29,6.63.79,13.25,1.39,19.87.65,7.26,1.43,14.51,2.16,21.76.58,5.61,1.13,11.21,1.59,16.81.23,2.9.45,5.79.63,8.69.21,3.4.38,6.81.48,10.21h0c.07,2.16.11,4.31.11,6.47,0,1.23,0,2.45,0,3.67q0,3.51-.19,7-.2,4.49-.61,9c-.31,3.27-.86,6.84-3.16,9.14-.14.14-.29.27-.44.4l-3.24-.4a332.72,332.72,0,0,0-67.3-1.2c.49-3.38.94-6.75,1.38-10.14.2-1.6.4-3.21.59-4.82q.33-2.76.63-5.52c.23-2,.44-4,.64-6q.78-7.73,1.37-15.47.87-11.29,1.32-22.62.22-5.41.34-10.83.17-6.72.16-13.45,0-6.54-.11-13.1c0-1.44-.06-2.88-.18-4.31a27.35,27.35,0,0,0-.53-3.83,49.87,49.87,0,0,0-3-8.48c-.22-.52-.43-1-.64-1.55-.12-.27-.23-.55-.34-.82,5.76-5.13,9.86-12,13.8-18.76,6.39-10.89,12.93-22.26,14-34.84s-5.18-26.71-17.2-30.55c-3.27-1-6.73-1.28-10.1-1.87-3.18-.56-9.81-1.83-13.49-4.11q-3,3.08-6,6.05a22.15,22.15,0,0,1,2.17-8.71l1.42.07a2.71,2.71,0,0,1-.16-1c0-1.07.74-2.28,2.32-3.62,4.71-4,12.12-4.89,15.09-10.3,1.24-2.25,1.45-4.93,2.45-7.29,2.87-6.73,11.11-9.21,16.07-14.59s6.2-13,10.21-19a28.62,28.62,0,0,1,12-10c.4-.19.81-.38,1.22-.55,8.3-3.55,18.16-4.36,26.76-4.34,3.34,0,12,.1,16.24,1.79a5.32,5.32,0,0,1,1.85,1.13C752.37,480.61,745.34,491,742,494.56Z"
                      fill="#4c4981"/>
                <path transform="translate(-28 -141.34)"
                      d="m642.72 542.69a60.88 60.88 0 0 1 46.74 4.87c7.2 4 13.66 9.58 17.62 16.78 5.95 10.8 5.69 23.82 5.27 36.15-0.21 6.17-0.48 12.56-3.2 18.1-3.15 6.41-9.09 10.81-15.15 14.41a42.24 42.24 0 0 1-12.32 5.33c-6.72 1.46-13.7 0.22-20.47-1-7.36-1.36-15.26-3-20.37-8.48-3-3.18-4.64-7.31-6.26-11.35q-3.49-8.75-7-17.48c-4.05-10.11-5.42-18.52-0.07-28.37 2.43-4.49 5.4-8.69 7.8-13.21 1.2-2.3 5.5-15.16 7.41-15.75z"
                      fill="#4c4981"/>
                <path transform="translate(-28 -141.34)"
                      d="M1063,715.56v29.9a167.3,167.3,0,0,1-64.73,12.8H728.58c-.14.14-.29.27-.44.4l-3.24-.4H245.17c-40.25,0-77.55-10.86-108.14-29.36V683.25l230.72-26.63.18,0L502.29,668l34.77,3,18.06,1.53,37.38,3.17,19.23,1.63,28,2.38,3.94.33,20.18,1.71L691.23,684l38.5,3.26,64.18,5.45,45.15,3.83,74.14,6.29,14.1,1.19,1.52.13,1.32.11,18.62,1.58,20.44,1.74,2.37.2Z"
                      fill="#504f60"/>
                <polygon points="764 573.12 474.86 523.77 463.65 580.46 596.19 596.33 637 601.44 749.26 579.33"
                         fill="#9c9ca1"/>
                <path transform="translate(-28 -141.34)"
                      d="m642.33 739.94 144.86-27.23a5 5 0 0 1 5.94 4.93 5 5 0 0 1-4.09 4.93l-141.47 26.49z"
                      fill="#9c9ca1"/>
                <path transform="translate(-28 -141.34)"
                      d="M705.17,654.31c4.51-.42,9.08-1.13,13.14-3.13,5-2.49,8.89-6.78,13.52-9.94,10.18-7,23.8-7.94,35.47-3.92s21.41,12.63,28.23,22.91c4.53,6.85,7.93,15.59,4.73,23.15a30.51,30.51,0,0,1-4.12,6.44l-8.34,10.9a29,29,0,0,1-5.66,6.09c-3.12,2.27-7,3.2-10.82,3.76-10.15,1.48-20.48.64-30.71,1.32-17.57,1.17-34.73,6.83-52.34,6.64-10.12-.11-20.11-2.15-30-4.19l-43.77-9c-7.62-1.56-16.23-3.84-19.82-10.75-1.61-3.11-1.91-6.71-2.1-10.21-.52-9.64,0-20.36,6.68-27.31,6.28-6.52,16.21-8.58,23.71-13.4,9.18-5.91,12.21-4,21.89.44A120,120,0,0,0,705.17,654.31Z"
                      fill="#ae6e79"/>
                <path transform="translate(-28 -141.34)"
                      d="M705.17,654.31c4.51-.42,9.08-1.13,13.14-3.13,5-2.49,8.89-6.78,13.52-9.94,10.18-7,23.8-7.94,35.47-3.92s21.41,12.63,28.23,22.91c4.53,6.85,7.93,15.59,4.73,23.15a30.51,30.51,0,0,1-4.12,6.44l-8.34,10.9a29,29,0,0,1-5.66,6.09c-3.12,2.27-7,3.2-10.82,3.76-10.15,1.48-20.48.64-30.71,1.32-17.57,1.17-34.73,6.83-52.34,6.64-10.12-.11-20.11-2.15-30-4.19l-43.77-9c-7.62-1.56-16.23-3.84-19.82-10.75-1.61-3.11-1.91-6.71-2.1-10.21-.52-9.64,0-20.36,6.68-27.31,6.28-6.52,16.21-8.58,23.71-13.4,9.18-5.91,12.21-4,21.89.44A120,120,0,0,0,705.17,654.31Z"
                      opacity=".05"/>
                <path transform="translate(-28 -141.34)"
                      d="m880.94 640.6c-12.28 4.75-24.63 9.52-37.49 12.35-21.56 4.75-44.12 4-65.51 9.43-11.3 2.88-22.53 7.52-34.14 6.58-5.19-0.42-10.2-2-15.25-3.2-28.37-7-60.62-4.73-83.66 13.27-7.88 6.15-14.33 13.82-20.18 22a14.7 14.7 0 0 0 5.91 21.88 86.62 86.62 0 0 0 28.38 7.57c13.13 1.16 26.32-0.7 39.38-2.56 19.38-2.75 38.77-5.51 58.1-8.6 6.94-1.11 13.88-2.26 20.86-3.14 50.23-6.35 101.37 1.37 151.73-3.93 5.09-0.54 10.27-1.24 14.9-3.41 11.72-5.5 17.52-20 15.1-32.74s-11.76-23.33-23-29.83c-9.42-5.47-19.58-7.68-30.07-10-9.74-2.27-15.68 0.73-25.06 4.33z"
                      fill="#ae6e79"/>
                <path transform="translate(-28 -141.34)"
                      d="M988.67,564.44c5.54,7.26,6.72,17,6.12,26.09s-2.76,18.08-3.08,27.21c-.44,12.52,2.58,25,2.07,37.48-.36,8.73-2.43,17.29-4.88,25.67-2.89,9.89-7.07,20.52-16.2,25.27-12.12,6.31-37.54,2.76-50.29,7.7,1.16-7.23,12.28-17.7,13.44-24.93.8-5,1.61-10.14.75-15.15-1.1-6.39-4.85-12.06-9.3-16.78-7.08-7.51-16.32-13.16-26.47-15s-35-.33-43.12,6.08c-1-6.62,17.6-13,24.14-14.43,3.26-.73,7-.32,9.61-2.39,5-3.92,1.37-11.73,1.61-18,.19-5,3.11-9.58,3.7-14.58,1-8-4.22-16.15-2.17-24,.76-2.9,2.45-5.45,3.62-8.21,3.56-8.45,2-18.09.1-27.07-1.18-5.64-2.33-12,.81-16.81,2.91-4.49,11.17,11.5,16.46,10.76,17.47-2.45,33.28-15.4,47.39-4.8,7.19,5.4,8.13,11,11,18.71C976.77,554.6,984,558.36,988.67,564.44Z"
                      opacity=".1"/>
                <path transform="translate(-28 -141.34)"
                      d="M991.67,564.44c5.54,7.26,6.72,17,6.12,26.09s-2.76,18.08-3.08,27.21c-.44,12.52,2.58,25,2.07,37.48-.36,8.73-2.43,17.29-4.88,25.67-2.89,9.89-7.07,20.52-16.2,25.27-12.12,6.31-37.54,2.76-50.29,7.7,1.16-7.23,12.28-17.7,13.44-24.93.8-5,1.61-10.14.75-15.15-1.1-6.39-4.85-12.06-9.3-16.78-7.08-7.51-16.32-13.16-26.47-15s-35-.33-43.12,6.08c-1-6.62,17.6-13,24.14-14.43,3.26-.73,7-.32,9.61-2.39,5-3.92,1.37-11.73,1.61-18,.19-5,3.11-9.58,3.7-14.58,1-8-4.22-16.15-2.17-24,.76-2.9,2.45-5.45,3.62-8.21,3.56-8.45,2-18.09.1-27.07-1.18-5.64-2.33-12,.81-16.81,2.91-4.49,8.6-6.19,13.89-6.94a68.42,68.42,0,0,1,50,12.9c7.19,5.4,8.13,11,11,18.71C979.77,554.6,987,558.36,991.67,564.44Z"
                      fill="#4c4981"/>
                <path transform="translate(-28 -141.34)"
                      d="M330,517.06,384.37,718a12.55,12.55,0,0,0,10.91,9.21L640,750.72a12.54,12.54,0,0,0,13.38-15.48L593.84,492.86a12.54,12.54,0,0,0-13.12-9.51L341.13,501.27A12.54,12.54,0,0,0,330,517.06Z"
                      fill="#9c9ca1"/>
                <ellipse cx="787.11"
                         cy="387.68"
                         rx="26.9"
                         ry="27.25"
                         fill="#fff"/>
                <path transform="translate(-28 -141.34)"
                      d="m837.2 479.31s5.67 16.86-11.06 23.95l-2.14 3.74 10.48 10.34s12.92-23.57 11.52-31.94c0 0-2-8.5-8.8-6.09z"
                      fill="#fff"/>
                <circle cx="790.2"
                        cy="388.99"
                        r="25.94"
                        fill="#4299e1"/>
                <path transform="translate(-28 -141.34)"
                      d="m846.13 489.23-4.12-6.8-6-0.85c1.28-22.39-4.53-29.06-4.53-29.06l-1.35-0.13-5.88-0.57-11.06-11.48v-3.26c15.54 1.85 24.13 9.23 28.77 17.88 8.2 15.18 4.17 34.27 4.17 34.27z"
                      fill="#4299e1"/>
                <path transform="translate(-28 -141.34)"
                      d="m830.18 448.27v4.12l-5.88-0.57-11.06-11.48s17.11 3.83 16.94 7.93z"
                      opacity=".1"
                      stroke="#4c4981"
                      stroke-miterlimit="10"/>
                <path transform="translate(-28 -141.34)"
                      d="m846.13 489.23-4.12-6.8v-27.43c8.15 15.14 4.12 34.23 4.12 34.23z"
                      opacity=".1"
                      stroke="#4c4981"
                      stroke-miterlimit="10"/>
                <ellipse transform="translate(-185.67 306.64) rotate(-30)"
                         cx="757.11"
                         cy="518.2"
                         rx="14.43"
                         ry="26.32"
                         fill="#fff"/>
                <path transform="translate(-28 -141.34)"
                      d="M761,516c7.27,12.59,16.19,21,9.29,25s-27,2-34.27-10.6-.67-30,6.23-34S753.72,503.38,761,516Z"
                      fill="#4299e1"/>
                <path transform="translate(-28 -141.34)"
                      d="m825.73 425.3c0 40.23-27.53 79-67.76 79a72.85 72.85 0 0 1 0-145.7c40.23 0.04 67.76 26.46 67.76 66.7z"
                      opacity=".1"/>
                <circle cx="729.97"
                        cy="288.15"
                        r="72.85"
                        fill="#ae6e79"/>
                <path transform="translate(-28 -141.34)"
                      d="M751.57,397.21c8.67,3.19,13.8,12.15,21.58,17.14,11,7,25.32,5.19,37.88,1.73,7-1.91,14.32-4.24,21.21-2.12a6,6,0,0,0,3.23.46c1.5-.43,2.24-2.09,2.73-3.57,8.52-25.4,4.69-54.17-8.17-77.67-3.32-6.06-7.3-11.92-12.78-16.13-4.32-3.31-9.4-5.48-14.52-7.33a145,145,0,0,0-28.88-7.13,17.94,17.94,0,0,0-5.27-.17c-2.41.39-4.57,1.69-6.72,2.85A68.78,68.78,0,0,1,732,313.38c-14,.53-30-2.77-40.79,6.21-13,10.77-9.76,31.78-18.19,46.4-5.58,9.67-16.34,16.69-18.11,27.7a25.57,25.57,0,0,0,.63,10.07c4.12,16.94,20.52,30.06,38,30.37a14.42,14.42,0,0,0,7.76-1.59,17.55,17.55,0,0,0,4.09-3.89C716.84,415.09,729.94,389.25,751.57,397.21Z"
                      fill="#444053"/>
                <path transform="translate(-28 -141.34)"
                      d="M838.2,403.48c-.49,1.48-1.23,3.14-2.73,3.57a6,6,0,0,1-3.23-.46c-6.89-2.12-14.25.21-21.2,2.12-12.57,3.46-26.92,5.31-37.88-1.73-7.79-5-12.91-14-21.59-17.14-21.63-8-34.73,17.88-46.21,31.44a17.55,17.55,0,0,1-4.09,3.89,14.42,14.42,0,0,1-7.76,1.59c-17.42-.31-33.83-13.43-38-30.37-.23-1-.43-2-.58-3,0,.09,0,.17-.05.26a25.57,25.57,0,0,0,.63,10.07c4.12,16.94,20.53,30.06,38,30.37a14.42,14.42,0,0,0,7.76-1.59,17.55,17.55,0,0,0,4.09-3.89c11.48-13.56,24.58-39.4,46.21-31.44,8.68,3.19,13.8,12.15,21.59,17.14,11,7,25.31,5.19,37.88,1.73,7-1.91,14.31-4.24,21.2-2.12a6,6,0,0,0,3.23.46c1.5-.43,2.24-2.09,2.73-3.57a90.29,90.29,0,0,0,4.48-32.26A88.8,88.8,0,0,1,838.2,403.48Z"
                      opacity=".1"/>
            </svg>
        </div>
        <div class="text-gray-700 w-full sm:w-1/2 mt-5 sm:mt-0 px-3 sm:px-0 flex flex-col justify-center items-center">
            <h2 class="w-full text-3xl font-bold">GIT is a requirement, not a skill</h2>
            <p class="w-full text-lg">I can't imagine working on a project without using GIT. It has become my first
                instinct when thinking of a new project when developing something I am making sure that GIT is the right
                tool to find all my sources and to push all my code to. Making sure they get reviewed and I am reviewing
                other people their code.</p>
        </div>
    </div>

    {{-- Section 3: Laravel Skill --}}
    <div class="bg-blue-500 text-white">
        <svg viewBox="0 0 1440 288"
             xmlns="http://www.w3.org/2000/svg">
            <path transform="translate(1440 320) rotate(180)"
                  d="M0,32,60,42.7C120,53,240,75,360,122.7,480,171,600,245,720,256s240-43,360-48,240,37,300,58.7l60,21.3v32H0Z"
                  fill="#fff"
                  data-name="wave (2)"/>
        </svg>

        <div class="container mx-auto py-10 flex flex-wrap">
            <div class="w-full sm:w-1/2 flex flex-col justify-center items-center px-2 sm:px-0 sm:text-right">
                <h2 class="w-full text-3xl font-bold">Well-known with Laravel and Vue</h2>
                <p class="w-full text-lg">Since 2019 I've been working with Laravel and Vue. Developing more
                    knowledge
                    around these frameworks are
                    what I love doing. I've worked with a ton of projects which contained the Laravel framework and love
                    continuing
                    those projects. I want to become one of the VueJS and Laravel Masters in the upcoming years so that
                    is
                    what
                    keeps me driving.

                    If you want to see my projects working with Laravel you can find out a list of projects here.</p>
            </div>
            <div class="w-full sm:w-1/2 mt-5 sm:mt-0 flex justify-center items-center">
                <svg class="w-1/2"
                     data-name="Layer 1"
                     viewBox="0 0 863 826.71"
                     xmlns="http://www.w3.org/2000/svg">
                    <title>laravel and vue</title>
                    <path transform="translate(-168.5 -36.643)"
                          d="m908.58 346.03c-44.916-176.62-200.12-304.12-382.29-309.23-96.309-2.7035-197.65 29.238-271.44 141.01-131.9 199.81 8.1056 337.88 105.71 403.49a610.76 610.76 0 0 1 126.24 113.47c65.931 78.238 192.77 175.46 343.82 23.128 109.49-110.41 107.87-254.22 77.948-371.87z"
                          fill="#f2f2f2"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m1030.5 739.36c0 43.354-189.19 124-427.5 124s-434.5-75.646-434.5-119 196.19-38 434.5-38 427.5-10.354 427.5 33z"
                          fill="#3f3d56"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m1030.5 739.36c0 43.354-189.19 124-427.5 124s-434.5-75.646-434.5-119 196.19-38 434.5-38 427.5-10.354 427.5 33z"
                          opacity=".1"/>
                    <ellipse cx="431.5"
                             cy="707.21"
                             rx="431.5"
                             ry="78.5"
                             fill="#3f3d56"/>
                    <polygon points="594.86 440.24 594.86 650.18 629.98 707.41 632.65 711.77 771.21 711.77 774.01 440.24"
                             fill="#2f2e41"/>
                    <polygon points="594.86 440.24 594.86 650.18 629.98 707.41 632.13 440.24"
                             opacity=".1"/>
                    <polygon points="260.35 434.64 260.35 644.58 225.23 701.81 222.56 706.17 83.994 706.17 81.195 434.64"
                             fill="#2f2e41"/>
                    <polygon points="260.35 434.64 260.35 644.58 225.23 701.81 223.08 434.64"
                             opacity=".1"/>
                    <polygon points="816 430.44 816 443.04 63 443.04 63 424.84 132.98 388.45 754.42 388.45"
                             fill="#2f2e41"/>
                    <polygon points="816 430.44 816 443.04 63 443.04 63 424.84"
                             opacity=".1"/>
                    <polygon points="170.77 493.42 137.18 493.42 123.18 483.63 186.17 483.63"
                             opacity=".1"/>
                    <polygon points="170.77 534.01 137.18 534.01 123.18 524.22 186.17 524.22"
                             opacity=".1"/>
                    <polygon points="170.77 591.4 137.18 591.4 123.18 581.6 186.17 581.6"
                             opacity=".1"/>
                    <polygon points="170.77 648.78 137.18 648.78 123.18 638.98 186.17 638.98"
                             opacity=".1"/>
                    <polygon points="684.44 499.02 718.03 499.02 732.02 489.22 669.04 489.22"
                             opacity=".1"/>
                    <polygon points="684.44 539.61 718.03 539.61 732.02 529.81 669.04 529.81"
                             opacity=".1"/>
                    <polygon points="684.44 597 718.03 597 732.02 587.2 669.04 587.2"
                             opacity=".1"/>
                    <polygon points="684.44 654.38 718.03 654.38 732.02 644.58 669.04 644.58"
                             opacity=".1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m701.02 390.07-4.6687 29.808s-22.984 12.21-6.8234 12.569 92.296 0 92.296 0 14.724 0-8.619-12.929l-4.6686-31.244z"
                          fill="#3f3d56"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m686.27 432.12a63.569 63.569 0 0 1 10.074-6.6685l4.6686-29.808 67.516 0.06351 4.6686 29.385a61.304 61.304 0 0 1 10.788 7.0989c2.9981-0.68405 6.2745-3.2261-10.788-12.676l-4.6686-31.244-67.516 1.7956-4.6687 29.808s-19.313 10.262-10.074 12.246z"
                          opacity=".1"/>
                    <rect x="413.82"
                          y="145.67"
                          width="304.18"
                          height="211.88"
                          rx="10.695"
                          fill="#3f3d56"/>
                    <rect x="424.06"
                          y="156.98"
                          width="283.71"
                          height="158.73"
                          fill="#f2f2f2"/>
                    <circle cx="565.91"
                            cy="151.96"
                            r="1.7956"
                            fill="#f2f2f2"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m886.5 364.93v18.574a10.693 10.693 0 0 1-10.695 10.695h-282.79a10.693 10.693 0 0 1-10.695-10.695v-18.574z"
                          fill="#3f3d56"/>
                    <circle cx="565.91"
                            cy="343.01"
                            r="6.8234"
                            fill="#f2f2f2"/>
                    <polygon points="555.28 415.2 555.28 418.79 362.07 418.79 362.07 415.92 362.34 415.2 367.1 402.27 551.33 402.27"
                             fill="#3f3d56"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m798.14 448.32c-0.35194 1.5047-1.6807 3.0921-4.683 4.5932-10.774 5.3869-32.681-1.4365-32.681-1.4365s-16.879-2.873-16.879-10.415a13.468 13.468 0 0 1 1.4796-0.87984c4.5296-2.3964 19.548-8.3097 46.178 0.25038a11.106 11.106 0 0 1 5.0619 3.3172 5.2964 5.2964 0 0 1 1.523 4.5702z"
                          fill="#3f3d56"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m798.14 448.32c-13.187 5.0529-24.941 5.43-37.004-2.9484-6.0836-4.2233-11.611-5.2684-15.758-5.1894 4.5296-2.3964 19.548-8.3097 46.178 0.25038a11.106 11.106 0 0 1 5.0619 3.3172 5.2964 5.2964 0 0 1 1.523 4.5702z"
                          opacity=".1"/>
                    <ellipse cx="613.1"
                             cy="407.3"
                             rx="4.6686"
                             ry="1.4365"
                             fill="#f2f2f2"/>
                    <polygon points="555.28 415.2 555.28 418.79 362.07 418.79 362.07 415.92 362.34 415.2"
                             opacity=".1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m834.19 268.59c-1.5244-1.5244-21.087-26.169-24.39-30.234-3.5569-4.065-5.0813-3.3028-7.3679-3.0488s-26.931 4.5732-29.725 4.8272c-2.7947 0.50813-4.5732 1.5244-2.7947 4.065 1.5244 2.2866 17.784 25.152 21.341 30.488l-64.786 15.498-51.321-86.128c-2.0325-3.0488-2.5406-4.065-7.1138-3.811s-40.396 3.3028-42.937 3.3028c-2.5406 0.25407-5.3354 1.2703-2.7947 7.3679s43.191 93.496 44.207 96.036 4.065 6.6057 10.925 5.0813c7.1138-1.7784 31.504-8.13 44.969-11.687 7.1138 12.703 21.341 38.618 24.136 42.429 3.5569 5.0813 6.0975 4.065 11.433 2.5406 4.3191-1.2703 66.565-23.628 69.359-24.898s4.5732-2.0325 2.5406-4.8272c-1.5244-2.0325-17.784-24.136-26.423-35.569 5.8435-1.5244 26.931-7.1138 29.217-7.876 2.5406-0.76219 3.0488-2.0325 1.5244-3.5569zm-117.63 24.136c-0.76219 0.25406-37.093 8.8922-38.872 9.4004-2.0325 0.50813-2.0325 0.25406-2.0325-0.50813-0.50813-0.76219-43.191-89.176-43.953-90.193-0.50813-1.0163-0.50813-2.0325 0-2.0325s34.299-3.0488 35.315-3.0488c1.2703 0 1.0163 0.25406 1.5244 1.0162 0 0 47.51 82.063 48.272 83.333 1.0163 1.2703 0.50813 1.7784-0.25406 2.0325zm102.13 19.055c0.50812 1.0163 1.2703 1.5244-0.7622 2.0325-1.7784 0.76219-61.229 20.833-62.5 21.341s-2.0325 0.76219-3.5569-1.5244-20.833-35.569-20.833-35.569l63.262-16.514c1.5244-0.50813 2.0325-0.76219 3.0488 0.76219 1.0163 1.7784 20.833 28.709 21.341 29.471zm4.065-44.715c-1.5244 0.25406-24.644 6.0975-24.644 6.0975l-19.055-25.915c-0.50813-0.76219-1.0163-1.5244 0.25406-1.7784s22.866-4.065 23.882-4.3191 1.7784-0.50813 3.0488 1.2703c1.2703 1.5244 17.53 22.358 18.293 23.12s-0.25406 1.2703-1.7784 1.5244z"
                          fill="#fb503b"/>
                    <circle cx="394.64"
                            cy="155.89"
                            r="38.247"
                            fill="#ffb9b9"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m534.96 211.66v60.389h62.402s-8.0519-50.325-4.026-65.422z"
                          fill="#ffb9b9"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m658.76 293.19s-59.383-29.188-59.383-31.201-6.0389-15.097-10.065-15.097-38.247-11.071-57.37 5.0324l-2.013 13.084-73.474 48.312 20.13 73.474s13.084 14.091 9.0584 24.156 3.0195 61.396 3.0195 61.396l158.02-5.0324v-68.441s5.0325-16.104 8.0519-21.136 0-20.13 0-20.13l24.156-30.195s-3.0195-28.182-20.13-34.221z"
                          fill="#d0cde1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m458.97 337.98 4.5292-24.659s-26.169 113.73-23.149 126.82 25.162 33.214 28.182 34.221 31.201-86.558 31.201-86.558z"
                          opacity=".1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m473.56 310.3-17.11 3.0195s-26.169 113.73-23.149 126.82 25.162 33.214 28.182 34.221 31.201-86.558 31.201-86.558z"
                          fill="#d0cde1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m664.29 344.01 8.5552-16.607s12.078 113.73 4.026 124.8-39.903 15.214-39.903 15.214l-0.35672-82.649z"
                          opacity=".1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m665.8 314.32 13.084 13.084s12.078 113.73 4.026 124.8-39.903 15.214-39.903 15.214l-0.35672-82.649z"
                          fill="#d0cde1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m470.54 487.44s-29.188-11.071-34.221 10.065 12.078 115.75 12.078 115.75 11.071 71.461 18.117 73.474 38.247 3.0195 43.279-6.039-15.097-101.66-15.097-101.66l116.75-2.013s-7.0454 80.519-11.071 87.565-4.026 31.201 0 31.201 48.312-2.013 51.331-8.0519 20.13-141.92 20.13-141.92 14.091-47.305-2.013-44.286-199.29-14.091-199.29-14.091z"
                          fill="#3f3d56"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m642.65 683.71s10.065-7.0454 15.097 0 7.0454 15.097-15.097 27.175-39.253 9.0584-39.253 7.0454v-29.188z"
                          fill="#2f2e41"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m468.53 680.69s-10.065-7.0454-15.097 0-7.0455 15.097 15.097 27.175 39.253 9.0584 39.253 7.0454v-29.188z"
                          fill="#2f2e41"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m563.39 144.31a32.348 32.348 0 0 0-11.234 1.6011 43.428 43.428 0 0 0-8.0027 4.2341l-16.885 10.5a7.9078 7.9078 0 0 0-4.7662 7.37l-2.11 15.802c-0.53248 3.9878-1.0233 8.2523 0.7618 11.858 1.49 3.0093 4.3314 5.0686 6.6678 7.4804a27.456 27.456 0 0 1 7.2365 14.061c1.208 6.5975 0.43461 14.542 5.6557 18.753 2.827 2.2797 6.6803 2.711 10.306 2.9229a153.79 153.79 0 0 0 29.701-1.1432 11.819 11.819 0 0 0 4.4875-1.2574c1.775-1.0499 2.8925-2.9032 3.9369-4.6814 3.7706-6.4197 7.657-13.249 7.6161-20.694-0.02026-3.6832-0.96268-7.6389 0.8058-10.87a42.497 42.497 0 0 1 3.0376-3.945c2.1896-3.0768 2.6159-7.03 2.9727-10.79 1.1398-12.009-0.05177-21.147-8.9022-29.606-8.2618-7.8965-20.017-11.523-31.285-11.595z"
                          fill="#2f2e41"/>
                    <polygon points="300.94 569.7 267.35 740.46 284.14 740.46 316.33 572.5"
                             fill="#2f2e41"/>
                    <polygon points="408.71 583.7 429.7 779.65 443.7 779.65 431.1 578.1"
                             fill="#2f2e41"/>
                    <polygon points="466.09 578.1 495.48 708.27 509.48 708.27 481.49 575.3"
                             fill="#2f2e41"/>
                    <polygon points="354.12 578.1 349.92 681.67 361.12 681.67 369.52 578.1"
                             fill="#2f2e41"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m445.64 588.15s-22.394-149.76 40.589-153.96 152.56 0 152.56 0 51.786-4.1989 36.39 153.96c0 0 13.996 46.188-111.97 41.989s-117.57-41.989-117.57-41.989z"
                          fill="#4299e1"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m1019.5 649.31c0 26.115-15.525 35.234-34.676 35.234s-34.676-9.1185-34.676-35.234 34.676-59.338 34.676-59.338 34.676 33.223 34.676 59.338z"
                          fill="#4299e1"/>
                    <polygon points="815.42 622.05 830.2 595.01 815.47 618.62 815.63 608.79 825.82 589.23 815.67 606.19 815.96 588.52 826.87 572.94 816 585.74 816.18 553.33 815.11 594.39 804.06 577.49 814.97 597.86 813.94 617.6 813.91 617.08 801.12 599.21 813.87 618.93 813.74 621.4 813.72 621.43 813.73 621.64 811.11 647.98 814.61 647.98 815.03 645.85 827.74 626.18 815.06 643.9"
                             fill="#3f3d56"/>
                    <polygon points="838.47 704.55 797.13 704.55 786.44 644.16 846.83 644.16"
                             fill="#2f2e41"/>
                    <rect x="145"
                          y="296.3"
                          width="86"
                          height="100.83"
                          fill="#3f3d56"/>
                    <rect x="158.34"
                          y="311.95"
                          width="59.31"
                          height="69.536"
                          fill="#f2f2f2"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m362.44 363.36-6.0231 10.432-6.0232-10.432h-20.056l26.079 45.17 26.079-45.17z"
                          fill="#4dba87"/>
                    <path transform="translate(-168.5 -36.643)"
                          d="m362.44 363.36-6.0231 10.432-6.0232-10.432h-9.6241l15.647 27.101 15.647-27.101z"
                          fill="#435466"/>
                </svg>

            </div>
        </div>

        <svg viewBox="0 0 1440 320"
             xmlns="http://www.w3.org/2000/svg">
            <path d="m0 96 60 26.7c60 26.3 180 80.3 300 80 120 0.3 240-53.7 360-80 120-26.7 240-26.7 360 10.6 120 37.7 240 111.7 300 149.4l60 37.3h-60-300-360-360-300-60z"
                  fill="#fff"/>
        </svg>
    </div>

    {{-- Section Projects --}}
    <div id="projects">
        <portfolio-filter-new endpoint="{{ route('api.projects') }}" />
    </div>

    @include('components.seo.person')
@endsection
