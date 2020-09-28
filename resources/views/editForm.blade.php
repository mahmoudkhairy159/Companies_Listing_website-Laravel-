@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bolder"><h3>Edit Listing</h3></div>
                <form action="{{ route('listings.update',$listing->id ) }}" method="post">
                    @method("put")
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" value="{{ $listing->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $listing->email}}">
                     </div>
                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $listing->address}}">
                      </div>
                      <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website" value="{{ $listing->website}}">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" value="{{ $listing->phone}}">
                      </div>
                      <div class="form-group">
                        <label for="Bio">bio</label>
                        <textarea class="form-control" name="bio" rows="4" placeholder="{{ $listing->bio}}" ></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>


            </div>
        </div>
    </div>
</div>
@endsection
