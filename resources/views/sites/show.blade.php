@extends('layouts/app')

@section('content')
  <a href="{{url('/sites')}}" class="btn btn-primary" style="margin-bottom:1em;">Go back</a>
  <div class="jumbotron">
    <h3>{{ $sites->url }}</h3>
    <div>
      <p>
        <b>Admin: </b>{{ $sites->admin }}
      </p>
    </div>
    <div>
      <p>
        <b>Admin Authority: </b>{{ $sites->admin_authority }}
      </p>
    </div>
    <div>
      <p>
        <b>Visitor Number: </b>{{ $sites->visitor_number }}
      </p>
    </div>

  </div>

  <hr />

  <a href="{{ url('/sites/' . $sites->id . '/edit')}}" class="btn btn-primary"> Edit </a>

  <form method="POST" action="{{ action('SitesController@destroy', $sites->id) }}">
  @method('DELETE')
  @csrf
    <div class="form-group">
      <div class="" style="text-align:right;">
        <button type="submit" class="btn btn-danger">Delete Post</button>
      </div>
    </div>
  </form>

@endsection
