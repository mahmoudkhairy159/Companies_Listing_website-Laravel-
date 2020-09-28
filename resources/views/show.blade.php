@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <a  class="float-right border border-success bg-warning font-weight-bold p-1" style="color: black" href="{{ route('listings.index') }}">Go Back</a>
    </div>
    <h2 class="text-center"> {{$listing->name  }}</h2>


    <table class="table table-striped">


        <tr>
            <td class="bg-primary">Email:</td>
            <td>{{$listing->email }}</td>
        </tr>
        <tr>
            <td class="bg-primary">Website:</td>
            <td>{{$listing->website }}</td>
        </tr>
        <tr>
            <td class="bg-primary">Address:</td>
            <td>{{$listing->address }}</td>
        </tr>
        <tr>
            <td class="bg-primary">Phone:</td>
            <td>{{$listing->phone }}</td>
        </tr>
        <tr>
            <td class="bg-primary">Bio:</td>
            <td>{{$listing->bio  }}</td>
        </tr>

    </table>
</div>


@endsection
