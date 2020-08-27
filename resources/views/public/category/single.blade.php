@extends('public.layouts.master')

@section('seo')
@endsection

@section('title')
@endsection

{{-- main content --}}
@section('content')
	<div class="container margin_60_35">
		
		<div class="main_title text-left ">
			<h1 class="section_title" style="font-size: 25px; text-transform: capitalize;">{{$category->name}}</h1>
		</div>
		<div class="row small-gutters">
			@foreach($products as $product)
			<div class="col-6 col-md-4 col-xl-3">
				<div class="grid_item single-product">
					<figure>
						
						
						<a href="{{route('website.single_product',['slug' => $product->slug])}}">
							<img class="img-fluid lazy" src="{{URL::asset('assets/img/products')}}/{{$product->image}}" data-src="{{URL::asset('assets/img/products/')}}/{{$product->image}}" alt="{{$product->name}}">
							<img class="img-fluid lazy" src="{{URL::asset('assets/img/products')}}/{{$product->image}}" data-src="{{URL::asset('assets/img/products/')}}/{{$product->image}}" alt="{{$product->name}}">
						</a>
						
					</figure>
					<div class="rating">

						@for($star=1;$star<=$product->rating;$star++)
						<i style="color: #ff9800;" class="fa fa-star" aria-hidden="true"></i>
						@endfor

						@for($star=1;$star<=(5 - $product->rating);$star++)
						<i style="" class="fa fa-star" aria-hidden="true"></i>
						@endfor
						
						
					</div>
					<a href="{{route('website.single_product',['slug' => $product->slug])}}">
						<h3 class="text-capitalize">{{$product->name}}</h3>
					</a>
					<div class="price_box">
						<span class="new_price">৳ {{$product->price}}</span>
						{{-- <span class="old_price">$60.00</span> --}}
					</div>
					
				</div>
				<!-- /grid_item -->
			</div>
			@endforeach
			<!-- /col -->
		</div>
		<!-- /row -->

		<div class="">
			{{ $products->links() }}
		</div>

	</div>
@endsection
{{-- end main content --}}

@section('footer')
@endsection
