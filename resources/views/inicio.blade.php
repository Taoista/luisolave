<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="es"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Luis Ollave</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">  
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">     
   <link rel="stylesheet" href="{{ asset('assets/css/tao.css') }}">     
   <!-- script
   ================================================== -->   
	<script src="{{ asset('assets/js/modernizr.js') }}"></script>
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	
   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
	{{-- * notiffcaciones --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	@livewireStyles
</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">KARDS</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Inicio</a></li>
						<li><a class="smoothscroll"  href="#about" title="">Acerca de mi</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						<li><a href="styles.html" title="">Style Demo</a></li>				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>Hola, Soy Alberto Olave.</h1>

	   			<p class="intro-position">
	   				<span>Software Developer</span>
	   				<span>Web / Movil</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">Mas de mi</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://www.facebook.com/taoista.olave.1"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://www.instagram.com/alberto_olave73/"><i class="fa fa-instagram"></i></a></li>
         {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
         <li><a href="#"><img style="width:24px" src="{{ asset('assets/images/threads-wgiute.svg') }}" alt=""></a></li>
         {{-- <li><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Acerca de mi</h5>
   			<h1>Permíteme presentarme.</h1>

   			<div class="intro-info">

   				<img src="{{ asset('assets/images/profile-pic.jpg') }}" alt="Luis Olave ">

   				<p class="lead">
					Soy Luis Olave, un desarrollador con más de 12 años de experiencia. Me enfoco en brindar soluciones creativas y efectivas que ayuden a mejorar la presencia en 
					línea de mis clientes y alcanzar sus metas comerciales. Si tienes preguntas o te gustaría saber más sobre mi trabajo, no dudes en contactarme.
				</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Perfil</h3>
   			{{-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p> --}}

   			<ul class="info-list">
   				<li>
   					<strong>Nombre:</strong>
   					<span>Luis Olave C.</span>
   				</li>
   				<li>
   					<strong>Fecha de Nacimiento</strong>
   					<span>16 de Enero, 1988</span>
   				</li>
   				<li>
   					<strong>Trabajo:</strong>
   					<span>Developer Software</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>luis.olave.cl</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>contacto@luisolave.cl</span>
   					<span>luis.olave.carvajal@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Habilidades</h3>
   			{{-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p> --}}

				<ul class="skill-bars">
                    @foreach ($skills as $item )
                    <li>
                        <div class="progress percent{{ $item->complete }}"><span>{{ $item->complete."%" }}</span></div>
                        <strong>{{ strtoupper($item->nombre) }}</strong>
                    </li>
                    @endforeach
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Contactame" class="button stroke smoothscroll">Contactame</a>
   			<a href="#" title="Descarga CV" class="button button-primary">Descarga CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resumen</h5>
   			<h1>Un Poco mas de mi.</h1>

   			<p class="lead">Con una sólida experiencia en desarrollo de software, he trabajado en proyectos desafiantes, aplicando habilidades en programación y resolución de problemas para entregar soluciones de calidad</p>

   		</div>   		
   	</div> <!-- /section-intro--> 


   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Experiencia Laboral</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">
				@foreach ($trabajos AS $item )
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>

					<div class="timeline-header">
						<h3>{{ $item->cargo }}</h3>
						<p>{{ $item->fecha }}</p>
					</div>

					<div class="timeline-content">
						<h4>{{ $item->empresa }}</h4>
						<p>{{ $item->texto }}</p>
					</div>
			 	</div> 
				@endforeach
	   		

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		

	   <div class="row resume-timeline">

		<div class="col-twelve resume-header">

			<h2>Experiencia</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">
				@foreach ($estudios as $item)
					
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>

					<div class="timeline-header">
						<h3> {{ $item->titulo }} </h3>
						<p> {{ $item->fecha }} </p>
					</div>

					<div class="timeline-content">
						<h4> {{ $item->institucion }} </h4>
						<p> {{ $item->texto }} </p>
					</div>
				</div> <!-- /timeline-block -->

				@endforeach

			</div> <!-- /timeline-wrap -->   			

		</div> <!-- /col-twelve -->
		
	</div> <!-- /resume-timeline -->


	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   		</div>   		
   	</div> <!-- /section-innt-layout.jpgtro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/nt-layout.jpg') }}" alt="neumatruck.cl">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">Neumatruck.cl</h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  web
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/shutterbug.jpg') }}" alt="Shutterbug">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Shutterbug</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Web Design
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/clouds.jpg') }}"alt="Clouds">
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Clouds</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Web Design
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/beetle.jpg') }}" alt="Beetle">
	                  <a href="#modal-04" class="overlay">                  	                 
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Beetle</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Branding
		     					      </span>		     		
		     					   </div>  	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->     

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/lighthouse.jpg') }}" alt="Lighthouse">
	                  <a href="#modal-05" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Lighthouse</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Web Development
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('assets/images/portfolio/salad.jpg') }}" alt="Salad">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Salad</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Branding
		     					      </span>		     		
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->   

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{ asset('assets/images/portfolio/modals/m-liberty.jpg') }}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Liberty</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Development</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Shutterbug</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Design</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{ asset('assets/images/portfolio/modals/m-clouds.jpg') }}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Clouds</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Design</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{ asset('assets/images/portfolio/modals/m-beetle.jpg') }}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Beetle</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Branding</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-04 -->

				   <div id="modal-05" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{ asset('assets/images/portfolio/modals/m-lighthouse.jpg') }}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Lighthouse</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Development</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{ asset('assets/images/portfolio/modals/m-salad.jpg') }}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Salad</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Branding</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-06 -->


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	<!-- CTA Section
   ================================================== -->
	<section id="cta" class="grey-section">

   	<div class="row cta-content">

   		<div class="col-twelve section-ads">  

	     		<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Tre comiendo.</a></h2>

		      <p class="lead">
		      Te puedo asesorar servicios <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>Contrato de servicios o Fijos</span></a>.
				Contactame <span>y Veamos</span> Como te puedo ayudar<span></span>. 
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				{{-- <div class="action">
			      <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		      </div>		     	 --}}

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 

	
	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Servicios</h5>
   			<h1>Que puedo hacer por ti?</h1>

   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            
	            <div class="service-content">	
	            	 <h3>Webdesign</h3>
		            <p class="desc">
						Como diseñador web con varios años de experiencia, me especializo en crear y mejorar sitios web estéticamente atractivos y altamente funcionales. Tengo un profundo conocimiento de las últimas tendencias y tecnologías en diseño web, incluyendo HTML5, CSS3, JavaScript, y las mejores prácticas de UX/UI. Mi enfoque estratégico y mi pasión por el diseño detallado y la experiencia del usuario me permiten construir soluciones web personalizadas que satisfacen las necesidades de los clientes y proporcionan experiencias de usuario excepcionales.
	         		</p>
	         	</div> 	         	 
				</div> <!-- /service -->

				<div class="service">	
				<span class="icon"><i class="icon-window"></i></span>                          
	            <div class="service-content">	
	            	<h3>Web Development</h3>  
		            <p class="desc">
						Como desarrollador web experimentado, me especializo en construir y optimizar sitios web completos y aplicaciones web interactivas utilizando una variedad de lenguajes de programación y tecnologías, incluyendo PHP, Python y Laravel. Mi sólido conocimiento en desarrollo front-end y back-end, junto con mi habilidad para pensar críticamente y resolver problemas, me permite crear soluciones web robustas, eficientes y escalables que cumplen con los requisitos de los proyectos y mejoran la experiencia del usuario.
	         		</p>
	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">
			   	<span class="icon"><i class="icon-mobile"></i></span>		            
	            <div class="service-content">
	            	<h3>Mobil Development</h3>
		            <p class="desc">
						Como desarrollador de aplicaciones móviles, poseo un sólido conocimiento en Flutter y Dart, con experiencia en la creación de aplicaciones eficientes para iOS y Android. Me especializo en el desarrollo de soluciones móviles de alto rendimiento, con un fuerte enfoque en la calidad del código y la experiencia del usuario, trabajando efectivamente en entornos de equipo ágiles y resolviendo problemas complejos.
	        		</p> 
	            </div> 	            	               

			</div> <!-- /service -->

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							700
						</h3>

						<h5 class="stat-title">
							Proyectos Terminados
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							300
						</h3>

						<h5 class="stat-title">
							Clientes Felices
						</h5>

					</div> <!-- /stat -->

					{{-- <div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							200
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->									 --}}

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							25
						</h3>

						<h5 class="stat-title">
							Ideas Locas
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Tazas de café
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Horas
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contacto</h5>
   			<h1>Me Contactare pronto</h1>

   			<p class="lead">
				¡Hola! Gracias por tu interés. Me encantaría ponerme en contacto contigo. Para ello, te pedimos que completes el siguiente formulario con tus datos:
			</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		@livewire("contacto")
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            1600 Amphitheatre Parkway<br>
            Mountain View, CA<br>
            94043 US
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>someone@kardswebsite.com<br>
			   	info@kardswebsite.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+63) 555 1212<br>
			   	Mobile: (+63) 555 0100<br>
			     	Fax: (+63) 555 0101
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
  
   <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ asset('assets/js/plugins.js') }}"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   {{-- <script>
	</script> --}}
   @livewireScripts
   
   @yield('content-script')
   @stack("scripts")

</body>

</html>