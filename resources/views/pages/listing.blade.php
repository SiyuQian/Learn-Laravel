@extends ('layouts.app')

@section ('content')
<div class="container">
	<h2>My Listings</h2>
	<div class="form-group">
		<a href="{{ url('/listing/create') }}">
			{{ Form::button('List an item', ['class' => 'btn btn-large btn-primary']) }}
		</a>
	</div>
	<hr />
	<table id="listing-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Listing id</th>
				<th>Product Name</th>
				<th>Bid Price</th>
				<th>Listed At</th>
				<th>End At</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($listings as $listing)
			<tr>
                <td>{{ $listing->id }}</td>
                <td>{{ $listing->product->name }}</td>
                <td>{{ $listing->product->start_price }}</td>
                <td>{{ $listing->product->created_at }}</td>
                <td>{{ $listing->end_date }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</div>
@endsection