@php
    $menus = getMenu();
@endphp

<span id="top"></span>
<div id="nav_fixed_bottom" class="nav-fixed-bottom">
    <a href="#top" title="Move to top"><div class="nav-move-top">&#10224;</div></a>
</div>

<nav class="bg-black text-white h-16 fixed w-full">
    <div class="flex flex-wrap items-center justify-between h-full body-margin">
        <div class="flex items-center lg:order-2">
            <button data-collapse-toggle="mobile-menu-2" type="button"
				class="inline-flex items-center p-2 ml-1 text-sm rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
				aria-controls="mobile-menu-2" aria-expanded="true">
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
						clip-rule="evenodd"></path>
				</svg>
			</button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex bg-black flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
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

<div class="site-title-container">
    <a class="site-title" href="{{ homeUrl() }}">{{ settings('r', 'general.name') }}</a>
</div>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
