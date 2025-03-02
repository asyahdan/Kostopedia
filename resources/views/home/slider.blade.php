<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a></p>
				</div>
			</div>
			<div class="row">

				<div class="col-12">


					<div class="property-slider-wrap">



						<div class="property-slider">
							
						@foreach($data as $product)
    						<div class="property-item">
        						<a href="{{ route('details', ['id' => $product->id]) }}" class="img">
            						<img src="/products/{{ $product->image }}" alt="Image" class="img-fluid">
        						</a>
        						<div class="property-content">
            						<div class="price mb-2"><span>{{ $product->price }}</span></div>
            						<div>
                						<span class="d-block mb-2 text-black-50">{{ $product->category }}</span>
                						<span class="city d-block mb-3">{{ $product->title }}</span>
                						<div class="specs d-flex mb-4">
                    						<span class="d-block d-flex align-items-center me-3">
                        						<span class="icon-bed me-2"></span>
                        						<span class="caption">{{ $product->beds }} beds</span>
                    						</span>
                    						<span class="d-block d-flex align-items-center">
                        						<span class="icon-bath me-2"></span>
                        						<span class="caption">{{ $product->baths }} baths</span>
                    						</span>
                						</div>
                						<a href="{{ route('details', ['id' => $product->id]) }}" class="btn btn-primary py-2 px-3">See details</a>
            						</div>
        						</div>
    						</div> <!-- .item -->
						@endforeach


						</div>


						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>