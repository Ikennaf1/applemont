<?php
use App\Models\User;
use App\Models\Post;
exportAssets();
$featuredPost = themeGetFeaturedPost();
$featuredPost = $featuredPost === 'recent'
    ? $posts[0]
    : Post::find($featuredPost);
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="{{ settings('r', 'general.theme_color')}}" >
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css') }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js') }}" defer></script>
        <title>{{ settings('r', "general.name", "Nidavel") }} | Home</title>
        {!!customizedStyles()!!}
        {!! getHead() !!}
    </head>

    <body>
        <div class="body-bg">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                {{-- Main section --}}
                <div class="body-margin">
                    <div class="flex flex-wrap gap-16 justify-between">
                        {{-- Header --}}
                        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-32 bg-cover bg-center overflow-hidden w-full h-full"
                         style="background-image: url('{!! asset('/uploads/' . $featuredPost->featured_image) !!}')">
                            <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
                                <div class="flex flex-col gap-4 mb-16 sm:text-center sm:mb-0 text-white">
                                    <span class="text-shadow text-xs pb-4">{{User::find($featuredPost->user_id)->name}}</span>
                                    <span class="text-shadow font-bold">
                                        <span class="border-t border-b border-white w-auto py-4 tracking-wide">
                                            {{$featuredPost->title}}
                                        </span>
                                    </span>
                                    <span class="text-shadow text-sm pt-4">{{date('F jS, Y', strtotime($featuredPost->updated_at))}}</span>
                                    <span class="text-shadow"><button class="px-4 py-2 border border-white font-bold cursor-pointer text-sm uppercase hover:text-black hover:bg-white">Read more</button></span>
                                </div>
                            </div>
                        </div>
                        {{-- Post content --}}
                        <div class="main-content">
                            <div class="posts">
                                <div class="posts-list-container">
                                    @foreach ($posts as $post)
                                    <div class="post-card">
                                        <img src="<?= $post->featured_image != null
                                         ? asset('/uploads/' . $post->featured_image)
                                         : asset('/uploads/images/post_default_image.png') ?>"
                                         class="object-cover w-full h-40"
                                         alt="" />
                                        <div class="p-5 post-details">
                                            <a href="{{ exportLink("/posts/$post->link") }}" aria-label="Category" title="{{ $post->title }}" class="post-card-title">{{ $post->title }}</a>
                                            <p class="mb-3 text-xs tracking-wide">
                                                {{-- <a href="/" class="post-card-category" aria-label="Category" title="traveling">{{ !empty($post->category) ? $post->category : 'No category' }}</a> --}}
                                                <span class="post-card-category" aria-label="Category" title="traveling">{{ !empty($post->category) ? $post->category : 'No category' }}</span>
                                                <span class="text-gray-600">— {{ date('jS F Y', strtotime($post->updated_at)) }}</span>
                                            </p>
                                            <p class="post-card-desc">
                                                {{ $post->description != null ? substr($post->description, 0, 75) : substr($post->content, 0, 102) }}
                                            </p>
                                            <a href="{{ exportLink("/posts/$post->link") }}" aria-label="" class="post-card-cta">Learn more</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- Sidebar --}}
                            <div class="sidebar">
                                @include('front.parts.sidebar')
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
