@extends ('layouts.app')

@section('content')
<div class="container bg-dark text-white">
    <div>
        {{$objectElement->title}}
    </div>
    <div>
        {{$objectElement->customer}}
    </div>
    @if ($objectElement->status)
    <div class="bg-success">
        Fatto
    </div>
    @else
    <div class="bg-danger">
        Non fatto
    </div>
    @endif
    <div>
        {{$objectElement->description}}
    </div>
    <div>
        {{$objectElement->wheight}} grammi
    </div>
    <div>
        {{$objectElement->phone}}
    </div>
</div>

@endsection