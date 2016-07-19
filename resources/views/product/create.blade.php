@extends('home')

@section('body')
	<section id="create_product">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
					@if(count($errors)>0)
					<div class="error-p">
						<ul>
							@foreach($errors->all() as $err)
								<li>{{$err}}</li>
							@endforeach
						</ul>
					</div>
					@endif
					{!! 
						Form::open([
							'url' => '/product/store',
							'type' => 'POST',
							'autocomplete' => 'off'
						]) 
					!!}
						<legend>Add Product in Stock</legend>
						 {!! csrf_field() !!} 
						<div class="form-group">
							<label for="name_p">Product</label>
							<input type="text" class="form-control" id="name_p" name="name_p" placeholder="Input product to add stock...">
						</div>
						<div class="form-group">
							<label for="desc_p">Description</label>
							<textarea type="text" rows="5" class="form-control" id="desc_p" name="desc_p" placeholder="Input description product..."></textarea>
						</div>
						
						<div class="form-group">
							<label for="price_p">Price</label>
							<input type="text" class="form-control number_dot" id="price_p" name="price_p" placeholder="Input cost of product...">
						</div>
						
						<div class="form-group">
							<label for="stock_p">In Stock</label>
							<input type="text" class="form-control" id="stock_p" name="stock_p" placeholder="Input quantity in stock...">
						</div>
						<div class="form-group">
							<label for="active_p">Status</label>
							<label for="active_on"><input type="radio" name="status_p" value="1" id="active_on" checked="true" class="">Enable</label>
							<label for="active_off"><input type="radio" name="status_p" value="0" id="active_off" class="">Disable</label>
						</div>
						<button class="btn btn-primary submit-product">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>	
@stop
