@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Search by Track Name</h1>
    <form  class =" d-flex align-items-center justify-content-center flex-column" action="{{url ('/search-tracks')}}" method="post">
      {{ csrf_field() }}
        <label for="name">Track Name:</label>
        <input type="text" name="name" id="name" required/>
        
            <div class="my-3 text-center">
            <label for="resultsRange" class="form-label ">Max Number of Results:</label>
            <output>10</output>
            <input type="range" min="1" max="20" value="10" step="1" class="form-range" name="resultsRange" id="resultsRange" oninput="this.previousElementSibling.value = this.value">
            </div>
 
        <input type="submit" class="btn btn-primary" value="Search" />
    </form>
</div>
@stop