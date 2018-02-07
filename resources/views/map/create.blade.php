@extends('layouts.master')

@section('title', 'New Map')

@section('body')
	{!! Form::open(['action' => ['MapController@store', $module->id], 'files' => true]) !!}
		{!! Form::label('name', 'Map Name') !!}
		{!! Form::text('name') !!}
		{!! Form::file('map') !!}
		{!! Form::submit('Create') !!}
	{!! Form::close() !!}
@endsection