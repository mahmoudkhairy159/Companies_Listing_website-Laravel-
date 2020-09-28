@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                     Dashboard
                     <span ><a href="{{ route('listings.create') }}" class="float-right border border-success bg-warning font-weight-bold p-1" style="color: black"> Add listing</a></span>
                </div>

                <div class="card-body">

                    <h3>Your Listings:</h3>
                    @if (count($listings)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th> </th>
                            <th></th>
                        </tr>



                    @foreach ( $listings as $listing)
                    <tr>
                        <td> <a href="{{ route('listings.show', $listing->id) }}">{{ $listing->name }}</a> </td>
                        <td><a href="{{ route('listings.edit',$listing->id) }}" class="btn btn-default border border-success bg-warning font-weight-bold p-1">Edit</a></td>
                        <td>
                            <form
                            action="{{route('listings.destroy', $listing->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                                <button class="btn btn-default border border-success bg-warning font-weight-bold p-1">
                                  Delete
                              </button>
                            </form>
                        </td>


                    </tr>


                    @endforeach
                    </table>
                    @else
                        <h5>No Listings Found</h5>

                @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
