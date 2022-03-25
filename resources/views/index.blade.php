@extends('layouts.app')

@section('content')

<!-- Slider main container -->
<div class="swiper">
	<!-- Parallax background element -->
	<div style="background-image:url('http://unsplash.it/1600/1200?gravity=center')" data-speed="-0.1" class="jarallax parallax-bg"></div>
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<div class="swiper-slide" data-flex="row">
			<div class="slide__box" data-column="6">
				<h1 data-swiper-parallax="-3000" data-swiper-parallax-opacity="0">Slide 1</h1>
				<h4 data-swiper-parallax="2000" data-swiper-parallax-opacity="0">Subtitle</h4>
				<div class="slide__text" data-swiper-parallax="-1000" data-swiper-parallax-opacity="0">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
					</p>
				</div>
			</div>
			<div class="slide__image jarallax" data-column="6" data-speed="-0.45">
				<img src='http://unsplash.it/800/600?gravity=center' alt='Alt Text' class="jarallax-img" />
			</div>
		</div>
		<div class="swiper-slide">
			<div class="title" data-swiper-parallax="-1000">Slide 2</div>
			<div class="subtitle" data-swiper-parallax="-2000">Subtitle</div>
			<div class="text" data-swiper-parallax="-9000">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
				</p>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="title" data-swiper-parallax="-300">Slide 3</div>
			<div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
			<div class="text" data-swiper-parallax="-100">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
				</p>
			</div>
		</div>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>

	<div class="hero">

	</div>

	<div class="container">

		<h2>FTW Technologies</h2>
		<p>This is my body content.</p>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil unde nostrum reiciendis accusamus eos, quas voluptate obcaecati similique nobis omnis illum facere odit cumque temporibus earum quibusdam dolorem velit sint!</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque rerum velit adipisci mollitia dolorem alias voluptas possimus, tempora modi repellat molestias nam. Delectus ducimus eveniet fugiat eum? Harum, nihil vitae? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod repudiandae corrupti porro maxime. Similique sit ducimus aliquam labore! Porro laborum inventore omnis enim odio? Porro dolores quod quibusdam magnam qui.</p>

	</div>

	@endsection

