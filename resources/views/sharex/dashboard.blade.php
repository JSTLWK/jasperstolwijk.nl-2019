@extends('sharex.components.dashboard')

@section('title', 'Register ShareX Screenshots')

@section('content')

    <div class="flex flex-wrap">

        @include('sharex.components.dashboard-menu')

        <div class="container mx-auto">
            <div class="w-full flex flex-wrap pt-5">
                <div class="w-3/4 px-5 pb-5 pt-3">
                    <div class="flex justify-around">
                        <a href="{{ route('sharex.gallery') }}"
                           class="w-1/5 bg-white shadow  px-5 h-32 py-6 text-center">
                            <i class="fas fa-images fa-3x mb-3 text-blue-main"></i>
                            <h2>All Images</h2>
                        </a>
                        <a href="{{ route('sharex.user') }}"
                           class="w-1/5 bg-white shadow px-5 h-32 py-6 text-center">
                            <i class="fas fa-user fa-3x mb-3 text-blue-main"></i>
                            <h2>My info</h2>
                        </a>
                        <a href="{{ route('sharex.docs') }}"
                           class="w-1/5 bg-white shadow px-5 h-32 py-6 text-center">
                            <i class="far fa-file-alt fa-3x mb-3 text-blue-main"></i>
                            <h2>Docs</h2>
                        </a>
                    </div>
                </div>

                <div class="w-1/4 px-5 pb-5 pt-3">
                    <div class="bg-white shadow w-full px-5 h-32 py-6 text-center">
                        <h2 class="text-2xl">{{ $stats->amount }}</h2>
                        <p class="text-md">Screenshots sent via</p>
                        <p class="text-sm font-bold">{{ $domain }}</p>
                    </div>
                </div>

                <div class="w-3/4 px-5 pb-5 pt-3">
                    <h2 class="text-lg pb-1">News</h2>

                    @foreach($news as $newsitem)
                        <div class="w-full bg-white px-5 py-6 mb-10">
                            <div class="flex justify-between items-center mb-2">
                                <h2 class="font-bold text-lg">{{ $newsitem->title }}</h2>
                                <div class="text-sm">
                                    {{ \Carbon\Carbon::parse($newsitem->created_at)->format('d-m-yy') }}
                                </div>
                            </div>
                            <p>{!!  $newsitem->content !!}</p>
                        </div>
                    @endforeach


                </div>

                <div class="w-1/4 px-5 pb-5 pt-3">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg">Recent posts</h2>
                        @if(count($screenshots) > 0)
                        <p class="text-sm"><a href="{{ route('sharex.gallery') }}"
                                              class="text-blue-main">View all</a></p>
                        @endif
                    </div>


                    <div class="bg-white shadow-lg py-2">

                        @if(count($screenshots) > 0)
                            @foreach($screenshots as $screenshot)
                                <div class="flex flex-wrap px-3 py-1">
                                    <div class="w-1/3 h-12">
                                        <img src="{{$screenshot->url}}"
                                             class="w-full h-10"
                                             alt="">
                                    </div>
                                    <div class="w-2/3 h-12 pl-2 overflow-hidden">
                                        <h2 class="font-semibold">{{ $screenshot->image_name }}</h2>
                                        <p class="w-full text-right text-sm cursor-pointer"
                                           id="{{ $screenshot->image_name }}-copy"
                                           onclick="copyText('{{ $screenshot->url }}', '{{ $screenshot->image_name }}')">
                                            Copy Link</p>
                                        <p class="w-full text-right text-sm text-blue-main hidden"
                                           id="{{ $screenshot->image_name }}-copied">Copied link
                                            <i class="fas fa-check"></i></p>
                                    </div>
                                </div>
                            @endforeach
                        @else

                            <div class="flex flex-wrap justify-center items-center py-5">
                                <div class="w-full flex justify-center items-center mb-3">
                                    <i class="far fa-eye-slash fa-2x text-blue-darker"></i>
                                </div>
                                <p class="w-full text-center font-semibold">No Images found! :(</p>
                                <p class="w-full px-5 text-sm text-center" style="font-size: 0.75rem;">Looks like you haven't made an image.</p>
                            </div>

                        @endif
                    </div>
                </div>
            </div>


        </div>


    </div>

    <script type="text/javascript"
            src="{{ asset('js/dashboard.js') }}"></script>
@endsection

