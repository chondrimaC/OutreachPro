@extends('layouts/app')

@section('content')
  <h1>Sites</h1>

  @if (count($sites) > 0)
    @foreach ($sites as $site)
      <div class="card bg-light m-3 p-3">
        <div class="card-block">
          <h3 class="card-title"><a href="{{ url('/sites/' . $site->id) }}"> {{ $site->url }} </a></h3>
          <small class="card-text"><b>Admin :</b>  {{ $site->admin }}</small> &nbsp;
          <small class="card-text"><b>Visitor : </b>  {{ $site->visitor_number }}</small>

        </div>
      </div>
    @endforeach

    {{-- {{$posts->links()}} --}}

  @else
    <p>
      No site found!
    </p>

  @endif

@endsection
