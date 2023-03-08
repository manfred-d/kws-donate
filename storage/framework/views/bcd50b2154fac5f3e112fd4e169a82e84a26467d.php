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
           body {
    font-family: "Nunito Sans",sans-serif;
    color: #333;
    min-height: 100vh;
    
    font-size: 16px;
    line-height: 1.5;
}

            .theme-blue {
        color: #427bb8;
      }
      .theme-orange {
        color: #cc851c;
      }
      .theme-green {
       color: #8ab042;
      }
      .theme-grey {
        color: #666666;
      }
      .theme-white {
        color: #fff;
      }
      .theme-background-blue {
        background-color: #427bb8;
        color: #fff;
      }
      .theme-background-orange {
        background-color: #cc851c;
        color: #fff;
      }
      .theme-background-green {
        background-color: #8ab042;
        color: #fff;
      }
      .theme-background-grey {
        background-color: #666666;
        color: #fff;
      }
      .theme-background-white {
        background-color: #fff;
        color: #4c4c4c;
      }
      .donate-bar {
        padding: 32px 23px 28px;
      }
      .donate-bar > div:first-child {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        border-right: 1px dotted #2a4f76;
        margin-top: 19px;
        font-size: 25px;
        padding: 0;
      }
      .donate-buttons>li>a {
        font-size: 17px;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        position: relative;
        display: block;
        padding: 10px 3px;
        border-radius: 5px;
      }
      .btn-blue-other,
      .btn-blue {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        background-color: #329a94;
        color: #fff;
        border-radius: 5px;
        border: 0;
        padding: 0;
        width: 75px;
        height: 37px;
        margin-top: 8px;
      }
      .btn-green {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        background-color: #8ab042;
        color: #fff;
        border-radius: 5px;
        border: 0;
        padding: 0;
        width: 114px;
        height: 37px;
        margin-top: 8px;
      }
      #other-input {
        display: none;
      }
      #other-input input {
        position: relative;
        font-weight: bold;
        background-color: #fff;
        color: #427bb8;
        border-radius: 5px;
        border: 0;
        border: 5px solid #427bb8;
        padding: 0 0 3px 15px;
        width: 75px;
        height: 37px;
        margin: 18px 3px 0;
      }
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
       margin: 0; 
      }
      #other-input span {
        font-family: inherit;
        font-weight:bold;
        color: #427bb8;
        position: absolute;
        padding: 23px 12px;
        z-index: 10;
        pointer-events: none;
      }
      .impact {
        font-size: 1.1em;
        font-weight: bold;
        clear: both;
      }
      .nav>li>a:hover, .nav>li>a:focus {
        text-decoration: none;
        background-color: transparent;
      }
      .donate-buttons .active {
        background-color: #fff;
        border: 5px solid #0b0b0c;
        color: #0b0b0c;
      }
      .donate-buttons:focus {
      outline: -webkit-focus-ring-color auto 0px;
      }
      .donate-buttons li:last-child {
        font-size: 17px;
        line-height: 37px;
        padding-left: 20px;
        padding-top: 15px;
      }
   ul#donate-buttons {
    display: -webkit-inline-box;
}
section.section {
    position: relative;
    z-index: 0;
    padding: 70px 0;
}
.color--white {
    color: #fff!important;
}
.button--primary {
    border: 2px solid #fdd340;
}
.img--bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position:  center;
    font-family: "object-fit: cover; object-position: top center";
    z-index: -1;
}
.heading__pre-title {
    display: inline-block;
    color: #848484;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.heading__title {
    letter-spacing: -.030em;
    margin-bottom: 20px;
    font-size: 32px;
    text-transform: uppercase;
}
.header-f4 .header__button {
    margin-left: 10px;
}
.header__button {
    /* display: none; */
    color: white !important;
    font-size: 14px;
    line-height: 68px;
    font-weight: 700;
    text-transform: uppercase;
    background: crimson;
    height: 59px;
    width: 174px;
    text-align: center;
    margin-left: -1px;
    padding: 0 30px;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    /* color: white; */
}
.promo-primary {
    position: relative;
    overflow: hidden;
    font-family: Quicksand,sans-serif;
}

.align-container {
    display: table;
    width: 100%;
}
.promo-primary__pre-title {
    display: inline-block;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 5px;
}
.promo-primary__title {
    position: relative;
    color: #fff;
    font-size: 36px;
    line-height: 50px;
    letter-spacing: -.050em;
    text-transform: uppercase;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

@media  only screen and (min-width: 1200px){
section.section {
    padding: 140px 0;
}}
section.section.promo-primary {
    top: 0px;
}
.button--primary {
    border: 2px solid #fdd340;
}
.donation-item .button {
    margin-top: 19px;
}
.buttons {
    display: inline-block;
    color: #333;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    padding: 13px 45px;
    letter-spacing: .050em;
    text-decoration: none;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
}
.donation-details__img {
    position: relative;
}

img.imgbg {
    width: 100%;
    max-height: 50% !important;
}
.modal-backdrop {
    position: inherit !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}

.form__field {
    position: relative;
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e1e1e1;
    margin-bottom: 30px;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-transition: border .3s;
    -o-transition: border .3s;
    transition: border .3s;
}
.form__submit {
    display: inline-block;
    border: 2px solid #fdd340;
    border-radius: 0;
    background: 0 0;
    font-weight: 700;
    padding: 16px 70px;
    -webkit-transition: background .3s;
    -o-transition: background .3s;
    transition: background .3s;
}
.form__submit:hover {
    background: #fdd340;
}
.buttons {
    display: inline-block;
    color: white;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    padding: 13px 45px;
    letter-spacing: .050em;
    text-decoration: none;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
}
.button--primary {
    border: 2px solid #fdd340;
}
        </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                       <img alt="KWS (@kwskenya) | Twitter" class="n3VNCb" src="/img/kws-logo.png" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="width: 127px; height:45px; margin: 0px;">
               
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <?php if(auth()->guard()->guest()): ?>
                         <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Adopt an Animal')); ?></a>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('endoment-fund')); ?>"><?php echo e(__('Endowment Fund')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('corporate')); ?>"><?php echo e(__('Corporate Donations')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Other Ways to give')); ?></a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link header__button button button-green" href="<?php echo e(route('login')); ?>"><?php echo e(__('Donate Online ')); ?></a>
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
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
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
                        <?php endif; ?>
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
            <?php if($errors->count() > 0): ?>
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

</html><?php /**PATH C:\wamp64\www\kws-donate\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>