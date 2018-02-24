@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>Recent Products</h2>
		<hr />
		<div class="row">
		@foreach ($products as $product)
			<div class="col-md-3">
				<div class="product-detail-grid">
					<img style="width: 100%" src="http://via.placeholder.com/350x350" />
					<h3>{{ $product->name }}</h3>
					<p>{{ $product->description }}</p>
					<p>Listed At: {{ $product->created_at }}</p>

					<p>Bid Price: {{ $product->start_price }}</p>
					<p>Buy Now Price: {{ $product->buy_now_price }}</p>
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection