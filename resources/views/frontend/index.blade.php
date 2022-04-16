@extends('frontend.layouts.main')

@section('main-container')
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-dark">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->
				<li data-transition="zoomin"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{url('frontend/assets/images/sliders/slide-bg/1.jpg')}}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Welcome To Steak In</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline">We Are Food Masters!</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						>
						<div class="slide--bio text--center">Steak In has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
						data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
						data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_out="x:inherit;y:inherit;" 
						data-start="1250" 
						data-splitin="none" 
						data-splitout="none" 
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded btn--lg" href="#">Book Your Table Now</a>
						</div>
					</div>
				</li>
				
				<!-- slide 2 -->
				<li data-transition="slideoverdown"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{url('frontend/assets/images/sliders/slide-bg/3.jpg')}}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Hello, We Are Granny</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline extend">We Serve Quality Food</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						>
						<div class="slide--bio text--center">Granny is a restaurant, bar and coffee roastery located on Egypt. We have<br>awesome recipes and the most talented chefs in town! </div>
					</div>
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2250,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--primary btn--inverse btn--rounded btn--lg" href="#">View Menu</a>
						</div>
					</div>
				</li>
				
				<!-- slide 3 -->
				<li data-transition="zoomout"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="{{url('frontend/assets/images/sliders/slide-bg/12.jpg')}}" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Steak In Offers You</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline">Fresh & Tasty Meals</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--bio text--center">Steak In has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
					</div>
				</li>

			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>
<!-- banner#4
============================================= -->
<section id="banner4" class="banner banner-2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading heading-1 text--center">
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title">Welcome To Steak In</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Steak In was the first retaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.</p>
                </div>
                <!-- .heading end -->
                <a class="btn btn--secondary btn--bordered btn--rounded mt-30" href="#">Book A Table</a>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img mt-20">
                    <img src="{{url('frontend/assets/images/banners/4.jpg')}}" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img">
                    <img src="{{url('frontend/assets/images/banners/5.jpg')}}" alt="image">
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner4 end -->

<!-- specials #1
============================================= -->
<section id="specials1" class="specials specials-1 menu-simple bg-overlay bg-parallax bg-overlay-dark">
    <div class="bg-section">
        <img src="{{url('frontend/assets/images/background/21.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="dishes-wrapper">
                    <div class="dishes-bordered">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                <div class="heading heading-1 mb-50 text--center">
                                    <p class="heading--subtitle">Delicious Recipes</p>
                                    <h2 class="heading--title">Our Special Dishes</h2>
                                    <div class="divider--shape-4"></div>
                                </div>
                            </div>
                            <!-- .col-md-8 end -->
                        </div>
                        <!-- .row end -->
                        <div class="row">
                            <!-- Dish #1 -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="dish-panel">
                                    <div class="dish--img">
                                        <img src="{{url('frontend/assets/images/menu/dish/1.jpg')}}" alt="dish">
                                    </div>
                                    <div class="dish--content">
                                        <div class="dish--content-bio">
                                            <h3 class="dish--title">Grilled Fillet</h3>
                                            <div class="dish--price">$26.95</div>
                                        </div>
                                        <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil, Pork fillet, ginger.</p>
                                    </div>
                                </div>
                                <!-- .dish end -->
                            </div>
                            <!-- .dish-panel end -->

                            <!-- Dish #2 -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="dish-panel">
                                    <div class="dish--img">
                                        <img src="{{url('frontend/assets/images/menu/dish/2.jpg')}}" alt="dish">
                                    </div>
                                    <div class="dish--content">
                                        <div class="dish--content-bio">
                                            <h3 class="dish--title">Alder Grilled Seafood</h3>
                                            <div class="dish--price">$44.95</div>
                                        </div>
                                        <p class="dish--desc">Monkfish, onion, paella rice,smoked paprika, Monkfish, onion, paella.</p>
                                    </div>
                                </div>
                                <!-- .dish end -->
                            </div>
                            <!-- .dish-panel end -->
                            <!-- Dish #3 -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="dish-panel">
                                    <div class="dish--img">
                                        <img src="{{url('frontend/assets/images/menu/dish/3.jpg')}}" alt="dish">
                                    </div>
                                    <div class="dish--content">
                                        <div class="dish--content-bio">
                                            <h3 class="dish--title">Chicken Breast</h3>
                                            <div class="dish--price">$28.95</div>
                                        </div>
                                        <p class="dish--desc">Paupiette of chicken & beans, blue cheese, rosemary & beans.</p>
                                    </div>
                                </div>
                                <!-- .dish end -->
                            </div>
                            <!-- .dish-panel end -->

                            <!-- Dish #4 -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="dish-panel">
                                    <div class="dish--img">
                                        <img src="{{url('frontend/assets/images/menu/dish/4.jpg')}}" alt="dish">
                                    </div>
                                    <div class="dish--content">
                                        <div class="dish--content-bio">
                                            <h3 class="dish--title">Sea Trout</h3>
                                            <div class="dish--price">$40.95</div>
                                        </div>
                                        <p class="dish--desc">Roast trout, English asparagus, watercress , delicious.</p>
                                    </div>
                                </div>
                                <!-- .dish end -->
                            </div>
                            <!-- .dish-panel end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .dishes-bordered end -->
                </div>
                <!-- .dishes-wrapper end -->
            </div>
            <!-- .col-md-10 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #specials1 end -->

<!-- Menu Board
============================================= -->
<section id="menuBoard" class="pb-90">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Start Eating Better</p>
                    <h2 class="heading--title mb-0">Daily New Fresh Meals</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Steak In has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <div class="container-fluid tabs">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                    <li class="active"><a href="#lunch" data-toggle="tab">Lunch</a></li>
                    <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
                    <li><a href="#dessert" data-toggle="tab">Dessert</a></li>
                    <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade" id="breakfast">
                        <!-- Menu #7
============================================= -->
<div class="menu menu-board text-center">
    <div class="row">
        <div class="dishes-wrapper">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">Chef Selection</div>
                            <span class="dish--price">$24.95</span>
                            <h3 class="dish--title">Grilled American Fillet</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/1.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/specials/popup/1.jpg')}}" alt="dish popup">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Grilled American Fillet</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$34.95</span>
                            <h3 class="dish--title">Grilled Seafood Paella</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/2.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup2"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/26.jpg')}}" alt="dish popup">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/3.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup3"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/27.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Roast Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">new</div>
                            <span class="dish--price">$38.95</span>
                            <h3 class="dish--title">Roast Sea Trout</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/4.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup4"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/28.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$18.95</div>
                                <h3 class="popup--title">Smoked Paprika</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$18.95</span>
                            <h3 class="dish--title">Smoked Paprika</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .row end -->
</div>
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade in active" id="lunch">
                        <!-- Menu #7
============================================= -->
<div class="menu menu-board text-center">
    <div class="row">
        <div class="dishes-wrapper">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">Chef Selection</div>
                            <span class="dish--price">$24.95</span>
                            <h3 class="dish--title">Grilled American Fillet</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/1.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup17"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup17">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/19.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Homemade croissa</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$34.95</span>
                            <h3 class="dish--title">Grilled Seafood Paella</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/2.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup18"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup18">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/20.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/3.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup19"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup19">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/21.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">American Brunch</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">new</div>
                            <span class="dish--price">$38.95</span>
                            <h3 class="dish--title">Roast Sea Trout</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/4.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup20"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup20">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/22.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$18.95</div>
                                <h3 class="popup--title">Cannoli</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$18.95</span>
                            <h3 class="dish--title">Smoked Paprika</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .row end -->
</div>
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="dinner">
                        <!-- Menu #7
============================================= -->
<div class="menu menu-board text-center">
    <div class="row">
        <div class="dishes-wrapper">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">Chef Selection</div>
                            <span class="dish--price">$24.95</span>
                            <h3 class="dish--title">Grilled American Fillet</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/13.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup9"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup9">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/specials/popup/1.jpg')}}" alt="dish popup">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Grilled American Fillet</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$34.95</span>
                            <h3 class="dish--title">Grilled Seafood Paella</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/14.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup10"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup10">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/2.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/15.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup11"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup11">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/3.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Roast Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">new</div>
                            <span class="dish--price">$38.95</span>
                            <h3 class="dish--title">Roast Sea Trout</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/16.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup12"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup12">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/4.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$18.95</div>
                                <h3 class="popup--title">Smoked Paprika</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$18.95</span>
                            <h3 class="dish--title">Smoked Paprika</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .row end -->
</div>
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="dessert">
                        <!-- Menu #7
============================================= -->
<div class="menu menu-board text-center">
    <div class="row">
        <div class="dishes-wrapper">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">Chef Selection</div>
                            <span class="dish--price">$24.95</span>
                            <h3 class="dish--title">Blueberry Sweet Rolls</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/19.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup5"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/29.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Smoked Hummus</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$34.95</span>
                            <h3 class="dish--title">Traditional pancakes</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/20.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup6"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup6">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/30.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$33.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/21.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup7"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup7">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/31.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">new</div>
                            <span class="dish--price">$38.95</span>
                            <h3 class="dish--title">Chocolate Cherry Cake</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/22.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup8"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup8">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/32.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$18.95</span>
                            <h3 class="dish--title">Pain au chocolat</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .row end -->
</div>
                    </div>
                    <!-- .tab-pane end -->
                    <div class="tab-pane fade" id="drinks">
                        <!-- Menu #7
============================================= -->
<div class="menu menu-board text-center">
    <div class="row">
        <div class="dishes-wrapper">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">Chef Selection</div>
                            <span class="dish--price">$24.95</span>
                            <h3 class="dish--title">Grilled American Fillet</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/9.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup13"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup13">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/5.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$13.95</div>
                                <h3 class="popup--title">Smoked Hummus</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$34.95</span>
                            <h3 class="dish--title">Caffè Macchiato</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="dish--img">
                            <div class="divider--shape-left"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/10.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup14"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup14">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/6.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$33.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/11.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup15"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup15">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/7.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <div class="dish--tag">new</div>
                            <span class="dish--price">$38.95</span>
                            <h3 class="dish--title">Dark Coffee</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row dish-panel">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--img">
                            <div class="divider--shape-right"></div>
                            <img src="{{url('frontend/assets/images/menu/menu-board/12.jpg')}}" alt="dish img">
                            <div class="dish--overlay">
                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup16"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup16">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="{{url('frontend/assets/images/menu/menu-grid/8.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class=" dish--content">
                            <span class="dish--price">$18.95</span>
                            <h3 class="dish--title">Espresso Coffee</h3>
                            <div class="divider--shape-4"></div>
                            <p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .row end -->
</div>
                    </div>
                    <!-- .tab-pane end -->
                </div>
                <!-- .tabs-content end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text--center">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg mt-50" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menuBoard end -->

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-parallax bg-overlay-dark pb-90">
    <div class="bg-section">
        <img src="{{url('frontend/assets/images/background/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Testimonials</p>
                    <h2 class="heading--title color-white">Happy Customers</h2>
                    <div class="divider--shape-13"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    <div class="testimonial-container">

                        <div class="testimonial-panel">
                            <div class="testimonial-bordered">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body">
                                    <p>“ Steak In is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="{{url('frontend/assets/images/testimonial/1.png')}}" alt="Testimonial Author">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>Michael Luke</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->
                        <div class="divider--shape-1up"></div>
                    </div>
                    <!-- Testimonial #2 -->
                    <div class="testimonial-container">

                        <div class="testimonial-panel">
                            <div class="testimonial-bordered">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body">
                                    <p>“ We've been to Steak In many times over the years. We know what to expect: great food and awesome prices ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="{{url('frontend/assets/images/testimonial/2.png')}}" alt="Testimonial Author">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>Henry Gabriel</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>

                        </div>
                        <!-- .testimonial-panel end -->
                        <div class="divider--shape-1up"></div>
                    </div>
                    <!-- Testimonial #3 -->
                    <div class="testimonial-container">

                        <div class="testimonial-panel">
                            <div class="testimonial-bordered">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body">
                                    <p>“ The reasonable prices, the great atmosphere are only topped by the delicious food. Keep up the great work ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="{{url('frontend/assets/images/testimonial/3.png')}}" alt="Testimonial Author">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>Leo Jaxon</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>

                        </div>
                        <!-- .testimonial-panel end -->
                        <div class="divider--shape-1up"></div>
                    </div>
                    <!-- Testimonial #4 -->
                    <div class="testimonial-container">

                        <div class="testimonial-panel">
                            <div class="testimonial-bordered">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body">
                                    <p>“ Steak In is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="{{url('frontend/assets/images/testimonial/4.png')}}" alt="Testimonial Author">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>Anthony Hunter</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                        </div>
                        <!-- .testimonial-panel end -->
                        <div class="divider--shape-1up"></div>
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #testimonial1 end -->

<!-- Blog Carousel
============================================= -->
<section id="blog" class="blog blog-carousel pb-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Don’t miss</p>
                    <h2 class="heading--title mb-0">Our News & Events</h2>
                    <div class="divider--shape-4"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">

                    <!-- Blog Entry #1 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Simple Recipes for Spring</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="{{url('frontend/assets/images/blog/grid/1.jpg')}}" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Too busy working at the computer
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #2 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Apple</a> , <a href="#">Stuffing And Dressing</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Dinner Party for a Chef!</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="{{url('frontend/assets/images/blog/grid/2.jpg')}}" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them...
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #3 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Food</a> , <a href="#">Cheese</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cake with Cream Cheese</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="{{url('frontend/assets/images/blog/grid/3.jpg')}}" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #4 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Green</a> , <a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">The Best Side Dishes</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="{{url('frontend/assets/images/blog/grid/4.jpg')}}" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                From green bean casserole to mashed potatoes and cranberry sauce, find standout Thanksgiving sides from Food Network chefs find standout.
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #5 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cornbread Stuffing Apples</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="{{url('frontend/assets/images/blog/grid/5.jpg')}}" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                Cook sausage for 5 to 7 minutes until browned. Add onions and celery and saute until softened. Add salt and pepper, to taste. Mix in apples, thyme
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->

@endsection