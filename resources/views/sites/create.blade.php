@extends('layouts/app')

@section('content')
    <h1>Create Site</h1>

    <form method="POST" action="{{ action('SitesController@store')}}">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="url">URL</label>
        <input type="text" name="url" class="form-control" placeholder="enter url" required/>
      </div>
      <div class="form-group">
        <label for="admin">Admin</label>
        <input type="text" name="admin" class="form-control" placeholder="enter admin name" required/>
      </div>
      <div class="form-group">
        <label for="admin_email">Admin Email</label>
        <input type="email" name="admin_email" class="form-control" placeholder="enter admin email" required/>
      </div>
      <div class="form-group">
        <label for="alt_email">Alternate Email</label>
        <input type="email" name="admin_alternate_email" class="form-control" placeholder="enter alternate name" required/>
      </div>
      <div class="form-group">
        <label for="admin_auth">Admin Authority</label>
        <input type="text" name="admin_auth" class="form-control" placeholder="enter admin authority" required/>
      </div>
      <div class="form-group">
        <label for="visitor_num">Number of Visitor</label>
        <input type="number" name="visitor_num" class="form-control" placeholder="enter visitor number" required/>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" placeholder="enter price" required/>
      </div>
      <div style="margin-bottom:1em;">
        <button type="submit" class="btn btn-primary">Create Site</button>
      </div>

    </form>




@endsection
