@extends ('layouts.app')

@section ('content')
	<div class="container">
		<h1>List an Item</h1>
		{{ Form::open( ['url' => '/listing']) }}
		<h4>Select your product category</h4>
		{{ Form::select('category', array('general' => 'General', 'car' => 'Cars', 'property' => 'Property')) }}
		<div style="height:50px"></div>
		<h4>Details of your product</h4>
		<div class="form-group">
			{{ Form::label('name', 'Product Name') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<div class="form-group">
			{{ Form::label('description', 'Product Description') }}
			{{ Form::textarea('description', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<h4>Pricing & Duration</h4>
		<div class="form-group">
			{{ Form::label('start_price', 'Start Price') }}
			{{ Form::text('start_price', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<div class="form-group">
			{{ Form::label('reserve_price', 'Reserve Price') }}
			{{ Form::text('reserve_price', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<div class="form-group">
			{{ Form::label('buy_now', 'Buy Now Price') }}
			{{ Form::text('buy_now', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<div class="form-group">
			{{ Form::label('end_date', 'End Date') }}
			{{ Form::date('end_date', null, ['class' => 'form-control', 'required' => true]) }}
		</div>
		<hr />
		<div class="form-group">
			{{ Form::submit('List your product now', ['class' => 'btn btn-primary']) }}
		</div>
		{{ Form::close() }}
	</div>
@endsection