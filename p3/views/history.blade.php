@extends('templates/master')

@section('title')
Round History
@endsection

@section('content')
<div class='center'>
    <h3>Round History</h3>
    <h4><a href='/'>← Home</a></h4>
    <ul>
        @foreach ($rounds as $round)
        <li><a test='round-link' href='/round?id={{ $round['id']}}'>{{$round['timestamp']}}</a></li>
        @endforeach
    </ul>
</div>
@endsection