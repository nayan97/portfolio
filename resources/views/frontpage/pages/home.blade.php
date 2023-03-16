@extends('frontpage.layouts.app')

@section('frontend-main')

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
					<li class="nav-item">
						<button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".vehicle">Vehicle</button>
					</li>
					<li class="nav-item">
						<button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".animal">Animal</button>
					</li>
					<li class="nav-item">
						<button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".work-station">Work Station</button>
					</li>
				</ul>
			</div>
		</div>
		<!-- Portfolio Cards Container -->
		<div class="row grid">
			<div class="grid-item col-lg-4 col-sm-6 vehicle">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/s4LntDZqEW8/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 animal">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/LSoZprF1HSw/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 vehicle">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/vI9_zv29VnQ/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 road">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/_SaC-shd2n4/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 work-station">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/QeVmJxZOv3k/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 work-station">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/M1qSY_IuF4c/380x500" alt="Random Image" class="w-100">
				</a>
			</div>
		</div>
	</div>
</section>

@endsection