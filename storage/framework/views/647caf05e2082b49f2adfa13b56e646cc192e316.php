<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

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
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" />
        <?php echo $__env->yieldContent('styles'); ?>
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
                        
                        <a class="tg-active nav-link" href="<?php echo e(url('/')); ?>">&mdash;<?php echo e(__('Get Involved')); ?></a>
                    </div>
                    <div class="tg_end d-flex">

                            <?php if(auth()->guard()->guest()): ?>
                            <!-- <li class="nav-item"> -->
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            <!-- </li> -->
                            <?php if(Route::has('register')): ?>

                            <?php endif; ?>

                            <?php else: ?>
                            <!-- <li class="nav-item dropdown"> -->
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(route('frontend.profile.index')); ?>"><?php echo e(__('My profile')); ?></a>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.userManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.permissions.index')); ?>">
                                        <?php echo e(trans('cruds.permission.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.roles.index')); ?>">
                                        <?php echo e(trans('cruds.role.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.users.index')); ?>">
                                        <?php echo e(trans('cruds.user.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic_c_r_m_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.basicCRM.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_status_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-statuses.index')); ?>">
                                        <?php echo e(trans('cruds.crmStatus.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_customer_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-customers.index')); ?>">
                                        <?php echo e(trans('cruds.crmCustomer.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_note_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-notes.index')); ?>">
                                        <?php echo e(trans('cruds.crmNote.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_document_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-documents.index')); ?>">
                                        <?php echo e(trans('cruds.crmDocument.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.contentManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-categories.index')); ?>">
                                        <?php echo e(trans('cruds.contentCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_tag_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-tags.index')); ?>">
                                        <?php echo e(trans('cruds.contentTag.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-pages.index')); ?>">
                                        <?php echo e(trans('cruds.contentPage.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_alert_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.user-alerts.index')); ?>">
                                        <?php echo e(trans('cruds.userAlert.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.contactManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.contact-companies.index')); ?>">
                                        <?php echo e(trans('cruds.contactCompany.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_contact_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.contact-contacts.index')); ?>">
                                        <?php echo e(trans('cruds.contactContact.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.campaigns.index')); ?>">
                                        <?php echo e(trans('cruds.campaign.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('donation_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.donations.index')); ?>">
                                        <?php echo e(trans('cruds.donation.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.transactions.index')); ?>">
                                        <?php echo e(trans('cruds.transaction.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.productManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.product-categories.index')); ?>">
                                        <?php echo e(trans('cruds.productCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_tag_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.product-tags.index')); ?>">
                                        <?php echo e(trans('cruds.productTag.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.products.index')); ?>">
                                        <?php echo e(trans('cruds.product.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.faqManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.faq-categories.index')); ?>">
                                        <?php echo e(trans('cruds.faqCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.faq-questions.index')); ?>">
                                        <?php echo e(trans('cruds.faqQuestion.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('adoption_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.adoptions.index')); ?>">
                                        <?php echo e(trans('cruds.adoption.title')); ?>

                                    </a>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            <!-- </li> -->
                            <?php endif; ?>

                        <a class="nav-link header__buttonX buttonX btn btn-primary" href="<?php echo e(url('/corporate')); ?>#donate"><i class="fas fa-heart"></i> <?php echo e(__('Donate Online ')); ?></a>
                    </div>
                </div>


                <div class="container d-flex">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <!-- <img alt="KWS (@kwskenya) | Twitter" class="n3VNCb" src="/img/kws-logo.png" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="width: 127px; height:45px; margin: 0px;"> -->
                        <img alt="KWS (@kwskenya) | Twitter" class="n3VNCb" src="/img/white-kws-logo.png" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-autoX main-app-nav">
                            <?php if(auth()->guard()->guest()): ?>
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
                            </li>            
                            <li class="dropdown">
                                <a id="dropdownMenu3" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Adopt an Animal')); ?> <span class="caret"></span></a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <a class="dropdown-item " href="<?php echo e(route('adobt-programe')); ?>">
                                        <?php echo e(__('Adoption Programme')); ?>

                                    </a>

                                    <a class="dropdown-item" href="<?php echo e(route('adopt')); ?>">
                                        <?php echo e(__('Adopt an Animal')); ?>

                                    </a> 
                                      <a class="dropdown-item" href="<?php echo e(route('tembo-festival')); ?>">
                                        <?php echo e(__('Tembo Naming')); ?>

                                    </a> 
                                     
                                <a class="dropdown-item" href="<?php echo e(route('faq')); ?>"><?php echo e(__("FAQ's")); ?></a>
                           
                                </div>
                            </li>
                               <li class="dropdown">
                                <a id="dropdownMenu3" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Other Ways to give')); ?> <span class="caret"></span></a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <a class="dropdown-item " href="<?php echo e(route('endoment-fund')); ?>">
                                        <?php echo e(__('Wildlife Conservation trust fund ')); ?>

                                    </a>

                                    <a class="dropdown-item" href="<?php echo e(route('corporate')); ?>">
                                        <?php echo e(__('Corporate giving')); ?>

                                    </a> 
                                      <a class="dropdown-item" href="<?php echo e(route('corporate')); ?>#donate">
                                        <?php echo e(__('Unrestricted Donations')); ?>

                                    </a> 
                                     
                                
                                </div>
                            </li>
                                                                                    
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('corporate')); ?>"><?php echo e(__('Shop')); ?></a>
                            </li>
                          
                            <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('frontend.home')); ?>">
                                    <?php echo e(__('Dashboard')); ?>

                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
<!--                             <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>

                            <?php endif; ?>

                            <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(route('frontend.profile.index')); ?>"><?php echo e(__('My profile')); ?></a>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.userManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.permissions.index')); ?>">
                                        <?php echo e(trans('cruds.permission.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.roles.index')); ?>">
                                        <?php echo e(trans('cruds.role.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.users.index')); ?>">
                                        <?php echo e(trans('cruds.user.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic_c_r_m_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.basicCRM.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_status_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-statuses.index')); ?>">
                                        <?php echo e(trans('cruds.crmStatus.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_customer_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-customers.index')); ?>">
                                        <?php echo e(trans('cruds.crmCustomer.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_note_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-notes.index')); ?>">
                                        <?php echo e(trans('cruds.crmNote.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_document_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.crm-documents.index')); ?>">
                                        <?php echo e(trans('cruds.crmDocument.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.contentManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-categories.index')); ?>">
                                        <?php echo e(trans('cruds.contentCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_tag_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-tags.index')); ?>">
                                        <?php echo e(trans('cruds.contentTag.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.content-pages.index')); ?>">
                                        <?php echo e(trans('cruds.contentPage.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_alert_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.user-alerts.index')); ?>">
                                        <?php echo e(trans('cruds.userAlert.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.contactManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_company_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.contact-companies.index')); ?>">
                                        <?php echo e(trans('cruds.contactCompany.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_contact_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.contact-contacts.index')); ?>">
                                        <?php echo e(trans('cruds.contactContact.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.campaigns.index')); ?>">
                                        <?php echo e(trans('cruds.campaign.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('donation_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.donations.index')); ?>">
                                        <?php echo e(trans('cruds.donation.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.transactions.index')); ?>">
                                        <?php echo e(trans('cruds.transaction.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.productManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.product-categories.index')); ?>">
                                        <?php echo e(trans('cruds.productCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_tag_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.product-tags.index')); ?>">
                                        <?php echo e(trans('cruds.productTag.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.products.index')); ?>">
                                        <?php echo e(trans('cruds.product.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
                                    <a class="dropdown-item disabled" href="#">
                                        <?php echo e(trans('cruds.faqManagement.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.faq-categories.index')); ?>">
                                        <?php echo e(trans('cruds.faqCategory.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                                    <a class="dropdown-item ml-3" href="<?php echo e(route('frontend.faq-questions.index')); ?>">
                                        <?php echo e(trans('cruds.faqQuestion.title')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('adoption_access')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('frontend.adoptions.index')); ?>">
                                        <?php echo e(trans('cruds.adoption.title')); ?>

                                    </a>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                            <?php endif; ?> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4s">
                <?php if(session('message')): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert"><?php echo e(session('message')); ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($errors)&& $errors->count() > 0): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php echo $__env->yieldContent('content'); ?>
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
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php echo $__env->yieldContent('scripts'); ?>

</html><?php /**PATH C:\xampp\htdocs\LaravelProjects\kws_donate\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>