<div style="text-align: center">
{{--    <h1>test All</h1>--}}
{{--    <button wire:click="increment">+</button>--}}
{{--    <h1>{{$count}}</h1>--}}
{{--    <button wire:click="decrement">-</button>--}}
    @foreach($data as $key)
        <h1>{{$key}}</h1>
    @endforeach
</div>
