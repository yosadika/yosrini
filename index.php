
	<!DOCTYPE html>
	<html lang="en-US'" class='no-js'>
		<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width,initial-scale=1'>
			
			
			<link rel='icon' type='image/png' href='master/master/template/yosrini/images/logo.png'>
			
		<meta property='og:image' content='http://localhost/00.asset/images/yosrini_foto/yr1_1.jpg'> 
		  <meta property='og:title' content='The Wedding Of Rini &amp; Yos'>
		  <meta property='og:description' content='HKBP Sei Agul & Wisma Taman Sari | The 12<sup>th</sup> of November 2021'>
		  <meta property='og:type' content='article'>   
		  <meta property='og:url' content='http://riniyos-undangan.online'>
			
			<!--================== AWAL BLOK STYLE ================================= -->
				<!-- CSS STYLE UMUM-->
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/style_umum.css' media='screen'>
				
				<link rel='stylesheet' type='text/css' href='fonts/css/font-awesome.css' media='screen'>
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/navstylechange.css' media='screen'>
				<link rel='stylesheet' href='master/master/template/yosrini/animasi/css/animations.css' type='text/css'>
				
				<!-- Theme style  -->
			<link rel='stylesheet' href='master/master/template/yosrini/lib_template/elegante2/css/style.css'>
			
				
				<!-- CSS MENU -->
				<link rel='stylesheet' href='master/master/template/yosrini/css/menu/styles_menu.css'>
				
				<!-- CSS STORY -->
				<link rel='stylesheet' href='master/master/template/yosrini/css/story/style_story.css'>
				
				<!-- CSS FONT -->
				<link rel='stylesheet' type='text/css' href='fonts/css/fonts/css/font-awesome.min.css'>
				<link rel='stylesheet' type='text/css' href='fonts/css/fonts/css/dataTables.fontAwesome.css'>
				
				<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
				<link rel='stylesheet' type='text/css' href='src/css/settings.css' media='screen'>
				
				<!-- RESPONSIVE -->
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/responsive.css' media='screen'>
				
				<!-- FONT -->
				<link href='css/css-2.css?family=Playfair+Display:400i' rel='stylesheet'>
				<link href='css/css-3.css?family=Roboto' rel='stylesheet'>
				<link href='css/css-4.css?family=Roboto+Slab:300' rel='stylesheet'>
				<link href='css/css-5.css?family=Dancing+Script' rel='stylesheet'>
				<link href='css/css-6.css?family=Sacramento' rel='stylesheet'>
				<link href='css/css-7.css?family=Lobster+Two&display=swap' rel='stylesheet'>
				
				<!-- FONT TAMBAHAN CUSTOME-->
				<link href='css/css-8.css?family=Cormorant+Infant&display=swap' rel='stylesheet'>
				<link href='css/css-9.css?family=Montserrat&display=swap' rel='stylesheet'>
				
				
				<!-- GALLERY -->
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/gallery/bootstrap.css'>
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/gallery/magnific-popup.css'>
				<link rel='stylesheet' type='text/css' href='master/master/template/yosrini/css/gallery/style-gallery.css'>
				
				<!-- SCROLL DIRECTION -->
				<link rel='stylesheet' href='style_button_scroll.css'>
				
				<!-- POPUP -->
				<link rel='stylesheet' type='text/css' href='popup_style.css'>
					
			<!--================== AKHIR BLOK STYLE ================================= -->
			
			<!--================== AWAL BLOK JS ================================= -->
				<!-- get jQuery from the google apis -->
				<script type='text/javascript' src='master/master/template/yosrini/src/js/jquery/1.10.1/jquery.js'></script>
				
				<!-- JS MENU -->
				<script src='master/master/template/yosrini/src/js/menu/responsive-nav.js'></script>
				
				<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
				<script type='text/javascript' src='master/master/template/yosrini/src/js/jquery.themepunch.plugins.min.js'></script>
				<script type='text/javascript' src='master/master/template/yosrini/src/js/jquery.themepunch.revolution.min.js'></script>
				
			
			<!--================== AKHIR BLOK JS ================================= -->
			
			<link rel='stylesheet' href='master/master/template/yosrini/lib_template/elegante2/css/bootstrap.min.css'>
			<script src='master/master/template/yosrini/lib_template/elegante2/js/bootstrap.min.js'></script>
			<script type='text/javascript'>
				$(document).ready(function(){
					$('#myModal').modal('show');
				});
			</script>
			
			<script>
			    function get_data(pilihan)
                	{
                	    $.ajax({
                			url:'ambil_data.php?data=sesi1',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data_sesi').html(response);
                				}			
                			});
                			
                		$.ajax({
                			url:'ambil_data.php?data=person1',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data').html(response);
                				}			
                			});
                	}
                	
                	function get_data2(pilihan)
                	{
                	    $.ajax({
                			url:'ambil_data.php?data=sesi1',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data_sesi').html(response);
                				}			
                			});
                			
                		$.ajax({
                			url:'ambil_data.php?data=person2',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data2').html(response);
                				}			
                			});
                	}
                	
                	function get_data3(pilihan)
                	{
                	    $.ajax({
                			url:'ambil_data.php?data=sesi1',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data_sesi').html(response);
                				}			
                			});
                			
                		$.ajax({
                			url:'ambil_data.php?data=person3',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('#hasil_data3').html(response);
                				}			
                			});
                		
                		
                	}
                	
                	function get_data4(pilihan)
                	{
                			
                		$.ajax({
                			url:'ambil_data.php?data=person4',
                			data: 'dat='+pilihan,
                			type: 'post',
                			dataType: 'html',
                			timeout: 10000,
                			success: function(response){
                				$('.hasil_data4').html(response);
                				}			
                			});
                		
                		
                	}
			</script>

			
			<!-- Link Swiper's CSS -->
			<link rel='stylesheet' href='master/master/template/yosrini/src/slider/css/swiper.min.css'>
			
            <!-- Demo styles -->
			<style>
				
				.swiper-container {
				  width: 100%;
				  height: 100%;
				  color:#9b9a8b;
				}
				.swiper-slide {
				  text-align: center;
				  font-size: 18px;

				  /* Center slide text vertically */
				  display: -webkit-box;
				  display: -ms-flexbox;
				  display: -webkit-flex;
				  display: flex;
				  -webkit-box-pack: center;
				  -ms-flex-pack: center;
				  -webkit-justify-content: center;
				  justify-content: center;
				  -webkit-box-align: center;
				  -ms-flex-align: center;
				  -webkit-align-items: center;
				  align-items: center;
				}
				
				.gaya
				{
				display: inline-block;
				  width: 65px;
				  height: 65px;
				  /*background: rgba(241, 78, 149, 0.8);*/
				  background-color:#d3bdae;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  -ms-border-radius: 50%;
				  border-radius: 50%;
				  position: relative;
				  animation: pulse 1s ease infinite;
				  color:#FFFFFF;
				  font-size:28px;
				  margin-top:10px;
				  padding-top:7px;
				}

				.gaya span
				{
				  font-size:8px;
				  display:block;
				  color:white;
				  margin-top:-10px;
				  font-family: Montserrat, sans-serif;
				}
				
				.couple-wrap {
				  width: 90%;
				  margin: 0 auto;
				  position: relative;
				}
				@media screen and (max-width: 768px) {
				  .couple-wrap {
					width: 100%;
				  }
				}

				.heart {
				  position: absolute;
				  top: 4em;
				  left: 0;
				  right: 0;
				  z-index: 99;
				  animation: pulse 1s ease infinite;
				}
				.heart i {
				  font-size: 20px;
				  background: #fff;
				  padding: 20px;
				  color: #F14E95;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  -ms-border-radius: 50%;
				  border-radius: 50%;
				}
				
				@media screen and (max-width: 768px) {
				  .heart {
					display: none;
				  }
				}

				.couple-half {
				  width: 50%;
				  float: left;
				}
				@media screen and (max-width: 768px) {
				  .couple-half {
					width: 100%;
				  }
				}
				.couple-half h3 {
				  font-family: 'Roboto Slab', serif;
				  color:#474848;
				  font-size: 20px;
				}
				.couple-half .groom, .couple-half .bride {
				  float: left;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  -ms-border-radius: 50%;
				  border-radius: 50%;
				  width: 150px;
				  height: 150px;
				}
				.couple-half .groom img, .couple-half .bride img {
				  width: 150px;
				  height: 150px;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  -ms-border-radius: 50%;
				  border-radius: 50%;
				}
				@media screen and (max-width: 480px) {
				  .couple-half .groom, .couple-half .bride {
					width: 100%;
					height: 140px;
				  }
				  .couple-half .groom img, .couple-half .bride img {
					width: 120px;
					height: 120px;
					margin: 0 auto;
				  }
				}
				.couple-half .groom {
				  float: right;
				  margin-right: 5px;
				}
				.couple-half .bride {
				  float: left;
				  margin-left: 5px;
				}
				.couple-half .desc-groom {
				  padding-right: 180px;
				  text-align: right;
				}
				.couple-half .desc-bride {
				  padding-left: 180px;
				  text-align: left;
				}
				@media screen and (max-width: 480px) {
				  .couple-half .groom, .couple-half .bride {
					margin-left: 0;
					margin-right: 0;
				  }
				  .couple-half .desc-groom {
					padding-right: 0;
					text-align: center;
				  }
				  .couple-half .desc-bride {
					padding-left: 0;
					text-align: center;
				  }
				}
				
				.videoWrapper 
				{
					position: relative;
					padding-bottom: 56.25%; /* 16:9 */
					padding-top: 25px;
					height: 0;
				}
				.videoWrapper iframe {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
				}
				
				.float
				{
					position: fixed;
					width: 50px;
					height: 50px;
					bottom: 40px;
					right: 15px;
					background-color: #d3bdae;
					opacity: 0.8;
					color: #FFF;
					border-radius: 50px;
					text-align: center;
					padding-top:12px;	
					z-index: 99;
				}
				
				.cd-timeline__container::before
				{
					background-color:#d3bdae;
				}
				
				.cd-timeline__content
				{
					-webkit-box-shadow: 0 3px 0 #d3bdae;
					box-shadow: 0 3px 0 #d3bdae;
				}
				
				.content_event1
				{
					 border: 2px solid #d3bdae;
				}
				
				.atas_kiri
				{
					background-color:#d3bdae;
				}
				
				.atas_kanan
				{
					background-color:#d3bdae;
				}
				
				.bawah_kiri
				{
					background-color:#d3bdae;
				}
				
				.bawah_kanan
				{
					background-color:#d3bdae;
				}
				
				.form-input
				{
				    padding:10px;
				    border-radius:5px;
				    border: 1px solid #d3bdae;
				    background-color:white;
				}
				
				#overlay_popup {
                      position: fixed; /* Sit on top of the page content */
                      width: 100%; /* Full width (cover the whole page) */
                      height: 100%; /* Full height (cover the whole page) */
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;
                      background-color: rgba(0,0,0,0.6); /* Black background with opacity */;
                    }

				
			</style>
			
			<style>
				@media(max-width : 720px)
				{
					#fh5co-header
					{
						background-image:url(00.asset/images/yosrini_foto/yr1_2.jpg);
						 background-attachment: scroll;
						background-repeat: no-repeat;
						background-size: cover;
						background-position: center;
						 background-size: cover;
						 height:700px;
					}
					
					#fh5co-header2
    					{
    						background-image:url(00.asset/images/yosrini_foto/yr1_2.jpg);
    						 background-attachment: scroll;
    						background-repeat: no-repeat;
    						background-size: cover;
    						background-position: center;
    						 background-size: cover;
    						 height:100vh;
                        }
					
					.br
					{
						margin-left:10px;
					}
					
					
					#section07 a span
					{
					    margin-top:380px;
					}
					
					.border-home
				    {
				        margin-top:-80px;
				    }
				    
				    .icon_covid
					{
					     width:40%;
					     float:left;
					     margin-left:5%;
					     margin-right:5%;
					     margin-top:20px;
					}
				}
				@media(min-width : 720px)
				{
				    .icon_covid
					{
					    width:15%;
					    float:left;
					    margin-left:8%;
					    margin-top:20px;
					}
					#fh5co-header
					{
						background-image:url(00.asset/images/yosrini_foto/yr1_1.jpg);
						background-attachment: fixed;
						background-repeat: no-repeat;
						background-size: cover;
						background-position: center; 
						 background-size: cover;
						 height:700px;
					}
					
					#fh5co-header2
    					{
    						background-image:url(00.asset/images/yosrini_foto/yr1_1.jpg);
    						background-attachment: fixed;
    						background-repeat: no-repeat;
    						background-size: cover;
    						background-position: center; 
    						background-size: cover;
    						height:100vh;
    					}
					
					.br
					{
						margin-left:10px;
					}
					
					
					
					#section07 a span
					{
					    margin-top:120px;   
					}
					
					.border-home
				    {
				        margin-top:-250px;
				    }
				}
			</style>
			
			
			<style type='text/css'>
               @font-face
                {
                     font-family: 'Font Digital';
                     src: url('GracedScriptPersonalUse-V5XV.ttf');
                }
                
                @font-face
                {
                     font-family: 'Font Digital 2';
                     src: url('Daniels Signature DEMO.ttf');
                }
             
               #font_digital {
                     font-family: 'Font Digital';
                     }
                     
                #font_digital_2 {
                     font-family: 'Font Digital 2';
                     font-size:60px;
                     }
                
                #font_digital_2 span{
                     font-family: Montserrat, sans-serif;
                     text-transform:uppercase;
                     color:#474848;
                     margin-top:-20px;
                     }
                     
                .alamat_saja
                {
                    font-family: Cormorant Infant, serif; font-size:28px; color:#474848;
                    text-transform:uppercase;
                }
                .alamat_saja span
                {
                    font-family: Cormorant Infant, serif; font-size:14px; color:#474848;
                    text-transform:uppercase;
                    display:block;
                    margin-top:-5px;
                }
                
                #contoh1::-webkit-input-placeholder{
                	color: #d3bdae;
                }
            </style>
			
			<title>Rini Yos Wedding</title>
		</head>
		
		<body style='background-color:white; background-image: url(master/master/template/yosrini/images/Bg-01.png); overflow-x:hidden;'>
			
					<div class='modal fade right' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalPreviewLabel' aria-hidden='true' style='overflow: hidden;' data-backdrop="" static="" data-keyboard='false'>
                        <div class='modal-dialog-full-width modal-dialog momodel modal-fluid' role='document'>
                            <div class='modal-content-full-width modal-content '>
                                <div id='fh5co-header2'>
                                    <div id='overlay_popup' style='text-align:center; color:white;'>
                                        
                                        <div style='bottom:50px;width:100%;position:absolute;'>
                                            <div style='color:#d3bdae;font-family: Lora, serif;'>

												<span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:11px;margin-bottom:5px;letter-spacing:1px;'>
													Dear,
												</span>

													<span id="untuk" style='font-family: Cormorant Infant, serif; font-weight:bold;letter-spacing:1px;display:block;font-size:16px;margin-bottom:5px'></span>
													<script>
														function GetURLParameter(sParam)
														{
															var sPageURL = window.location.search.substring(1);
															var sURLVariables = sPageURL.replace(/\+/g, " ").split('&');
															for (var i = 0; i < sURLVariables.length; i++) 
															{
																var sParameterName = sURLVariables[i].split('=');
																if (sParameterName[0] == sParam) 
																{
																	return sParameterName[1];
																}
															}
														}
														var untuk = GetURLParameter('untuk');
														document.getElementById("untuk").innerHTML = untuk;
													</script>
                            					    
                                                    <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:11px;margin-bottom:5px;letter-spacing:1px;'>
                                                        You Are Invited To The Wedding Of
                                                    </span>
                                                </div>
                            				    
                                            <span style='color:white;font-family: Cormorant Infant, serif;display:block;font-size:40px;margin-bottom:5px;letter-spacing:-1px;'>
                                                Rini & Yos
                                           </span>
                                            
                                            
                                            
                                            
                                            
                                            <button type='button' class='btn' data-dismiss='modal' onclick='playAudio()' style='border:1px solid #ffffff;background-color:transparent;color:white;font-size:13px;letter-spacing:1px;margin-top:10px;'>OPEN INVITATION</button>
                                            <div style='color:white;font-family: Lora, serif;margin-top:10px;bottom:10px;'>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
			<!--
			<audio loop="" preload='auto' id='myAudio'>
				<source src='00.asset/backsound/Cant Help Falling in Love.mp3'>
			</audio>
			-->

			<audio loop="" id="myAudio"></audio>

			<a onclick='playAudio()' type='button' id='un-mute1' class='float'><img src='master/master/template/yosrini/images/music-mute.png' width='30px;'></a>
			<a onclick='pauseAudio()' type='button' id='mute1' class='float'><img src='master/master/template/yosrini/images/music.png' width='30px;'></a>

			
			<!--=========== AWAL MENU =============== --> 
			<div class='menu' style="display: none;">
				<div class='menu_content'>
				  <a href='#home' class='logo_menu' data-scroll="">Rini Yos Wedding</a>
				  <nav class='nav-collapse'>
					<ul>
					  <li class='menu-item'><a href='#home' data-scroll="">HOME</a></li>
					  
					  
					  <li class='menu-item'><a href='#couple' data-scroll="">COUPLE</a></li>
					  <li class='menu-item'><a href='#event' data-scroll="">EVENTS</a></li>
					  <li class='menu-item'><a href='#history' data-scroll="">OUR STORY</a></li> <li class='menu-item'><a href='#photo' data-scroll="">GALLERY</a></li><li class='menu-item'><a href='#wishes' data-scroll="">R.S.V.P</a></li>
					  
					</ul>
				  </nav>
				 </div>
			</div>
			<!--=========== AKHIR MENU =============== -->
			
			
			<div id='home' style='z-index:1;'>
					<div class='tp-banner-container'>
						<div class='tp-banner'>
							<ul>
								<!-- SLIDE  -->
								
    								<li data-transition='boxslide' data-slotamount='5' data-masterspeed='700'>
    									<!-- MAIN IMAGE -->
        									
    											    <img src='00.asset/images/yosrini_foto/yr4_1.jpg' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
    										
    									<!-- LAYERS -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-voffset='100' data-y='center' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='500' data-easing='Back.easeInOut' data-endspeed='300'>
    											<div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-135px;'>	

    													    <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:12px; font-style:italic; letter-spacing:1px;'>THE WEDDING OF</span><br>
    													    
    													
    											</div>
    										
    									</div>
    
    
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='160' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1000' data-easing='Back.easeInOut' data-endspeed='300'>
    											
    										        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #d3bdae; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
    										        
									                <div style='margin-top:-10px; margin-bottom:35px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
            										Rini &amp;
                									</div>
                									<div style='margin-top:0px; margin-bottom:20px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
                										Yos
                									</div>
									                
    											</div>
    											
    									</div>
    									
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='205' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1500' data-easing='Back.easeInOut' data-endspeed='300'>
    										
									            <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:100px;'>
									            
									        
											<div style='text-transform:uppercase;color:white; display:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'>Friday, The 12<sup>th</sup> of November 2021
											
    											<div style='clear:both;display:block;'></div>
                                                <section id='section07'>
                                                  <a href='#couple' data-scroll="">
                                                  <span></span>
                                                  <span></span>
                                                  <span></span>
                                                  </a>
                                                </section>
                                                <span style='font-family:Quattrocento, serif;font-style:italic;letter-spacing:2px;color:#ffffff;font-weight:normal;display:block;font-size:10px;margin-top:100px'>
                                                        SCROLL DOWN
                                                    </span>
                                                
    											
    											</div>
											</div>
											
											
											
											
    										        
    									</div>
    
    										
    								</li>
    								
    								<li data-transition='boxslide' data-slotamount='5' data-masterspeed='700'>
    									<!-- MAIN IMAGE -->
        									
    											    <img src='00.asset/images/yosrini_foto/yr13_1.jpg' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
    										
    									<!-- LAYERS -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-voffset='100' data-y='center' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='500' data-easing='Back.easeInOut' data-endspeed='300'>
    											<div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;font-family:Kurale; margin-top:-135px;'>	
    											
    													    <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:12px; font-style:italic; letter-spacing:1px;'>THE WEDDING OF</span><br>
    													    
    													
    											</div>
    										
    									</div>
    
    
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='160' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1000' data-easing='Back.easeInOut' data-endspeed='300'>
    											
    										        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #d3bdae; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
    										        
									                <div style='margin-top:-10px; margin-bottom:35px; color:#000000; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
            										Rini &amp;
                									</div>
                									<div style='margin-top:0px; margin-bottom:20px; color:#000000; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
                										Yos
                									</div>
									                
    											</div>
    											
    									</div>
    									
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='205' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1500' data-easing='Back.easeInOut' data-endspeed='300'>
    										
									            <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px;font-family:Kurale; margin-top:100px;'>
									            
									        
											<div style='text-transform:uppercase;color:#000000; display:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'>Friday, The 12<sup>th</sup> of November 2021
											
    											<div style='clear:both;display:block;'></div>
                                                <section id='section07'>
                                                  <a href='#couple' data-scroll="">
                                                  <span></span>
                                                  <span></span>
                                                  <span></span>
                                                  </a>
                                                </section>
                                                <span style='font-family:Quattrocento, serif;font-style:italic;letter-spacing:2px;color:#000000;font-weight:normal;display:block;font-size:10px;margin-top:100px'>
                                                        SCROLL DOWN
                                                    </span>
                                                
    											
    											</div>
											</div>
											
											
											
											
    										        
    									</div>
    
    										
    								</li>

									<li data-transition='boxslide' data-slotamount='5' data-masterspeed='700'>
    									<!-- MAIN IMAGE -->
        									
    											    <img src='00.asset/images/yosrini_foto/yr2_1.jpg' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
    										
    									<!-- LAYERS -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-voffset='100' data-y='center' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='500' data-easing='Back.easeInOut' data-endspeed='300'>
    											<div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-135px;'>	
    											
    													    <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:12px; font-style:italic; letter-spacing:1px;'>THE WEDDING OF</span><br>
    													    
    													
    											</div>
    										
    									</div>
    
    
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='160' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1000' data-easing='Back.easeInOut' data-endspeed='300'>
    											
    										        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #d3bdae; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
    										        
									                <div style='margin-top:-10px; margin-bottom:35px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
            										Rini &amp;
                									</div>
                									<div style='margin-top:0px; margin-bottom:20px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
                										Yos
                									</div>
									                
    											</div>
    											
    									</div>
    									
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='205' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1500' data-easing='Back.easeInOut' data-endspeed='300'>
    										
									            <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:100px;'>
									            
									        
											<div style='text-transform:uppercase;color:white; display:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'>Friday, The 12<sup>th</sup> of November 2021
											
    											<div style='clear:both;display:block;'></div>
                                                <section id='section07'>
                                                  <a href='#couple' data-scroll="">
                                                  <span></span>
                                                  <span></span>
                                                  <span></span>
                                                  </a>
                                                </section>
                                                <span style='font-family:Quattrocento, serif;font-style:italic;letter-spacing:2px;color:#ffffff;font-weight:normal;display:block;font-size:10px;margin-top:100px'>
                                                        SCROLL DOWN
                                                    </span>
                                                
    											
    											</div>
											</div>
											
											
											
											
    										        
    									</div>
    
    										
    								</li>

									<li data-transition='boxslide' data-slotamount='5' data-masterspeed='700'>
    									<!-- MAIN IMAGE -->
        									
    											    <img src='00.asset/images/yosrini_foto/yr3_1.jpg' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
    										
    									<!-- LAYERS -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-voffset='100' data-y='center' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='500' data-easing='Back.easeInOut' data-endspeed='300'>
    											<div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-135px;'>	
    											
    													    <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:12px; font-style:italic; letter-spacing:1px;'>THE WEDDING OF</span><br>
    													    
    													
    											</div>
    										
    									</div>
    
    
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='160' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1000' data-easing='Back.easeInOut' data-endspeed='300'>
    											
    										        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #d3bdae; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
    										        
									                <div style='margin-top:-10px; margin-bottom:35px; color:#FFFFFF; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
            										Rini &amp;
                									</div>
                									<div style='margin-top:0px; margin-bottom:20px; color:#FFFFFF; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;'>
                										Yos
                									</div>
									                
    											</div>
    											
    									</div>
    									
    									<!-- LAYER NR. 4 -->
    									<div class='tp-caption mediumlarge_light_white_center customin customout start' data-x='center' data-y='center' data-voffset='205' data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='1000' data-start='1500' data-easing='Back.easeInOut' data-endspeed='300'>
    										
									            <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:100px;'>
									            
									        
											<div style='text-transform:uppercase;color:#FFFFFF; display:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'>Friday, The 12<sup>th</sup> of November 2021
											
    											<div style='clear:both;display:block;'></div>
                                                <section id='section07'>
                                                  <a href='#couple' data-scroll="">
                                                  <span></span>
                                                  <span></span>
                                                  <span></span>
                                                  </a>
                                                </section>
                                                <span style='font-family:Quattrocento, serif;font-style:italic;letter-spacing:2px;color:#FFFFFF;font-weight:normal;display:block;font-size:10px;margin-top:100px'>
                                                        SCROLL DOWN
                                                    </span>
                                                
    											
    											</div>
											</div>
											
											
											
											
    										        
    									</div>
    
    										
    								</li>
    								
							</ul>
							<div class='tp-bannertimer'></div>
						</div>
					</div>
					<script type='text/javascript'>

						var revapi;

						jQuery(document).ready(function() {

							   revapi = jQuery('.tp-banner').revolution(
								{
									delay:5000,
									startwidth:1170,
									startheight:500,
									hideThumbs:10,
									fullWidth:'off',
									fullScreen:'on',
									fullScreenOffsetContainer: ''
								});

						});	//ready

					</script>
				</div>
				
			<div class='space1'></div>
			
			
			
			<div class='content' id='couple'>
				<div class='container'>
				    <div class='animatedParent' data-sequence='500'>
						<div class='happy_couple'>
							<p class='animated growIn slower' data-id='1' style='font-family: Montserrat, sans-serif; font-size:14px; letter-spacing:1px;'>
							     In the name of Jesus Christ the most beneficent and the most merciful, we are pleased to share joy at the wedding of us
							</p>
						</div>
					</div>
				</div>
				<div class='container'>
				    <div class='couple-wrap'>
						<div class='couple-half' style='margin-top:10px;margin-bottom:10px;'>
							<div class='animatedParent' data-sequence='500'>
								<div class='animated growIn' data-id='1'>
									<div class='groom' style='text-align:center;'>
																					<img src="00.asset/images/yosrini_foto/yr5_2.jpg" alt="groom" class="img-responsive">
											
									</div>
								</div>
								<div class='desc-groom'>
									<h3 class='animated growIn slower' data-id='2' style='font-family: Cormorant Infant, serif;'>Rini Natalia br. Sitanggang</h3>
									<!-- untuk deskripsi mempelai -->
									<p class='animated growIn slower' data-id='3' style='color: #d3bdae; font-family: Montserrat, sans-serif;'><i style='font-size:12px; color: #d3bdae;'>Putri dari</i><br>Bapak Raffles Sitanggang<br>Ibu Ani br. Sinaga</p>
									
								</div>
							</div>
						</div>
						
						<div class='couple-half' style='margin-top:10px;margin-bottom:10px;'>
							<div class='animatedParent' data-sequence='500'>
								<div class='animated growIn' data-id='1'>
									<div class='bride' style='text-align:center;'>
																					<img src="00.asset/images/yosrini_foto/yr5_1.jpg" alt="groom" class="img-responsive">
											
									</div>
								</div>
								<div class='desc-bride'>
									<h3 class='animated growIn slower' data-id='2' style='font-family: Cormorant Infant, serif;'>Yos Adika Novandra Marbun</h3>
									<!-- untuk deskripsi mempelai -->
									<p class='animated growIn slower' data-id='3' style='color: #d3bdae;font-family: Montserrat, sans-serif;'><i style='font-size:12px; color: #d3bdae;'>Putra dari</i><br>Bapak Yusdi R. Marbun<br>Ibu Tri br. Simanullang</p>
								</div>
							</div>
						</div>
						
						<div class='animatedParent' data-sequence='500'>
							<div class='animated growIn' data-id='1'>
								<p class='heart' style='text-align:center;'><i class='fa fa-heart' style='color:#d3bdae; margin-top:-10px;'></i></p>
							</div>
						</div>
						
						
					</div>
				</div>
				<div class='container'>    
					<div class='animatedParent' data-sequence='500'>
						<div class='happy_couple'>
							
							<div class='animated growIn slower' data-id='1' style='margin-top:30px;'>
							    <img src='bungaAA.png' style='width:100px; background-color:#d3bdae;'>
							</div>
							<span class='animated growIn slower' data-id='2' style='margin-top:5px;'>
							
													<p style='text-transform:uppercase;font-family: Cormorant Infant, serif; font-size:20px;'>
													    <span style='text-transform:uppercase;font-family: Cormorant Infant, serif; font-size:24px; margin-bottom:-10px;color:#484949;'>Friday</span>
													    The 12<sup>th</sup> of November 2021</p>
							</span>
							<div class='animated growIn slower' data-id='3' style='margin-top:-30px;'>
							    <img src='bungaBB.png' style='width:80px; background-color:#d3bdae;'>
							</div>
							<div class='animated growIn slower' data-id='4' style='margin-top:20px;'>
							    <div style='color:#484949; display:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
							    We are so excited to celebrate our special day with our family and friends. Thank you so much for visiting our wedding website !<br>just some hours until we get married !
							    </div>
							</div>
							
							<div class='animated growIn slower' data-id='5' style='margin-top:20px;'>
							
											<div id='hitungmundur1' class='gaya' style='background-color:#474848'></div>
											<div id='hitungmundur2' class='gaya' style='background-color:#474848'></div>
											<div id='hitungmundur3' class='gaya' style='background-color:#474848'></div>
											<div id='hitungmundur4' class='gaya' style='background-color:#474848'></div>
											
											<p>
												<button data-toggle='modal' data-target='#exampleModal-tanggal1' class='btn' style='margin-top:0px;padding:10px;font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae;color:#ffffff;'> SAVE THE DATE</button>
											<p>

							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class='space1' style='display:block; clear:both;'></div>
			<div class='content' style='background-color:#474848;padding-top:30px;padding-bottom:30px;'>
				<div class='container'>
				    <div class='animatedParent' data-sequence='500'>
						<div class='happy_couple'>
							<p class='animated growIn slower' data-id='1' style='font-family: Montserrat, sans-serif; font-size:14px; letter-spacing:1px;color:#ffffff;'>
							    So they are no longer two but one flesh. Therefore what God has joined together, let no one separate<br>
							    <br>Matthew 19:6
							</p>
						</div>
					</div>
				</div>
			</div>
			
			
			<!DOCTYPE html>
<html style='height:100%'>
  <head>
   
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<style>
      #map-canvas { height:450px;}
	</style>
    <script src="maps/api/js-1?key=AIzaSyDnoeeEmBRf90KfK7VVcQWwMUz43zGtE-Y&sensor=false" type="text/javascript"></script>
  </head>
	<body>
		
		
			</body>
</html>

			
			<div class='space1' style='display:block; clear:both;'></div>
			<div class='content' id='event'>
				<div class='animatedParent' data-sequence='500' style='margin-bottom:-60px;'>
					<div class='happy_couple'>
					<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-size:36px;'>The Wedding</p>
						
					</div>
					
					<div style='clear:both;display:block;'></div>
					<div class='happy_couple' style='margin-top:0px;'>
    				    <span style='font-family: Cormorant Infant, serif; font-size:22px; color:#474848;'>PEMBERKATAN KUDUS</span>
    				    <span style='margin-top:10px;'>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-25px;text-transform:uppercase;font-size:13px;'>12 November 2021</span>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-20px;'>
    				            10:00 - 11.00
    				        </span>
    				    </span>
    				    <div style='clear:both;display:block;'></div>
                        
    				    
    				    
					</div>

					<div class='happy_couple' style='margin-top:-50px;'>
    				    <div class='alamat_saja' style='font-size:20px;'>HKBP Sei Agul</div>
    				    <span style='margin-top:10px;'>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-15px;'>Jalan Gereja No. 29, Medan</span>
    				    </span>
    				    <button data-toggle='modal' data-target='#exampleModal-umum1' class='btn' style='margin-top:-70px;padding:10px;font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae;color:#ffffff;'> VIEW LOCATION</button>
					</div>
					
					
					<div style='clear:both;display:block;'></div>
					<div class='happy_couple' style='margin-top:0px;'>
					
    				    <span style='font-family: Cormorant Infant, serif; font-size:20px; color:#474848;'>RESEPSI & PESTA ADAT BATAK</span>
    				    <span style='margin-top:10px;'>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-25px;text-transform:uppercase;font-size:13px;'>12 November 2021</span>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-20px;'>
    				        12:00 - 16.30
    				        
    				        </span>
    				    </span>
    				    
    				    
					</div>
					
					<div class='happy_couple' style='margin-top:-50px;'>
    				    <div class='alamat_saja' style='font-size:20px;'>Wisma Taman Sari</div>
    				    <span style='margin-top:10px;'>
    				        <span style='font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px; margin-top:-15px;'>Jalan Kapten Muslim, Medan</span>
    				    </span>
    				    <button data-toggle='modal' data-target='#exampleModal-umum2' class='btn' style='margin-top:-70px;padding:10px;font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae;color:#ffffff;'> VIEW LOCATION</button>
					</div>
					
				</div>
			
				
					
				
			</div>
			
			
					<div style='display:block; clear:both;'></div>
					
					<div class='space1' style='display:block; clear:both; '></div>
					<div class='content' id='history'>
						<div class='animatedParent' data-sequence='500' style='margin-bottom:-40px;'>
						
							<div class='happy_couple'>
								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:38px;'>Our Love Story</p>
								<div class='animated growIn slower' data-id='1' style='margin-top:-30px;margin-bottom:-20px;'><div class='line'><img src='bungaBB.png' style='width:80px; background-color:#d3bdae;'>
								
								</div><br></div>
							</div>
						</div>
						<div class='story_begin'><img src='master/master/template/yosrini/images/cycle-love3.png' alt='Picture' style='background-color:#474848; border-radius:50%;'></div>
						
							<section class='cd-timeline js-cd-timeline'>
							<div class='cd-timeline__container'>
								
									<div class='cd-timeline__block js-cd-block'>
										<div class='animatedParent' data-sequence='500'>
											<div class='animated fadeInUp' data-id='1'>
												<div class='cd-timeline__img js-cd-img'>
													<img src='master/master/template/yosrini/images/cycle-love3.png' alt='Picture' width='100px' style='background-color:#474848; border-radius:50%;'>
												</div> <!-- cd-timeline__img -->
											</div>
											<div class='animated growIn slower' data-id='2'>
												<div class='cd-timeline__content js-cd-content'>
													<div class='story_title' style='color:#474848;font-family: Cormorant Infant, serif; font-style:italic;'>2017</div>
													
													<div class='story_content' style='color:#474848; margin-top:10px;font-family: Cormorant Infant, serif; font-style:italic; font-size: 18px;'>
													Tahun 2017, tepatnya bulan maret adalah pertama kali kami saling bertemu di salah satu kampus dan saling mengenal satu sama lain.
													</div>
													
													
													<span class='cd-timeline__date'> </span>
												</div> <!-- cd-timeline__content -->
											</div>
										</div>
									</div> <!-- cd-timeline__block -->
									
									<div class='cd-timeline__block js-cd-block'>
										<div class='animatedParent' data-sequence='500'>
											<div class='animated fadeInUp' data-id='1'>
												<div class='cd-timeline__img js-cd-img'>
													<img src='master/master/template/yosrini/images/cycle-love3.png' alt='Picture' width='100px' style='background-color:#474848; border-radius:50%;'>
												</div> <!-- cd-timeline__img -->
											</div>
											<div class='animated growIn slower' data-id='2'>
												<div class='cd-timeline__content js-cd-content'>
													<div class='story_title' style='color:#474848;font-family: Cormorant Infant, serif; font-style:italic;'>9 Juli 2017</div>
													
													<div class='story_content' style='color:#474848; margin-top:10px;font-family: Cormorant Infant, serif; font-style:italic; font-size: 18px;'>
													Perkenalanpun berjalan beberapa bulan yang akhirnya menjadikan kami semakin dekat. Tepat di tanggal 9 Juli 2017, kami berdua memutuskan untuk menjadikan tanggal tersebut  menjadi tanggal yang istimewa buat kami , dan memulai hal-hal baru bersama.
													</div>
													
													
													<span class='cd-timeline__date'> </span>
												</div> <!-- cd-timeline__content -->
											</div>
										</div>
									</div> <!-- cd-timeline__block -->
									
									<div class='cd-timeline__block js-cd-block'>
										<div class='animatedParent' data-sequence='500'>
											<div class='animated fadeInUp' data-id='1'>
												<div class='cd-timeline__img js-cd-img'>
													<img src='master/master/template/yosrini/images/cycle-love3.png' alt='Picture' width='100px' style='background-color:#474848; border-radius:50%;'>
												</div> <!-- cd-timeline__img -->
											</div>
											<div class='animated growIn slower' data-id='2'>
												<div class='cd-timeline__content js-cd-content'>
													<div class='story_title' style='color:#474848;font-family: Cormorant Infant, serif; font-style:italic;'>2018</div>
													
													<div class='story_content' style='color:#474848; margin-top:10px;font-family: Cormorant Infant, serif; font-style:italic; font-size: 18px;'>
													Tahun berganti dari tahun 2017 ke 2018. seiring waktu berjalan kami semakin yakin dan merasa cocok antara satu dan lainnya. dan di pertengahan tahun 2018 kami sepakat untuk hubungan lebih serius.
													</div>
													
													
													<span class='cd-timeline__date'> </span>
												</div> <!-- cd-timeline__content -->
											</div>
										</div>
									</div> <!-- cd-timeline__block -->
									
									<div class='cd-timeline__block js-cd-block'>
										<div class='animatedParent' data-sequence='500'>
											<div class='animated fadeInUp' data-id='1'>
												<div class='cd-timeline__img js-cd-img'>
													<img src='master/master/template/yosrini/images/cycle-love3.png' alt='Picture' width='100px' style='background-color:#474848; border-radius:50%;'>
												</div> <!-- cd-timeline__img -->
											</div>
											<div class='animated growIn slower' data-id='2'>
												<div class='cd-timeline__content js-cd-content'>
													<div class='story_title' style='color:#474848;font-family: Cormorant Infant, serif; font-style:italic;'>15 Agustus 2021</div>
													
													<div class='story_content' style='color:#474848; margin-top:10px;font-family: Cormorant Infant, serif; font-style:italic; font-size: 18px;'>
													Hari ini, kami berjanji satu sama lain untuk menjadi sepasang suami dan istri yang saling menjaga, membina dengan cinta dan kasih sayang dalam ikatan pernikahan.
													</div>
													
													
													<span class='cd-timeline__date'> </span>
												</div> <!-- cd-timeline__content -->
											</div>
										</div>
									</div> <!-- cd-timeline__block -->
									
							</div>
						</section> <!-- cd-timeline -->
						<div class='story_end' style='background-color:#474848; border-radius:50%; padding-bottom:1px;'><i class='fa fa-heart' style='color:white; margin-top:13px;'></i></div>
						<div class='clear'></div>
					</div>
					
					<div class='space1'></div>
					<div class='content' id='photo'>
						<div class='animatedParent' data-sequence='500'>
							<div class='happy_couple'>
								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:38px;'>Gallery</p>
								<div class='animated growIn slower' data-id='1' style='margin-top:-30px;margin-bottom:-20px;'><div class='line'><img src='bungaBB.png' style='width:80px; background-color:#d3bdae;'></div></div>
							</div>
							<div class='container'>
								<div class='animated fadeInUp' data-id='2'>
									
        								    <div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr6.JPG'>
        								    </div>
        								    
        								    <div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr11.JPG'>
        								    </div>
        								    
        								    <div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr8.JPG'>
        								    </div>

											<div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr15.JPG'>
        								    </div>

											<div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr14.JPG'>
        								    </div>

											<div class='col-md-4' style='margin-bottom:20px;'>
        								        <img src='00.asset/images/yosrini_foto/yr16.JPG'>
        								    </div>
        								    <div class='clear'></div><div class='clear'></div>
								</div>
							</div>
							<div class='clear'></div>
						</div>
					</div>
					
    			<div class='space1' style='display:block; clear:both;'></div>
    			<div class='content' style='background-color:#474848;padding-top:30px;padding-bottom:30px;'>
    				<div class='container'>
    				    <div class='animatedParent' data-sequence='500'>
    						<div class='happy_couple'>
    								
    								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='margin-bottom:-10px; font-size:12px;font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px;color:#ffffff;'>SPECIAL CONDITIONS</p>
        								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:30px;color:#ffffff;'>For Our Safety And Health</p>
    							</div>
    						<div class='happy_couple' style='margin-top:-20px;'>
    							<p class='animated growIn slower' data-id='1' style='font-family: Montserrat, sans-serif; font-size:14px; letter-spacing:1px;color:#ffffff;'>
    							    With all due respect, to prevent the transmission of the COVID-19 pandemic, we would like to ask all guests to wear a mask, maintain hand hygiene, and keep social distancing.
    							    
    							    <div class='icon_covid'>
        						        <img src='ms.png' style='width:100%;'>
        						        <span style='color:#ffffff;display:block;font-size:10px;text-transform:uppercase;font-family: Montserrat, sans-serif;'>wear a mask</span>
        						    </div>
        						    
        						    <div class='icon_covid'>
        						        <img src='ct.png' style='width:100%;'>
        						        <span style='color:#ffffff;display:block;font-size:10px;text-transform:uppercase;font-family: Montserrat, sans-serif;'>maintain hand hygiene</span>
        						    </div>
        						    
        						    <div class='icon_covid'>
        						        <img src='hs.png' style='width:100%;'>
        						        <span style='color:#ffffff;display:block;font-size:10px;text-transform:uppercase;font-family: Montserrat, sans-serif;'>Always use hand sanitizer</span>
        						    </div>
    							    
    							    <div class='icon_covid'>
        						        <img src='pd.png' style='width:100%;'>
        						        <span style='color:#ffffff;display:block;font-size:10px;text-transform:uppercase;font-family: Montserrat, sans-serif;'>Physical Distancing</span>
        						    </div>
    							
    						</div>
    					</div>
    				</div>
    			</div>
    			
			<div class='space1'></div>
			
				
				<div class='content' id='wishes'>
					<div class='animatedParent' data-sequence='500'>
						<div class='container'>
							<div class='happy_couple' style='margin-bottom:0px;'>
							    <div class='happy_couple' style='margin-bottom:0px;'>
							    
							        <p class='animated growIn slower' id='font_digital_2' data-id='1' style='margin-bottom:-20px; font-size:20px;font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px;'>R.S.V.P</p>
    								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:36px; font-style:italic'>Are you attending?</p>
							        
    							    
    							</div>
								<div class='animated growIn slower' data-id='1' style='margin-top:-30px;margin-bottom:-20px;'><div class='line'><img src='bungaBB.png' style='width:80px; background-color:#d3bdae;'>
								</div>
							</div>
							</div>
							
							<div class='animated fadeInUp' data-id='2' style='margin-top:-50px;'>
							<div id='fh5co-started'>
								<form class='form-inline' method='post' action='simpan.php'>
									<input type='hidden' name='id_event' value='2228'>
									<div class='form-group' style='display:block; width:100%;'>
									
										<div style='display:block; color:#d3bdae;padding-left:10px; margin-top:10px;'>Name</div>
										<input type='hidden' name='header_link' value='http://riniyos-undangan.online'>
										<input type='text' class='form-input' id='name' name='nama' required="" style='width:100%; color:#d3bdae'>
										<input type='hidden' name='id_si' value='0'>
										
									</div>
									
    									        
        										<div style='clear:both;margin-bottom:5px;'></div>
        										<div style='display:block; color:#d3bdae;padding-left:10px; margin-top:10px;'>Are You Attending ?</div>
        										<div class='form-group' style='display:block; width:100%;'>
        											<select name='hadir' class='form-input' id='attending' required="" style='width:100%; color:#d3bdae;' onchange='get_data3(this.value);'>
        												<option value='' style='color:#d3bdae;'></option>
        												<option value='1' style='color:#d3bdae;'>Attending</option>
        												<option value='0' style='color:#d3bdae;'>Not Attending</option>
        											</select>
        										</div>
        										<div>
        										
        										<div style='clear:both;margin-bottom:5px;'></div>
        										<div style='display:block; color:#d3bdae;padding-left:10px; margin-top:10px;'>No. of Guest(s) Attending</div>
        										<div class='form-group' style='display:block; width:100%;'>
        											<select name='tamu' class='form-input' required="" style='width:100%; color:#d3bdae;' id='hasil_data3'>
        												<option value=''></option>
        												<option value='0'>0</option>
														<option value='1'>1</option>
														<option value='2'>2</option>
														<option value='3'>3</option>
														<option value='4'>4</option>
														<option value='5'>5</option>
														<option value='6'>6</option>
        											</select>
        										</div>
        										
								        <div style='clear:both;margin-bottom:5px;'></div>
    									<div style='display:block; color:#d3bdae;padding-left:10px; margin-top:10px;'>Best Wishes</div>
    									<div class='form-group' style='display:block; width:100%;'>
    										<textarea class='form-input' id='wishes' rows='10' name='ucapan' required="" style='width:100%; color:#d3bdae;'></textarea>
    									</div>
								        
									
									<div style='clear:both;margin-bottom:5px;'></div>
									<div style='width:100%;'>
									    <button type='submit' class='btn btn-block' style='color:white; background-color:#d3bdae;'>CONFIRM</button>
										
									</div>
								</div></form>
							</div>
							</div>
						</div>
						<div class='clear'><br><br></div>
					</div>
				</div>
				
			    <div class='content'>
				<div class='container'>
					<div class='animatedParent' data-sequence='500'>
						<div class='happy_couple'>
							
							<div class='animatedParent' data-sequence='500' style='margin-bottom:-60px;'>
    							<div class='happy_couple'>
    								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:38px;'>Gift Corner</p>
    								<div class='animated growIn slower' data-id='1' style='margin-top:-30px;margin-bottom:-20px;'>
    								    <div class='line'>
    								        <img src='bungaBB.png' style='width:80px; background-color:#d3bdae;'>
    								    </div><br>
    								</div>
    							</div>
    						</div>
							
							<div class='animated growIn slower' data-id='2' style='margin-top:20px;text-align:center;'>
							    <div style='color:#484949; display:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
							        It is our honor if you would like to send us a wedding gift
							    </div>
							    
							    
                        			        <style>
                            			        @media(max-width : 720px)
    				                            {
    				                                .caseless
                                					{
                                					    width:80%;
                                					    margin-left:10%;
                                					    margin-right:10%;
                                					    margin-top:10px;
                                					    margin-bottom:10px;
                                					    text-align:center;
                                					}
    				                            }
    				                            
    				                            @media(min-width : 720px)
    				                            {
    				                                .caseless
                                					{
                                					    width:20%;
                                					    margin-top:20px;
                                					    margin-bottom:10px;
                                					    margin-left:40%;
                                					    margin-right:40%;
                                					    float:left;
                                					}
    				                            }
            							    </style>
                        			        
                        			                <div class='caseless' style='text-align:center;'>
                    							        <img src='gift_corner/gift_109_20210721113729.jpeg' style='width:70%;display:block;'>
                    							        <span style='font-size:18px;font-family: Montserrat, sans-serif;letter-spacing:2px;color:#212121;'>BCA </span>
                    							        <span style='font-size:14px;font-family: Montserrat, sans-serif;letter-spacing:2px;color:#212121;margin-top:-20px;text-transform:uppercase;'></span>
                    							    </div>   
                        			            
							</div>
							<div class='clear'><br><br></div>
						</div>
					</div>
					
				</div>
			</div>
			    
    			<div class='space1' style='display:block; clear:both;'></div>
    			<div class='content' style='background-color:#d3bdae;padding-top:30px;padding-bottom:30px;'>
    				<div class='container'>
    				    <div class='animatedParent' data-sequence='500'>
    						<div class='happy_couple'>
    								
    								
        								<p class='animated growIn slower' id='font_digital_2' data-id='1' style='font-family: Cormorant Infant, serif; font-size:34px;color:#474848;'>Best Wishes♥</p>
    							</div>
    						<div class='happy_couple' style='margin-top:-50px;'>
    							<p class='animated growIn slower' data-id='1' style='font-family: Montserrat, sans-serif; font-size:14px; letter-spacing:1px;color:#ffffff;'>
    							    <div class="pre-scrollable">


										<?php 
										include 'koneksi.php';
										$reservasi = mysqli_query($koneksi, "SELECT * from reservasi ORDER BY id_tamu DESC");
										$no=1;
										foreach ($reservasi as $rsv){											
										echo "<div class='story_content' style='color:#ffffff; margin-top:10px;font-family: Cormorant Infant, serif;text-align:center;padding:10px;'>
											<i style='font-size: 16px;'>
											❝".$rsv['ucapan']."❞
											</i>
											<p style='font-size:16px;font-family: Montserrat, sans-serif;color:#474848; letter-spacing:1px;margin-top:-10px;'>
											- ".$rsv['nama']."                            </p>
										</div>";
										$no++;
										}
										?>		
			
								</div>
    							 
    							
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class='space1' style='display:block; clear:both;'></div>
    			
			<div class='clear'></div>
			<!--Footer Section start-->
			<footer id='footer'>
				
				<div class='main-footer' style='background-color:#ffffff;'>
					<div class='container' style='width:80%;color:#d3bdae;'>
						<div class='row' style='font-family: Montserrat, sans-serif;font-size:12px;'>
						    
						    &copy; 2021 Rini&Yos Wedding Invitation
						    <br><br>
							<div class='clear'></div>
						</div>
					</div>
				</div>
			</footer>
				<!--Footer Section End-->
			
			<script src='master/master/template/yosrini/src/js/main_story.js'></script>
			<script src='master/master/template/yosrini/src/js/menu/fastclick.js'></script>
			<script src='master/master/template/yosrini/src/js/menu/scroll.js'></script>
			<script src='master/master/template/yosrini/src/js/menu/fixed-responsive-nav.js'></script>

			<script src='master/master/template/yosrini/src/js/simplyCountdown.js'></script>
				<!-- Main -->
				<script src='master/master/template/yosrini/src/js/main.js'></script>

				<script>
				var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>

						<script>
			Hitung();
			function Hitung()
			{
				
					tahun = 2021;
					bulan = 11;
					hari = 12;
					jam = 10;
					menit = 00;
					detik = 00;
				
			

			setTimeout(function()
			{
			tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
			tglSkrg = new Date();
			tglSkrg = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
			var sisaHari = parseInt((tglTarget-tglSkrg)/86400000);
			var sisaJam = parseInt((tglTarget-tglSkrg)/3600000);
			var sisaMenit = parseInt((tglTarget-tglSkrg)/60000);
			var sisaDetik = parseInt((tglTarget-tglSkrg)/1000);
			detik = sisaMenit*60;
			detik = sisaDetik-detik;
			menit = sisaJam*60;
			menit = sisaMenit-menit;
			jam = sisaHari*24;
			jam = (sisaJam-jam) < 0 ? 0 : sisaJam-jam;
			hari = sisaHari;
			mulaiHitung(hari,jam, menit,detik,tahun);
			}, 1000);
			}

			function mulaiHitung(hari, jam, menit, detik, tahun){
			document.getElementById("hitungmundur1").innerHTML=""+hari+"<span>HARI</span>";
			document.getElementById("hitungmundur2").innerHTML=""+jam+"<span>JAM</span>";
			document.getElementById("hitungmundur3").innerHTML=""+menit+"<span>MENIT</span>";
			document.getElementById("hitungmundur4").innerHTML=""+detik+"<span>DETIK</span>";
			Hitung();
			}

			</script>
			
			<!-- Swiper JS -->
			  <script src='master/master/template/yosrini/src/slider/js/swiper.min.js'></script>

			  <!-- Initialize Swiper -->
			  <script>
				var swiper = new Swiper('.swiper-container', {
				  navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				  },
				});
			  </script>
			  
			  <script>
				document.getElementById('mute1').style.display = 'none';
				
				var x = document.getElementById('myAudio'); 
				function playAudio() { 
					x.play();
					document.getElementById('un-mute1').style.display = 'none';
					document.getElementById('mute1').style.display = 'inline-block';
				} 
				function pauseAudio() { 
					x.pause();
					document.getElementById('mute1').style.display = 'none';
					document.getElementById('un-mute1').style.display = 'inline-block';
				}
				var lastSong = null;
				var selection = null;
				var playlist = ["00.asset/backsound/1.mp3",
				"00.asset/backsound/2.mp3",
				"00.asset/backsound/3.mp3",
				"00.asset/backsound/4.mp3",
				"00.asset/backsound/5.mp3",
				"00.asset/backsound/6.mp3",
				"00.asset/backsound/7.mp3",
				"00.asset/backsound/8.mp3",
				"00.asset/backsound/9.mp3",
				"00.asset/backsound/10.mp3",
				"00.asset/backsound/11.mp3",
				"00.asset/backsound/12.mp3",
				"00.asset/backsound/13.mp3",			]; // List of songs
				var player = document.getElementById("myAudio"); // Get audio element
				player.autoplay=true;
				player.addEventListener("ended", selectRandom); // Run function when the song ends

				function selectRandom(){
					while(selection == lastSong){ // Repeat until a different song is selected
						selection = Math.floor(Math.random() * playlist.length);
					}
					lastSong = selection; // Remember the last song
					player.src = playlist[selection]; // Tell HTML the location of the new song
				}

				selectRandom(); // Select initial song
				player.play(); // Start song
				 
				</script>
			 
			  
			 
				<script src='master/master/template/yosrini/animasi/js/css3-animate-it.js'></script>
				
				<script>
                        function autoRefresh_div() {
                            $('#cek').load('test.php?reva=');
                        }
                        setInterval('autoRefresh_div()', 1000);
                    </script>
				
		</body>
	</html>
	
	
    
    
    
    
    
    
    
    
    
    <div class='modal fade bd-example-modal-lg' id='exampleModal-umum1' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' style='margin-top:5%;'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-body'>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
                <p id='font_digital_2' style='font-size:24px;text-align:center;font-weight:bold;margin-top:10px;'>Our Wedding Venue</p>
				<p style='font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;text-align:center;'>
				    Tap one of the buttons below to show driving direction on your device
				    <a href='https://goo.gl/maps/6cJ88YDGSy6gRV1R8' target='blank' style='display:block;margin-top:10px;'>
				        <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>GOOGLE MAPS</button>
				    </a>
				    <a href='https://www.waze.com/id/live-map/directions/indonesia/sumatera-utara/hkbp-sei-agul?utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website&to=place.ChIJ4zrP9-AxMTAREJuCU9Te37o' target='blank' style='display:block;margin-top:10px;margin-bottom:20px;'>
				        <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>WAZE</button>
				    </a>
				</p>
				
            </div>
            <div class='col-md-12 ml-auto'>
                <!DOCTYPE html>
<html style='height:100%'>
  <head>
   
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<style>
      #map-canvas { height:350px;}
	</style>
    <script src="maps/api/js-1?key=AIzaSyDnoeeEmBRf90KfK7VVcQWwMUz43zGtE-Y&sensor=false" type="text/javascript"></script>
  </head>
	<body>
		
		<div id='map-canvas' style='border:1px solid #d3bdae;border-radius:5px;'>
		<iframe style='border-radius:5px;' width='100%' height='100%' frameborder='0' style='border:0' src='https://www.google.com/maps?q=3.6023128,98.6622063&hl=es;z=14&output=embed' allowfullscreen="">
		</iframe>
		</div>
			</body>
</html>

            </div>
            <div style='clear:both;display:block;'>
            <br>
            </div>
          </div>
        </div>
      </div>

	  <div class='modal fade bd-example-modal-lg' id='exampleModal-umum2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' style='margin-top:5%;'>
		<div class='modal-dialog' role='document'>
		  <div class='modal-content'>
			<div class='modal-body'>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				  <p id='font_digital_2' style='font-size:24px;text-align:center;font-weight:bold;margin-top:10px;'>Our Wedding Venue</p>
				  <p style='font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;text-align:center;'>
					  Tap one of the buttons below to show driving direction on your device
					  <a href='https://goo.gl/maps/SUmJ2AKJBA6ut5B37' target='blank' style='display:block;margin-top:10px;'>
						  <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>GOOGLE MAPS</button>
					  </a>
					  <a href='https://www.waze.com/en/live-map/directions/wisma-taman-sari-indah-kapten-muslim-medan?place=w.64618532.646513000.10433021&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website' target='blank' style='display:block;margin-top:10px;margin-bottom:20px;'>
						  <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>WAZE</button>
					  </a>
				  </p>
				  
			  </div>
			  <div class='col-md-12 ml-auto'>
				  <!DOCTYPE html>
  <html style='height:100%'>
	<head>
	 
	  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	  <style>
		#map-canvas { height:350px;}
	  </style>
	  <script src="maps/api/js-1?key=AIzaSyDnoeeEmBRf90KfK7VVcQWwMUz43zGtE-Y&sensor=false" type="text/javascript"></script>
	</head>
	  <body>
		  
		  <div id='map-canvas' style='border:1px solid #d3bdae;border-radius:5px;'>
		  <iframe style='border-radius:5px;' width='100%' height='100%' frameborder='0' style='border:0' src='https://www.google.com/maps?q=3.5982808,98.6459311&hl=es;z=14&output=embed' allowfullscreen="">
		  </iframe>
		  </div>
			  </body>
  </html>
  
			  </div>
			  <div style='clear:both;display:block;'>
			  <br>
			  </div>
			</div>
		  </div>
		</div>

		<div class='modal fade bd-example-modal-lg' id='exampleModal-tanggal1' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' style='margin-top:5%;'>
			<div class='modal-dialog' role='document'>
			  <div class='modal-content'>
				<div class='modal-body'>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					  <p id='font_digital_2' style='font-size:24px;text-align:center;font-weight:bold;margin-top:10px;'>Save The Date</p>
					  <p style='font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;text-align:center;'>
						  Tap one of the buttons below to save the date on your device
						  <a href='00.asset/calendar/riniyos.ics' target='blank' style='display:block;margin-top:10px;'>
							  <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>Apple Calendar</button>
						  </a>
						  <a href='00.asset/calendar/riniyos_android.ics' target='blank' style='display:block;margin-top:10px;'>
							<button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>Android Calendar <p>(Download → Open)</p></button>
						</a>
						  <a href='https://www.google.com/calendar/render?action=TEMPLATE&text=Yos+%26+Rini+Wedding+Day%F0%9F%A4%B5%F0%9F%A4%8D%F0%9F%91%B0&details=Hai%21+Semoga+kamu+bisa+hadir+ya%F0%9F%98%81%0AStay+Healthy%F0%9F%98%87&location=HKBP+Sei+Agul%2C+Jl.+Gereja+No.42%2C+Sei+Agul%2C+Kec.+Medan+Bar.%2C+Kota+Medan%2C+Sumatera+Utara+20117%2C+Indonesia&dates=20211112T030000Z%2F20211112T090000Z' target='blank' style='display:block;margin-top:10px;margin-bottom:20px;'>
							  <button style='font-size:12px; letter-spacing:4px; font-family: Montserrat, sans-serif;background-color:#d3bdae; width:100%; color:#ffffff; padding-top:10px;padding-bottom:10px;border-radius:25px;border:0px;'>Google Calendar</button>
						  </a>
					  </p>
					  
				  </div>
				  <div style='clear:both;display:block;'>
				  <br>
				  </div>
				</div>
			  </div>
			</div>
    
    
    <div class='modal fade' id='popupsi-' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel' style='font-size:20px;letter-spacing:1px;font-family: Montserrat, sans-serif;text-align:center;'>QRCODE RESERVATION</h5>
          </div>
          <div class='modal-body' style='text-align:center;'>
            <div id='cek'></div>
          </div>
          <div class='modal-footer'>
            
          </div>
        </div>
      </div>
    </div>
	
	