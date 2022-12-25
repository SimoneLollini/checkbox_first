@extends ('layouts.app')
<div class="container p-5">

    <div class="table-responsive">
        <table class="table table-hover table-borderless table-dark align-middle">
            <thead>
                <tr>
                    <th scope="col">Oggetto</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($objectElements as $ObjectEl)
                <tr>
                    <th scope="row">{{$ObjectEl->title}}</th>
                    <th>{{$ObjectEl->customer}}</th>
                    @if($ObjectEl->status)
                    <th class="bg-success">Fatto!</th>
                    @else
                    <th class="bg-danger">Non fatto!</th>
                    @endif
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>