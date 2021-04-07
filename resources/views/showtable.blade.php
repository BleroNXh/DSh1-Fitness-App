@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
               Gym Members List
            </div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>firstName</th>
        <th>secondName</th>
        <th>birthDate</th>
        <th>expireDate</th>
        <th>price</th>
        <th>Operation</th>
        <th>Operation</th>
    </tr>
    @foreach($pizzas as $pizza)
        <tr>
        <td>{{$pizza['id']}}</td>
        <td>{{$pizza['firstName']}}</td>
        <td>{{$pizza['secondName']}}</td>
        <td>{{$pizza['birthDate']}}</td>
        <td>{{$pizza['expireDate']}}</td>
        <td>{{$pizza['price']}}</td>

            <td><a href={{"delete/".$pizza['id']}}>Delete</a></td>
            <td><a href={{"edit/".$pizza['id']}}>Edit</a></td>
        </tr>
    @endforeach
</table>

{{--<span>--}}
{{--   {{$pizza->links()}}--}}
{{--</span>--}}
{{--<style>--}}
{{--    .w-6{--}}
{{--        display: none--}}
{{--    }--}}
{{--</style>--}}

</div>
</div>
@endsection

