@php
$widgets = loadWidgets('right-sidebar');
$defaults = getThemeDefaults();
@endphp

<div class="sidebar-container">
    <div class="sticky top-32">
        <div class="flex flex-col gap-8 text-sm">
            <div class="flex flex-col gap-4 text-center">
                <div class="sidebar-widget-title">About {{settings('r', 'general.name')}}</div>
                <span class="sidebar-widget-body">{!! $defaults['about'] !!}</span>
            </div>
        @if (!empty($widgets))
            @foreach ($widgets as $widget)
                <div class="flex flex-col gap-4 text-center">
                    <div class="sidebar-widget-title">
                        {{ getWidgetTitle('right-sidebar', $widget->name) }}
                    </div>
                    <div class="sidebar-widget-body">
                        {!! getWidgetBody($widget) !!}
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
</div>
