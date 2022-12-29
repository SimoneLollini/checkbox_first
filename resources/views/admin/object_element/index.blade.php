@extends ('layouts.app')

<div class="container vh-100">

    <a href="{{route('object_element.create')}}" class="btn btn-dark my-4">
        Nuovo
    </a>

    <div class="table-responsive">
        <table class="table table-hover table-borderless table-dark align-middle">
            <thead>
                <tr>
                    <th scope="col">Oggetto</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tools</th>
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
                    <th class="bg-light">
                        <a href="{{route('object_element.edit', $ObjectEl)}} " class="btn btn-warning">
                            Edit
                        </a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>