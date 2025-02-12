@props(['active' => false, 'type' => 'link'])

{{--Phần comment là php thuần, bên dưới đó là sau khi sử dụng sugar syntax của blade framework?--}}
{{--<?php if ($type = 'a') : ?>--}}
{{--<a class="{{$active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"--}}
{{--   aria-current="{{$active ? "page" : "false"}} "--}}
{{--    {{ $attributes }}--}}
{{-->--}}
{{--    {{ $slot }}--}}
{{--</a>--}}
{{--<?php else : ?>--}}
{{--<button--}}
{{--    class="{{$active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"--}}
{{--    {{ $attributes }}--}}
{{-->--}}
{{--    {{ $slot }}--}}
{{--</button>--}}
{{--<?php endif; ?>--}}


{{--@if ($type === 'link')--}}
<a class="{{$active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{$active ? "page" : "false"}} "
        {{ $attributes }}
>
    {{ $slot }}
</a>

{{--@else--}}
{{--    <button--}}
{{--            class="{{$active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"--}}
{{--            {{ $attributes }}--}}
{{--    >--}}
{{--        {{ $slot }}--}}
{{--    </button>--}}
{{--@endif--}}
