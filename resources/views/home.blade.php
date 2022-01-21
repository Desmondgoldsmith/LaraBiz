@extends('inc.app')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span class="float-right"><a href="listings/create" class="btn btn-dark">Create Listings</a></span>  </div>
                 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @if(count($listings))
                    <table class="table table-striped">
                      <tr>
                          <th>Company NAME</th>
                      </tr>
                      @foreach($listings as $listings)
                       <tr>
                           <td>{{$listings->name}}</td>
                       </tr>
                      @endforeach
                    </table>
                  @else
                     <p>You dont have any listings left!</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
