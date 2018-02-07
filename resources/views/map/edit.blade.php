@extends('layouts.master')

@section('title', 'Edit Map')

@section('body')
	<h1>{{ $map->name }}</h1>
	<img src="{{ $map->image() }}" alt="">
@endsection