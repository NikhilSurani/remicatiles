<?php include_once("header.php"); ?>	
	<!--page-->
	<div id="banner">
		<div class="container intro_wrapper">
			<div class="inner_content">
				<h1>Work</h1>
					<h1 class="title">2 Column Portfolio</h1>
						<h1 class="intro">
							Web design is the creation of <span class="hue">digital environments</span>, that <span>facilitate</span> and encourage human activity; 
							<span>reflect </span> or adapt to individual voices and content. - Jeffrey Zeldman
						</h1>
					</div>
				</div>
			</div>
			
			<div class="container wrapper">
			<div class="inner_content">
			
			<div id="options">                                           
                    <ul id="filters" class="option-set" data-option-key="filter">
                  	    <li><a href="#filter" data-option-value="*" class=" selected">All</a> </li>
                        <li><a href="#filter" data-option-value=".category01">Category 01</a> </li>                                            
                        <li><a href="#filter" data-option-value=".category02">Category 02</a> </li>
                        <li><a href="#filter" data-option-value=".category03">Category 03</a></li> 
                    </ul>                                           
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <!-- portfolio_block --> 
                    <div class="projects">                                  
                        <div class="col-xs-12 col-sm-6 col-md-6 element category01" data-category="category01">
                            <div class="hover_img">
								<a href="img/portfolio/1.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/1.jpg" alt="" /></a>
                            </div> 
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
                            </div>                                    
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 element  category02" data-category="category02">
                            <div class="hover_img">
								<a href="img/portfolio/2.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/2.jpg" alt="" /></a>
                            </div> 
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
                            </div>
                        </div>
<!--
                       <div class="col-xs-12 col-sm-6 col-md-6 element category03" data-category="category03">
                            <div class="hover_img">
								<a href="img/portfolio/3.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/3.jpg" alt="" /></a>
                            </div> 
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
								</div>
                            </div> 
-->

                        <div class="col-sm-6 col-md-6 element category01" data-category="category01">
                            <div class="hover_img">
								<a href="img/portfolio/4.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/4.jpg" alt="" /></a>
                            </div>  
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
							</div>                                    
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 element category02" data-category="category02">
                            <div class="hover_img">
								<a href="img/portfolio/5.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/5.jpg" alt="" /></a>
                            </div> 
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
                            </div>
                        </div>

                       <!-- <div class="col-xs-12 col-sm-6 col-md-6 element category03" data-category="category03">
                            <div class="hover_img">
								<a href="img/portfolio/6.jpg" data-rel="prettyPhoto[portfolio1]">	
                                <img src="img/portfolio/6.jpg" alt="" /></a>
                            </div> 
                            <div class="item_description">
                               <a href="single_portfolio.html"><span>Item Link</span></a>
								<br>
								item description
                            </div>
                        <div class="clear"></div>
                    </div>    -->
                    <!-- //portfolio-->   
                </div>
            </div>
        </div>
	</div>
	<div class="pad25 hidden-md hidden-lg"></div>
<!--//page-->

<?php include_once("footer.php"); ?>

		
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
	
<script type="text/javascript">

	$(document).ready(function(){
	var $container = $('.projects');
	$container.imagesLoaded(function() {
	$('.projects').fadeIn(1000).isotope({
	layoutMode : 'fitRows',
    itemSelector : '.element' });
	});
	$('.element').css('opacity',0);
	$('.element').each(function(i){
	$(this).delay(i*150).animate({'opacity':1},350);
	});
});

</script>



