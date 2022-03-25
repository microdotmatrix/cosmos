@extends('layouts.app')

@section('content')

<div class="hero" data-lg-parallax="child" data-lg-parallax-amplitude="1.5">

	<img src='http://unsplash.it/1600/1200?random&gravity=center' alt=''/>

	<div class="hero__content">
		<h1>Behold...</h1>
		<h2 class="h2-subtitle">Pain itself.</h2>

		<!-- Slider main container -->
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide">Slide 1</div>
			<div class="swiper-slide">Slide 2</div>
			<div class="swiper-slide">Slide 3</div>
			...
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			<!-- If we need scrollbar -->
			<div class="swiper-scrollbar"></div>
		</div>
	</div>


</div>

<div class="container">

	<h2>FTW Technologies</h2>
   <p>This is my body content.</p>
	<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil unde nostrum reiciendis accusamus eos, quas voluptate obcaecati similique nobis omnis illum facere odit cumque temporibus earum quibusdam dolorem velit sint!</p>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque rerum velit adipisci mollitia dolorem alias voluptas possimus, tempora modi repellat molestias nam. Delectus ducimus eveniet fugiat eum? Harum, nihil vitae? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod repudiandae corrupti porro maxime. Similique sit ducimus aliquam labore! Porro laborum inventore omnis enim odio? Porro dolores quod quibusdam magnam qui.</p>

</div>

@endsection

