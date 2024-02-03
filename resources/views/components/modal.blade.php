@props(['name','title'])
<div
    x-data = "{ show: false, name: '{{ $name }}' }"
    x-show = "show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    style="display:none;"
    class="fixed z-50 inset-0"
    x-transition.duration.250ms
    >
    {{--  Gray Background--}}
    <div x-on:click="show=false" class="fixed inset-0 bg-gray-500 opacity-20"></div>
    {{--  Modal Body--}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl h-40 bg-clip-padding" style="max-height: 500px">
        @if(isset($title))
            <div class="py-3 flex items-center justify-center">
                {{ $title }}
                <button x-on:click="$dispatch('close-modal')" class="btn">Close Modal</button>
            </div>
         @endif
        <div class="text-blue-700" >
{{--            {{ $body }}--}}
        </div>

    </div>
</div>
