<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../"><!--end::Base Path -->
	    <meta charset="utf-8"/>
		<title></title>
	    <meta name="description" content="Updates and statistics">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <!--begin::Fonts -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        
	    <!--end::Fonts -->

	    <!--begin::Page Vendors Styles(used by this page) -->
	     {{-- <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />  <!-- Calendario --> --}}
	    <!--end::Page Vendors Styles -->
	        
	    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

	    <!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" /> <!-- Scroll -->
		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		{{-- <link href="{{ asset('assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />  <!-- Juntar elementos --> --}}
		<link href="{{ asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" /> <!-- Fechas -->
		<link href="{{ asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" /> <!-- Fechas -->
		<link href="{{ asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" /> <!-- Hora -->
		<link href="{{ asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" /> <!-- Rango de fechas -->
		{{-- <link href="{{ asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" /> <!-- para aumentar o disminuir con flechas o maus --> --}}
		<link href="{{ asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" /> <!-- Inputs de select -->
		{{-- <link href="{{ asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" /> <!-- Activas o desactivar checkbox--> --}}
		<link href="{{ asset('assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />  <!-- Estilos para select-->
		{{-- <link href="{{ asset('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" /> <!-- Carrusel para slider --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" /> <!-- Carrusel para slider --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />  <!-- Arrastrar y soltar --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/@yaireo/tagify/dist/tagify.css') }}" rel="stylesheet" type="text/css" /> <!-- Select de etiquetas --> --}}
		<link href="{{ asset('assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />  <!-- Animacion -->
		{{-- <link href="{{ asset('assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" /> <!-- Notificaciones --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/dual-listbox/dist/dual-listbox.css') }}" rel="stylesheet" type="text/css" /> <!-- Lista doble --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />  <!-- Graficas --> --}}
		{{-- <link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" /> <!-- Alertas --> --}}
		<link href="{{ asset('assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" /> <!-- Iconos -->
		<link href="{{ asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" /> <!-- Iconos -->
		<link href="{{ asset('assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" /> <!-- Iconos -->
		<link href="{{ asset('assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" /> <!-- Iconos -->
		<link href="{{ asset('assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" /> <!-- Iconos -->
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	    <!--end::Global Theme Styles -->

	    <!--begin::Layout Skins(used by all pages) -->
	        
		<link href="{{ asset('assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />        
		<!--end::Layout Skins -->
		@yield('css')

	    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
    	<!-- begin:: Page -->
		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
			<div class="kt-header-mobile__logo">
				<a href="demo1/index.html">
					<img alt="Logo" src="./assets/media/logos/logo-light.png"/>
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>
		<!-- end:: Header Mobile -->	
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						
						<div class="kt-aside__brand-logo">
							<a href="demo1/index.html">
								<img alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}"/>
							</a>
						</div>

						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        									<polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        									<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        									<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    									</g>
									</svg>
								</span>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        									<polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        									<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
        									<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
    									</g>
									</svg>
								</span>
							</button>
						</div>
					</div>
					<!-- end:: Aside -->	
					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">		
		
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" >
									<a  href="#" class="kt-menu__link ">
										<span class="kt-menu__link-icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        											<polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
        											<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"/>
        											<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"/>
    											</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Dashboard</span>
									</a>
								</li>
            					<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
            						<a  href="{{ route('proyecto.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Proyectos</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('empleado.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Empleados</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('gasto.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Gastos</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('producto.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Producto</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('empleo.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Empleos</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('producto.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Usuarios</span>
									</a>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
									<a  href="{{ route('empleado-proyecto.index'); }}" class="kt-menu__link kt-menu__toggle">
	            						<span class="kt-menu__link-icon">
	            							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
	    										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	        										<rect id="bound" x="0" y="0" width="24" height="24"/>
	        										<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
	        										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
	    										</g>
											</svg>
										</span>
										<span class="kt-menu__link-text">Empleado-Proyecto</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end:: Aside Menu -->				
				</div>
				<!-- end:: Aside -->			
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
						
						<!-- begin:: Header Menu -->
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
			
						
						</div>
						<!-- end:: Header Menu -->		
						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">
				
							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">    
						        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
						            <div class="kt-header__topbar-user">
							            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hola,</span>
							            <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
							            <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg" />
							            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
							            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
						        	</div>
						    	</div>

			        			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
					        		<!--begin: Head -->
								    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url( {{ url('assets/media/misc/bg-1.jpg') }} )">
								        <div class="kt-user-card__avatar">
								            <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg" />
								            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
								            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
								        </div>
								        <div class="kt-user-card__name">
								            {{ Auth::user()->name }}
								        </div>
								    </div>
									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
									    <a href="demo1/custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
									        <div class="kt-notification__item-icon">
									            <i class="flaticon2-calendar-3 kt-font-success"></i>
									        </div>
									        <div class="kt-notification__item-details">
									            <div class="kt-notification__item-title kt-font-bold">
									                My Profile
									            </div>
									            <div class="kt-notification__item-time">
									                Account settings and more
									            </div>
									        </div>
									    </a>
									    <div class="kt-notification__custom kt-space-between">
									        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        		Salir
                                    		</a>
		                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                                        @csrf
		                                    </form>
									    </div>
									</div>
									<!--end: Navigation -->
			    				</div>
		    				</div>
							<!--end: User Bar -->	
						</div>
						<!-- end:: Header Topbar -->
					</div>
					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						@yield('header')
															
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!--Begin::Dashboard 1-->
							<!--Begin::Row-->
							<div class="row">
								
								@yield('content')
								

							</div>
							<!--End::Row-->							
							<!--End::Dashboard 1-->	
						</div>
						<!-- end:: Content -->				
					</div>				
				
					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
							</div>
							<div class="kt-footer__menu">
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>
					<!-- end:: Footer -->			
				</div>
			</div>
			<!-- end:: Page -->
	
			<!-- begin::Scrolltop -->
			<div id="kt_scrolltop" class="kt-scrolltop">
				<i class="fa fa-arrow-up"></i>
			</div>
			<!-- end::Scrolltop -->
		
	        <!-- begin::Global Config(global config for global JS sciprts) -->
	        <script>
	            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
	        </script>
	        <!-- end::Global Config -->

			<!--begin:: Global Mandatory Vendors -->
			<script src="{{ asset('assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>  <!-- JQuery-->
			<script src="{{ asset('assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script> <!-- Etiquetas  -->
			<script src="{{ asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script> <!-- Boostrap -->
			<script src="{{ asset('assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>  <!-- Creacion de cookies -->
			<script src="{{ asset('assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script> <!-- Formato de tiempo -->
			{{-- <script src="{{ asset('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script> <!-- Cuadro sobre el elemento --> --}}
			<script src="{{ asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script> <!-- scroll -->
			<script src="{{ asset('assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script> <!-- deja elementos anclados-->
			{{-- <script src="{{ asset('assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script> <!-- Formato para monedas--> --}}
			<!--end:: Global Mandatory Vendors -->

			<!--begin:: Global Optional Vendors -->
			<script src="{{ asset('assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script> <!-- Fechas -->
			<script src="{{ asset('assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script> <!-- Fechas -->
			<script src="{{ asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script> <!-- Fechas -->
			<script src="{{ asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script> <!-- Fechas -->
			<script src="{{ asset('assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script> <!-- Fechas -->
			<script src="{{ asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script> <!-- Fechas -->
			{{-- <script src="{{ asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script> <!-- para aumentar o disminuir con flechas o maus --> --}}
			<script src="{{ asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script> <!-- Contador de letras -->
			<script src="{{ asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script> <!-- Multi select  -->
			<script src="{{ asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script> <!-- Select --> 
			{{-- <script src="{{ asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script> <!-- checkbox --> --}}
			{{-- <script src="{{ asset('assets/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script> <!-- checkbox --> --}}
			<script src="{{ asset('assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script> <!-- Select -->
			<script src="{{ asset('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script> <!-- Motor de sugerencias -->
			<script src="{{ asset('assets/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script> <!-- llaves para imprimir -->
			<script src="{{ asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script> <!-- Para agregar informacion de cierta forma -->
			<script src="{{ asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script> <!-- Para agregar informacion de cierta forma -->
			<script src="{{ asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script> <!-- Para agregar informacion de cierta forma -->
			<script src="{{ asset('assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script> <!-- slider -->
			<script src="{{ asset('assets/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script> <!-- Ajusrar el cuadro de texto -->
			<script src="{{ asset('assets/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script> <!-- boton de copiar -->
			{{-- <script src="{{ asset('assets/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script> <!-- Arrastrar y soltar --> --}}
			{{-- <script src="{{ asset('assets/vendors/custom/js/vendors/dropzone.init.js') }}" type="text/javascript"></script> <!-- Arrastrar y soltar --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js') }}" type="text/javascript"></script> <!-- tags --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/@yaireo/tagify/dist/tagify.min.js') }}" type="text/javascript"></script> <!-- tags --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script> <!-- notificaciones --> --}}
			{{-- <script src="{{ asset('assets/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script> <!-- notificaciones --> --}}
			<script src="{{ asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script> <!-- Validador -->
			<script src="{{ asset('assets/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script> <!-- Para el validador -->
			<script src="{{ asset('assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script> <!-- Validador -->
			{{-- <script src="{{ asset('assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script> <!-- Notificaciones --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/dual-listbox/dist/dual-listbox.js') }}" type="text/javascript"></script> <!-- select dobles --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script> <!-- Graficas --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script> <!-- Graficas --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script> <!-- Graficas --> --}}
			<script src="{{ asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script> <!-- Para cerrar session o mantenerla -->
			<script src="{{ asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script> <!-- para cuando el usuario no hace ninguna interraccion -->
			{{-- <script src="{{ asset('assets/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script> <!-- agrega mas elementos --> --}}
			{{-- <script src="{{ asset('assets/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script> <!-- animacion de conteo --> --}}
			<script src="{{ asset('assets/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script> <!-- Promesas -->
			{{-- <script src="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script> <!-- alertas --> --}}
			{{-- <script src="{{ asset('assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script> <!-- alertas --> --}}
			<script src="{{ asset('assets/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script> <!-- funciones genericas  -->
			<script src="{{ asset('assets/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script> <!-- para inputs -->
			<script src="{{ asset('assets/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script> <!-- Para funciones asincronicas -->
			{{-- <script src="{{ asset('assets/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script> <!-- obtener valores de valor espesifico --> --}}
			<!--end:: Global Optional Vendors -->

			<!--begin::Global Theme Bundle(used by all pages) -->
	    	    	   
			<script src="{{ asset('assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>

			<script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script> <!--tablas -->
			<script src="{{ asset('assets/js/demo1/pages/crud/datatables/basic/headers.js') }}" type="text/javascript"></script> <!--tablas -->
			<!--end::Global Theme Bundle -->

	        <!--begin::Page Vendors(used by this page) -->
	        {{-- <script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script> <!-- Calendario --> --}}
	        {{-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> <!-- Maps --> --}}
	        {{-- <script src="{{ asset('assets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script> <!-- Maps --> --}}
	        <!--end::Page Vendors -->
	         
	        <!--begin::Page Scripts(used by this page) -->
	        <script src="{{ asset('assets/js/demo1/pages/dashboard.js') }}" type="text/javascript"></script>
	        <!--end::Page Scripts -->
	        @yield('js')
    </body>
    <!-- end::Body -->
</html>
