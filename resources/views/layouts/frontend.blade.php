<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        @yield('styles')
        <style>
            


        </style>
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-smX d-block fixed-top">

                <div class="top_global_nav container d-flex">
                    <div class="tg_start d-flex">
                        <a class="nav-link" target="_blank" href="http://kws.go.ke/">KWS Site</a>
                        <a class="nav-link" target="_blank" href="https://zuru-homes.herokuapp.com/">Places to Stay</a>
                        
                        <a class="tg-active nav-link" href="{{ url('/') }}">&mdash;{{ __('Get Involved') }}</a>
                    </div>
                    <div class="tg_end d-flex">

                            @guest
                            <!-- <li class="nav-item"> -->
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <!-- </li> -->
                            @if(Route::has('register'))

                            @endif

                            @else
                            <!-- <li class="nav-item dropdown"> -->
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">{{ __('My profile') }}</a>

                                    @can('user_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.userManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('permission_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.permissions.index') }}">
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                    @endcan
                                    @can('role_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.roles.index') }}">
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                    @endcan
                                    @can('user_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.users.index') }}">
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                    @endcan
                                    @can('basic_c_r_m_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.basicCRM.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_status_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-statuses.index') }}">
                                        {{ trans('cruds.crmStatus.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_customer_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-customers.index') }}">
                                        {{ trans('cruds.crmCustomer.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_note_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-notes.index') }}">
                                        {{ trans('cruds.crmNote.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_document_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-documents.index') }}">
                                        {{ trans('cruds.crmDocument.title') }}
                                    </a>
                                    @endcan
                                    @can('content_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.contentManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('content_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-categories.index') }}">
                                        {{ trans('cruds.contentCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('content_tag_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-tags.index') }}">
                                        {{ trans('cruds.contentTag.title') }}
                                    </a>
                                    @endcan
                                    @can('content_page_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-pages.index') }}">
                                        {{ trans('cruds.contentPage.title') }}
                                    </a>
                                    @endcan
                                    @can('user_alert_access')
                                    <a class="dropdown-item" href="{{ route('frontend.user-alerts.index') }}">
                                        {{ trans('cruds.userAlert.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.contactManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_company_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.contact-companies.index') }}">
                                        {{ trans('cruds.contactCompany.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_contact_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.contact-contacts.index') }}">
                                        {{ trans('cruds.contactContact.title') }}
                                    </a>
                                    @endcan
                                    @can('campaign_access')
                                    <a class="dropdown-item" href="{{ route('frontend.campaigns.index') }}">
                                        {{ trans('cruds.campaign.title') }}
                                    </a>
                                    @endcan
                                    @can('donation_access')
                                    <a class="dropdown-item" href="{{ route('frontend.donations.index') }}">
                                        {{ trans('cruds.donation.title') }}
                                    </a>
                                    @endcan
                                    @can('transaction_access')
                                    <a class="dropdown-item" href="{{ route('frontend.transactions.index') }}">
                                        {{ trans('cruds.transaction.title') }}
                                    </a>
                                    @endcan
                                    @can('product_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.productManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('product_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.product-categories.index') }}">
                                        {{ trans('cruds.productCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('product_tag_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.product-tags.index') }}">
                                        {{ trans('cruds.productTag.title') }}
                                    </a>
                                    @endcan
                                    @can('product_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.products.index') }}">
                                        {{ trans('cruds.product.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.faqManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.faq-categories.index') }}">
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_question_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.faq-questions.index') }}">
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a>
                                    @endcan
                                    @can('adoption_access')
                                    <a class="dropdown-item" href="{{ route('frontend.adoptions.index') }}">
                                        {{ trans('cruds.adoption.title') }}
                                    </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            <!-- </li> -->
                            @endguest

                        <a class="nav-link header__buttonX buttonX btn btn-primary" href="{{ url('/corporate') }}#donate"><i class="fas fa-heart"></i> {{ __('Donate Online ') }}</a>
                    </div>
                </div>


                <div class="container d-flex">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- <img alt="KWS (@kwskenya) | Twitter" class="n3VNCb" src="/img/kws-logo.png" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="width: 127px; height:45px; margin: 0px;"> -->
                        <img alt="KWS (@kwskenya) | Twitter" class="n3VNCb" src="/img/white-kws-logo.png" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-autoX main-app-nav">
                            @guest
                             <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>            
                            <li class="dropdown">
                                <a id="dropdownMenu3" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Adopt an Animal') }} <span class="caret"></span></a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <a class="dropdown-item " href="{{ route('adobt-programe') }}">
                                        {{ __('Adoption Programme') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('adopt') }}">
                                        {{ __('Adopt an Animal') }}
                                    </a> 
                                      <a class="dropdown-item" href="{{ route('tembo-festival') }}">
                                        {{ __('Tembo Naming') }}
                                    </a> 
                                     
                                <a class="dropdown-item" href="{{ route('faq') }}">{{ __("FAQ's") }}</a>
                           
                                </div>
                            </li>
                               <li class="dropdown">
                                <a id="dropdownMenu3" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Other Ways to give') }} <span class="caret"></span></a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <a class="dropdown-item " href="{{ route('endoment-fund') }}">
                                        {{ __('Wildlife Conservation trust fund ') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('corporate') }}">
                                        {{ __('Corporate giving') }}
                                    </a> 
                                      <a class="dropdown-item" href="{{ route('corporate') }}#donate">
                                        {{ __('Unrestricted Donations') }}
                                    </a> 
                                     
                                
                                </div>
                            </li>
                                                                                    
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('corporate') }}">{{ __('Shop') }}</a>
                            </li>
                          
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                            @endguest
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
<!--                             @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))

                            @endif

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">{{ __('My profile') }}</a>

                                    @can('user_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.userManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('permission_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.permissions.index') }}">
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                    @endcan
                                    @can('role_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.roles.index') }}">
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                    @endcan
                                    @can('user_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.users.index') }}">
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                    @endcan
                                    @can('basic_c_r_m_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.basicCRM.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_status_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-statuses.index') }}">
                                        {{ trans('cruds.crmStatus.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_customer_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-customers.index') }}">
                                        {{ trans('cruds.crmCustomer.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_note_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-notes.index') }}">
                                        {{ trans('cruds.crmNote.title') }}
                                    </a>
                                    @endcan
                                    @can('crm_document_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.crm-documents.index') }}">
                                        {{ trans('cruds.crmDocument.title') }}
                                    </a>
                                    @endcan
                                    @can('content_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.contentManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('content_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-categories.index') }}">
                                        {{ trans('cruds.contentCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('content_tag_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-tags.index') }}">
                                        {{ trans('cruds.contentTag.title') }}
                                    </a>
                                    @endcan
                                    @can('content_page_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.content-pages.index') }}">
                                        {{ trans('cruds.contentPage.title') }}
                                    </a>
                                    @endcan
                                    @can('user_alert_access')
                                    <a class="dropdown-item" href="{{ route('frontend.user-alerts.index') }}">
                                        {{ trans('cruds.userAlert.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.contactManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_company_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.contact-companies.index') }}">
                                        {{ trans('cruds.contactCompany.title') }}
                                    </a>
                                    @endcan
                                    @can('contact_contact_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.contact-contacts.index') }}">
                                        {{ trans('cruds.contactContact.title') }}
                                    </a>
                                    @endcan
                                    @can('campaign_access')
                                    <a class="dropdown-item" href="{{ route('frontend.campaigns.index') }}">
                                        {{ trans('cruds.campaign.title') }}
                                    </a>
                                    @endcan
                                    @can('donation_access')
                                    <a class="dropdown-item" href="{{ route('frontend.donations.index') }}">
                                        {{ trans('cruds.donation.title') }}
                                    </a>
                                    @endcan
                                    @can('transaction_access')
                                    <a class="dropdown-item" href="{{ route('frontend.transactions.index') }}">
                                        {{ trans('cruds.transaction.title') }}
                                    </a>
                                    @endcan
                                    @can('product_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.productManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('product_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.product-categories.index') }}">
                                        {{ trans('cruds.productCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('product_tag_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.product-tags.index') }}">
                                        {{ trans('cruds.productTag.title') }}
                                    </a>
                                    @endcan
                                    @can('product_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.products.index') }}">
                                        {{ trans('cruds.product.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_management_access')
                                    <a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.faqManagement.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_category_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.faq-categories.index') }}">
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a>
                                    @endcan
                                    @can('faq_question_access')
                                    <a class="dropdown-item ml-3" href="{{ route('frontend.faq-questions.index') }}">
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a>
                                    @endcan
                                    @can('adoption_access')
                                    <a class="dropdown-item" href="{{ route('frontend.adoptions.index') }}">
                                        {{ trans('cruds.adoption.title') }}
                                    </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest -->
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4s">
                @if(session('message'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                </div>
                @endif
                @if(isset($errors)&& $errors->count() > 0)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @yield('content')
            </main>
        </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> KWS Donations</h2>

              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate fadeInUp ftco-animated"><a href="https://twitter.com/kwskenya?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate fadeInUp ftco-animated"><a href="https://web.facebook.com/KenyaWildlifeService/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate fadeInUp ftco-animated"><a href="https://www.instagram.com/kenyawildlifeservice/"><span class="icon-instagram"></span></a></li>

              </ul>

            </div>
			<a class="navbar-brand" href="/">
    <img class="ftco-animate fadeInUp ftco-animated" src="/images/kws-logo2.png" alt="">
  </a> <br>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">

			  
				  <li><a href="http://www.kws.go.ke/content/park-rules" class="py-2 d-block">Terms and Conditions</a></li>
              </ul>
            </div>

          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
			  <li><a href="http://www.kws.go.ke/content/faq" class="py-2 d-block">FAQ</a></li>
				  <li><a href="http://www.kws.go.ke/about-us/about-us" class="py-2 d-block">About</a></li>
				  <li><a href="http://www.kws.go.ke/contact-us" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text"> Langata RD, Nairobi, Kenya</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text"> +254 708 191 522, 0775 912 933, Toll free: 0800 597 000</span></a></li>
	                <li><a href="mailto:rmevents@kws.go.ke"><span class="icon fa fa-envelope"></span><span class="text"> rmevents@kws.go.ke</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
          </div>
        </div>
      </div>
    </footer>    
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    @yield('scripts')

</html>