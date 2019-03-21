@extends('layout.app')

@section('content')
    <h1>Home</h1>
@endsection 

@section('sidebar')
    @parent
    <P>This is appended to the sidebar </p>
@endsection  
 