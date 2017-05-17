@extends('default')





@section('content')
<h1>Bravo !</h1>

<a class="btn btn-primary" href={{ action('LinksController@show')}}>
    <!--/r/{{$link->id}} -->
    
    {{ action('LinksController@show')}}
</a>
@stop