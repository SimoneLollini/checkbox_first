@extends ('layouts.app')

<form action="{{route('object_element.store')}}" method="POST">
    @csrf

    <div class="container mt-5">

        <div class="wrapper py-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="wrapper py-3">
            <label for="customer">Cliente</label>
            <input type="text" name="customer" id="customer">
        </div>

        <input type="submit" value="invia">
    </div>

</form>