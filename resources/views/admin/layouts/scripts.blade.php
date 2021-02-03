<script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
	<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
    {{-- sweet alert --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Calender --}}
    <script src="{{ asset('js/dashboard/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/fullcalendar-init.js') }}"></script>


	<!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('js/custom_js/script.js') }}"></script>

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},
					991:{
						items:2
					},

					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},

					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>
