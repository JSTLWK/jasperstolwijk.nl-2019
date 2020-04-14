@extends('sharex.components.dashboard')

@section('title', 'Register ShareX Screenshots')

@section('content')
    <div id="docs" class="h-screen">
        <sharex-docs news-endpoint-url="{{ route('api.sharex.latestnews') }}"/>
    </div>

    <script type="text/javascript"
            src="{{ asset('js/docs.js') }}"></script>
@endsection
