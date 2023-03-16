@php 

  $categories = App\Models\Category::all();
  $portfolios = App\Models\Portfolio::where('status', true) -> take(8) -> get();
@endphp 

<section class="portfolio overflow-hidden">
	<div class="container">
		<div class="row">
			<!-- Portfolio Section Heading -->
			<div class="portfolio__heading text-center col-12">
				<h1 class="portfolio__title fw-bold mb-5">Our Portfolio</h1>
			</div>
			<!-- Portfolio Navigation Buttons List -->
			<div class="col-12">
				<ul class="portfolio__nav nav justify-content-center mb-4">
					<li class="nav-item">
						<button class="portfolio__nav__btn position-relative bg-transparent border-0 active" data-filter="*">All</button>
					</li>
                    @foreach ($categories as $cat )
                        <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".{{ $cat -> slug}}">{{ $cat -> name }}</button>
                        </li>
                    @endforeach
				
				</ul>
			</div>
		</div>
		<!-- Portfolio Cards Container -->
		<div class="row grid">
            @foreach ($portfolios as $data )
                <div class="grid-item col-lg-4 col-sm-6 @foreach ($data -> category as $cats ) {{ $cats -> slug }}@endforeach">
                    <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                        <img src="{{ url('img/' . $data -> featured ) }}" alt="Random Image" class="w-100">
                    </a>
                </div>
            @endforeach
			
		</div>
	</div>
</section>