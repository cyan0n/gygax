@extends('layouts.master')

@section('title', 'Maps')

@section('body')
	<section class="section">
		<div class="container">
			{!! Form::open(['action' => ['MapController@create', $module->id]]) !!}
				<input type="hidden" name="_method" value="GET">
				{!! Form::submit('New Map', ['class' => 'button is-primary']) !!}
			{!! Form::Close() !!}
		</div>
		<div class="container">
			@each('map.item', $maps, 'map')
		</div>
	</section>	
@endsection