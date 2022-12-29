@extends ('layouts.app')
<form method="POST" action="{{ route('object_element.update',$objectElement->id )}}">

    @csrf

    @method('PUT')

    <div class="container mt-5">

        <div class="wrapper py-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$objectElement->title}}">
        </div>

        <div class=" wrapper py-3">
            <label for="customer">Cliente</label>
            <input type="text" name="customer" id="customer" value="{{$objectElement->customer}}">
        </div>

        <div class="wrapper py-3">
            <input type="checkbox" name="status" id="status">
            <label for="status">Status</label>
        </div>

        <input type="submit" value="invia">

    </div>

</form>