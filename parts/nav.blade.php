@php
    $menus = getMenu();
@endphp

<span id="top"></span>
<div id="nav_fixed_bottom" class="nav-fixed-bottom">
    <a href="#top" title="Move to top"><div class="nav-move-top">&#10224;</div></a>
</div>

<nav class="nav">
    <div class="body-margin">
        <div class="flex justify-between items-center h-24">
            <div>
                <a href="{{ homeUrl() }}" class="font-bold link text-xl uppercase">{{ settings('r', 'general.name') }}</a>
            </div>

            <div>
                <ul class="menu-bar">
                    @foreach ($menus as $menu)
                    <li class="menu-item">{!! $menu !!}</li>
                    @endforeach
                    <li>
                        <div class="menu-item blinds" id="blinds_container_id"></div>
                    </li>
                </ul>
                <div class="menu-mobile-btn" onclick="handleNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</nav>

<button id="show_nav" class="hidden" type="button" onclick="handleNav()"></button>

<label id="label_nav_collapsed" for="show_nav" class="fixed w-full h-full bg-black z-40 opacity-70 transition duration-300 ease-in-out delay-500"></label>
<div id="nav_collapsed" class="fixed nav-collapse">
    <div class="flex flex-col gap-8">
        <div class="nav-collapsed-header">
            <a class="font-bold text-primary-color" href="{{ homeUrl() }}"><h2>{{ settings('r', 'general.name') }}</h2></a>
            <label class="cursor-pointer" for="show_nav">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" view-box="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>
        </div>

        <ul class="flex flex-col gap-4 items-start">
            @foreach ($menus as $menu)
                <li class="menu-item-mobile">{!! $menu !!}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="h-24"></div>

<nav class="bg-white border-gray-200 h-16">
    <div class="flex flex-wrap items-center justify-between h-full max-w-screen-xl px-4 mx-auto">
        <div class="flex items-center lg:order-2">
            <button data-collapse-toggle="mobile-menu-2" type="button"
				class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
				aria-controls="mobile-menu-2" aria-expanded="true">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
						clip-rule="evenodd"></path>
				</svg>
				{{-- <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
						clip-rule="evenodd"></path>
				</svg> --}}
			</button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                @foreach ($menus as $menu)
                        <li class="menu-item">{!! $menu !!}</li>
                    @endforeach
                    <li class="menu-item">kjhkjsrgb</li>
                    <li class="menu-item">kjhkjsrgb</li>
                    <li class="menu-item">kjhkjsrgb</li>
                <li>
                    <div class="menu-item blinds" id="blinds_container_id"></div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="h-16"></div>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
