@extends('inc.app')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listings <span class="float-right"><a href="/home" class="btn btn-info">Back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<form action="/listings" method="POST">
    @csrf
<div class="mb-3">
  <label for="user_id" class="form-label">ID</label>
  <input type="text" class="form-control" value="{{old('content')}}"  id="user_id" name="user_id" placeholder="Enter ID">
</div>
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" id="name" value="{{old('content')}}" name="name" placeholder="Name">
</div>
<div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <input type="text" class="form-control" id="address" name="address" value="{{old('content')}}" placeholder="Address">
</div>
<div class="mb-3">
  <label for="website" class="form-label">Website</label>
  <input type="text" class="form-control" id="website" name="website" value="{{old('content')}}" placeholder="Website">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{old('content')}}" placeholder="example@gmail.com">
  </div>
<div class="mb-3">
  <label for="name" class="form-label">Phone</label>
  <input type="text" class="form-control" id="phone" value="{{old('content')}}" name="phone" placeholder="Phone">
</div>
<div class="mb-3">
  <label for="bio" class="form-label">Bio</label>
  <input type="text" class="form-control" id="bio" value="{{old('content')}}" name="bio" placeholder="Bio">
</div>
<div class="mb-3">
 <button class="btn btn-info btn-lg" type="submit" value="{{old('content')}}" name="submit" id="submit">Add</button>
</div>
</div>

               </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection