@extends('layouts.master')

@section('title', 'Modules')

@section('body')
	<section class="section">
		<div class="container">
			{!! Form::open(['action' => 'ModuleController@create']) !!}
				<input type="hidden" name="_method" value="GET">
				{!! Form::submit('New Module', ['class' => 'button is-primary']) !!}
			{!! Form::Close() !!}
		</div>
		<div class="container">
			@each('module.item', $modules, 'module')
		</div>
	</section>	
@endsection