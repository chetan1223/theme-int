<?php
 get_header();
?>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
    	<div id="my_Controls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
    		<div class="banner_taital">
    			<h1 class="find_text"><?php bloginfo('description'); ?></h1>
    			<h2 class="crush_text">TO CRUSH YOUR FITNESS GOALS</h2>
    			<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a
                page when looking at its layout. The point of using Lorem Ipsum is that</p>
    		</div>
    		<div class="contact">
    			<div class="contact_bt"><a href="#">Contact Us</a></div>
    		</div>
    	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#my_Controls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#my_Controls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    	
    </div>
    <!-- banner section end -->
    <!-- about section start -->

    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="about_text_2"><strong>ABOUT US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    <div class="about_section">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="about_taital">
    				<h1 class="about_text">ABOUT OUR GYM</h1>
    				<p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
    				<div class="about_bt"><a href="#">ABOUT MORE</a></div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="about_img"><img src="<?php echo get_template_directory_uri().'/assets/images/about-bg.png' ?>"></div>
    		</div>
    	</div>
    </div>
    <!-- about section end -->
    <!-- our service section start -->
    


    
    <div class="our_section layout_padding">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		 the_title();
		endwhile;
			// get_template_part( 'template-parts/content/content-single' );
		
        // echo "<pre>";

          // $con = get_posts( );
          // foreach ( $con as $post ) {
          // the_content();
					// the_title();
          // }
				// 	echo "<pre>";
				//  print_r(get_posts());
				//  echo "</pre>";
        ?>
    	<div class="container">
    		<h1 class="our_text"><strong>OUR CLASSES</strong></h1>
    		<p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
    		<div class="row padding_top_0">
    			<div class="col-lg-4">
    				<div class="image_7"><a href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/img-1.png' ?>"></a></div>
    				<h2 class="design_text">WEIGHTLIFTING</h2>
    				<p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
    			</div>
    		    <div class="col-lg-4">
    		    	<div class="image_7"><a href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/img-2.png' ?>"></a></div>
    				<h2 class="design_text">INDOOR CYCLING</h2>
    				<p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
    		    </div>
    		    <div class="col-lg-4">
    		    	<div class="image_7"><a href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/img-3.png' ?>"></a></div>
    				<h2 class="design_text">CORE POWER</h2>
    				<p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
    		    </div>
    		    <div class="bt_main">
    		    	<div class="seemore_bt"><a href="#">See More</a></div>
    		    </div>
    		</div>
    		
    	</div>
    </div>
    <!-- our service section end -->
    <!-- project section start -->
    <div class="project_section layout_padding">
    	<div class="container">
    		<h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
    		<p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable content 
                                        of a page when looking at its layout. The point of using Lorem Ipsum is tha</p>
            <div class="choice_main">
            	<div class="choose_bt"><a href="#">CHOOSE YOUR TRAINER</a></div>
            </div>            
    	</div>
    </div>
    <!-- project section end -->   
    <!-- our price section start -->   
    <div class="our_price_section layout_padding">
    	<div class="container">
    		<h1 class="our_price"><strong>OUR PRICE</strong></h1>
    		<p class="client_long_text">t is a long established fact that a reader will be distracted by the readable content 
            of a page when looking at its layout. The point of using Lorem Ipsum is tha</p>
            <div class="price_section_2">
            	<div class="row">
            		<div class="col-sm-12 col-lg-4">
            			<div class="beginner">
            				<h2 class="beginner_text">BEGINNER PLAN</h2>
            				<h1 class="plan_text">$40</h1>
            				<P class="access_text">Unlimited access to the gym</P>
            				<P class="access_text">3 classes per week</P>
            				<P class="access_text">One Year memberships</P>
            				<P class="access_text">FREE drinking package</P>
            				<P class="free_text">1 Free personal training</P>
            			</div>
            			<div class="select_boton">
            			    <div class="select_bt"><a href="#">SELECT PLAN</a></div>
            			</div>
            		</div>
            		<div class="col-sm-12 col-lg-4">
            			<div class="premium">
            				<h2 class="beginner_text">PREMIUM PLAN</h2>
            				<h1 class="plan_text">$40</h1>
            				<P class="access_text">access to the gym</P>
            				<P class="access_text">3 classes per week</P>
            				<P class="access_text">One Year memberships</P>
            				<P class="access_text">FREE drinking package</P>
            				<P class="free_text">1 Free personal training</P>
            			</div>
            			<div class="select_boton">
            			    <div class="premium_bt"><a href="#">SELECT PLAN</a></div>
            			</div>
            		</div>
            		<div class="col-sm-12 col-lg-4">
            			<div class="beginner">
            				<h2 class="beginner_text">ULTIMATE PLAN</h2>
            				<h1 class="plan_text">$40</h1>
            				<P class="access_text">Unlimited access to the gym</P>
            				<P class="access_text">3 classes per week</P>
            				<P class="access_text">One Year memberships</P>
            				<P class="access_text">FREE drinking package</P>
            				<P class="free_text">1 Free personal training</P>
            			</div>
            			<div class="select_boton">
            			    <div class="select_bt"><a href="#">SELECT PLAN</a></div>
            			</div>
            		</div>
            	</div>
            </div>
    	</div>
    </div> 
    <!-- our price section end -->   

    <!-- contact section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>CONTACT US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    <div class="contact_section">
    	<div class="row">
    		<div class="col-md-6 background_bg">
    			<div class="contact_bg">
    				<div class="input_main">
                       <div class="container">
                       	<h2 class="request_text">REQUEST A CALL BACK</h2>
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone" name="Email">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </form>
                          </form>
                       </div> 
                    </div>
                    <div class="send_bt"><a href="#">SEND</a></div>
    			</div>
    		</div>
    		<div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="560" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
    	    </div>
    	</div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
    	    <div class="container">
    		    <div class="row map_addres">
    		    	<div class="col-sm-12 col-lg-4">
    		    		<div class="map_text"><img src="images/map-icon.png"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
    		    	</div>
                    <div class="col-sm-12 col-lg-4">
                    	<div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">( +71 7986543234 )</span></div>
                    </div>
    		    	<div class="col-sm-12 col-lg-4">
    		    		<div class="map_text"><img src="images/email-icon.png"><span class="map_icon">chetan@gmail.com</span></div>
    		    	</div>
    		    </div>
    		    <div class="social_icon">
    		    	<ul>
    		    		<li><a href="#"><img src="images/fb-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/in-icon.png"></a></li>
    		    		<li><a href="#"><img src="images/instagram-icon.png"></a></li>
    		    	</ul>
    		    </div>
    		    <p class="copyright_text"><?php dynamic_sidebar( 'home_right_1' ); ?> 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
    	    </div>
        </div>
    </div>
    <!-- footer section end -->    
</body>
</html>

<!-- https://www.abwills.ca/edit-profile/ -->