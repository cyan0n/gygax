@extends('layouts.master')

@section('title', 'New Module')

@section('body')
	{!! Form::open(['action' => 'ModuleController@store']) !!}
		{!! Form::label('name', 'Module Name') !!}
		{!! Form::text('name') !!}
		{!! Form::submit('Create') !!}
	{!! Form::close() !!}
@endsection