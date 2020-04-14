@extends('sharex.components.index')

@section('title', 'Register ShareX Screenshots')

@section('content')

    @include('sharex.components.dashboard-menu')

    <div class="container mx-auto flex flex-wrap mt-5">

        @if(count($images) > 0)

            @foreach($images as $image)
                <div class="w-1/4 px-5 mb-5">
                    <div class="h-40 rounded-t"
                         style="background-image: url('{{$image->url}}'); background-repeat: no-repeat; background-size: cover;">

                    </div>
                    <div class="bg-white py-5 px-3 flex flex-wrap rounded-b shadow-lg">
                        <div class="w-2/3">
                            <h2 class="text-lg font-bold">{{ $image->image_name }}</h2>
                        </div>
                        <div class="w-1/3 text-right pr-3">
                            <form id="{{ $image->image_name }}"
                                  action="{{ route('sharex.deleteImage', [$domain, $image->id]) }}"
                                  method="post">
                                @csrf
                                <a onclick="document.getElementById('{{$image->image_name }}').submit()">
                                    <i class="far fa-trash-alt text-red-500"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        @else

            <div class="-mt-5 flex flex-col justify-center items-center w-full"
                 style="height: 90vh;">
                <div class="bg-white px-5 py-8 shadow-lg">
                    <div class="w-full flex justify-center items-center mb-3">
                        <i class="far fa-eye-slash fa-4x text-blue-darker"></i>
                    </div>
                    <p class="w-full text-lg text-center font-semibold">No Images found! :(</p>
                    <p class="w-full px-5 text-center">Looks like you haven't made an image.</p>
                </div>

            </div>

        @endif

    </div>



@endsection



