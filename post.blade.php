<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', settings('r', 'general.locale')) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css', 1) }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js', 1) }}" defer></script>
        {!! postHead($post) !!}
        {!!customizedStyles()!!}
        {!! getHead() !!}
    </head>

    <body>
        {!! startBody() !!}
        <div class="body-bg flex flex-col gap-16">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16 body-margin">
                {{-- Main section --}}
                <div class="main-content">
                    <div class="flex flex-wrap gap-16 justify-between">
                        {{-- Post content --}}
                        <div class="single-post-content">
                            @include('front.parts.post-content')
                        </div>
                    </div>

                    {{-- Sidebar --}}
                    <div class="sidebar">
                        @include('front.parts.sidebar')
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div>
                @include('front.parts.footer')
            </div>
        </div>
        {!! endBody() !!}
    </body>
</html>
