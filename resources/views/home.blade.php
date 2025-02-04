@extends('layout.header-footer')

@section('title')
	DonaZee
@endsection

@section('content')

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Bantuan
							<span>Hewan Satwa</span>
						</h3>
						<p>Kami membutuhkan kurang lebih
							<span>Rp 35.000.000</span> Dana </p>
						<!-- <a class="button2" href="">Donasi Sekarang</a> -->
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Peduli
							<span>Anak Yatim Piatu</span>
						</h3>
						<p>Kami membutuhkan lebih dari 
							<span>500.000</span> Kebutuhan Sehari-hari</p>
						<!-- <a class="button2" href="">Donasi Sekarang</a> -->
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Bantuan
							<span>Sembako dan <br> Alat Medis</span>
						</h3>
						<p>Kami membutuhkan lebih dari
							<span>1.000.000</span> Kebutuhan Pokok  
						</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<div class="ads-grid">
		<div class="featured-section" id="projects">
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-users" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>1</h3>
						<h4>Donatur Terdaftar</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-money" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Rp 0</h3> 
						<h4>Dana Yang Terkumpul</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-th" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>3</h3>
						<h4>Campaign Donasi</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->

			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Campaign Donasi<span class="heading-style"></span></h3>
			</div>

			<!-- campaign -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					@foreach($items as $item)
					<li>
					<div class="w3l-specilamk">
						<div class="card">
							<div class="speioffer-agile">
								<a href="{{ route('donation-detail', $item->id) }}">
									<div class="embed-responsive embed-responsive-16by9">
										<img class="card-img embed-responsive-item" 
										src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" > 
									</div>
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a>{{ $item->title }}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h3>Dibutuhkan Dana Rp {{ $item-> target }}</h3>
									<p>{{ $item-> organization_name }}</p>
								</div>	
							</div>
						</div>
					</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- // campaign -->
	
	
		
			</div>
		</div>
	
@endsection