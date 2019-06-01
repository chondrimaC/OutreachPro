@extends('layouts/app')

@section('content')
    <h1>Edit Site</h1>

    <form method="POST" action="{{ action('SitesController@update', $sites->id)}}">
      @method('PATCH')
      {{ csrf_field() }}

      <div class="form-group">value
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" value="{{ $sites->url}}" required/>
      </div>
      <div class="form-group">
        <label for="admin">Admin</label>
        <input type="text" name="admin" class="form-control" value="{{ $sites->admin}}" required/>
      </div>
      <div class="form-group">
        <label for="admin_email">Admin Email</label>
        <input type="email" name="admin_email" class="form-control" value="{{ $sites->admin_email}}" required/>
      </div>
      <div class="form-group">
        <label for="alt_email">Alternate Email</label>
        <input type="email" name="alt_email" class="form-control" value="{{ $sites->admin_alternate_email}}" required/>
      </div>
      <div class="form-group">
        <label for="admin_auth">Admin Authority</label>
        <input type="text" name="admin_auth" class="form-control" value="{{ $sites->admin_authority}}" required/>
      </div>
      <div class="form-group">
        <label for="visitor_num">Number of Visitor</label>
        <input type="number" name="visitor_num" class="form-control" value="{{ $sites->visitor_number}}" required/>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $sites->price}}" required/>
      </div>
      <div style="margin-bottom:1em;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>




@endsection
