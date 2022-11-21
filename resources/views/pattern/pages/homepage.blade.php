@extends('default')
@section('title')
pattern
@endsection

@section('style')

<link href="{{asset('css/style.css')  }}" rel="stylesheet">

@endsection

@section('content')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="/css/pattern/pattern.css">
@include('pattern.layout.navbar.nav')
@include('pattern.layout.header.header')
@include('pattern.layout.body.body')

@endsection
