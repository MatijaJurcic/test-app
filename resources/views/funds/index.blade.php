<x-main-guest-layout>
@foreach($funds as $fund)
<div>
{{ $fund['id'] }} {{ $fund['name'] }}
</div>
@endforeach
    <div>
    {{$funds->links()}}
    </div>
</x-main-guest-layout>
