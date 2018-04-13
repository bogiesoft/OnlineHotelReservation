@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
    }
</style>
<div class="container">
<br>
<a class="btn btn-primary" href="{{url('/')}}">Home Page</a> 
<div class="row">
<div class="col-sm-12">
<h3 class="text-white">REVIEWS<h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-2">
</div>
@foreach($join as $joins)
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
<strong>{{$joins->firstname}}&nbsp{{$joins->lastname}}</strong> <span class="text-muted">&nbsp&nbsp{{$joins->created_at}}</span>
</div>
<div class="panel-body">
{{$joins->feedback}}
</div>
</div>
</div>
@endforeach
<a class="btn btn-default" href="{{route('feedback')}}">Write a feedback</a>
</div><!-- /row -->

</div><!-- /container -->
@endsection