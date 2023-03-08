
<?php $__env->startSection('content'); ?>
    <section class="section promo-primary">
        <picture>
            <source srcset="img/kws-Rhino.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/kws-Rhino.jpg"
                alt="img">
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Donate to</span>
                            <h1 class="promo-primary__title"><span>Wildlife Conservation </span> <span> trust fund</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section donation-details">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <h3 class="donation-details__title"><strong>Elephant</strong> protection</h3>

                    <div class="donation-details__img"><img class="imgbg" src="img/donation-details_img.jpg"
                            alt="img"></div>
                    <p></p>
                    <p></p>
                    <p>Cognizant of the fact that we protect a unique resource, KWS has established <strong>The Wildlife
                            Conservation trust fund</strong> - a conservation endowment fund that will protect Kenya’s
                        wildlife from future vagaries beyond our control.</p>
                    <p>Kenya is a destination famous for its flora and fauna. With over 800 rhinos, 33,000 elephants, 2400
                        African lions, 1,000 leopards and countless buffaloes; Kenya is arguably the ‘true’ home of the big
                        five. Add to that glitter the 7th wonder of the world in the breathtaking Maasai Mara game reserve!
                    </p>
                    <p>Our endowed country ranks second highest among African countries in bird and mammal species richness
                        with our marine ecosystem hailed the world over. Yet these bragging rights depend on what we as a
                        country must do. The risk of losing it all has never been so stark real.</p>
                    <p>The Trust Fund’s supreme objective is to provide a sustainable source of funding for wildlife
                        conservation and its habitats to benefit present and future generations.</p>
                    <h3 class="donation-details__title"><strong>Help keep wildlife alive in the 21st century and
                            beyond!</strong> DONATE</h3>

                </div>
            </div>
            <div class="container theme-background-white main-body">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadows sm:rounded-lg">

                    <div class="col-md-12 ml-12">
                        <div class="row donate-bar">
                            <div class="col-md-4 theme-dark">
                                GIVE WHERE NEEDED MOST
                            </div>
                            <div class="col-md-8">
                                <ul class="nav navbar-nav navbar-left donate-buttons" id="donate-buttons">
                                    <li><a href="#">
                                            <button class="btn-blue active" data-dollars='25'
                                                data-impact="Helps to keep wildlife alive in the 21st century and beyond">
                                                $25
                                            </button>
                                        </a></li>
                                    <li><a href="#">
                                            <button class="btn-blue" data-dollars='50'
                                                data-impact="Helps to keep wildlife alive in the 21st century and beyond">
                                                $50
                                            </button>
                                        </a></li>
                                    <li><a href="#">
                                            <button class="btn-blue" data-dollars='100'
                                                data-impact="Helps to keep wildlife alive in the 21st century and beyond">
                                                $100
                                            </button>
                                        </a></li>
                                    <li><a href="#">
                                            <button class="btn-blue" data-dollars='500'
                                                data-impact="Helps to keep wildlife alive in the 21st century and beyond">
                                                $500
                                            </button>
                                        </a></li>
                                    <li id="other"><a href="#">
                                            <button class="btn-blue-other" data-dollars='other' data-impact="Thank you!">
                                                OTHER
                                            </button>
                                        </a>
                                    </li>
                                    <li id="other-input">
                                        <span>$</span>
                                        <input data-impact="That’s great. Thank you!">
                                    </li>
                                    <li><a href="#">
                                            <button class="btn-green" data-toggle="modal" data-target="#myModal">
                                                DONATE
                                            </button>
                                        </a></li>
                                    <li style="display: none;"><a href="#">
                                            LEARN MORE<i class="fa fa-chevron-right margin-left"></i>
                                        </a></li>
                                </ul>
                                <p class="impact">
                                    Helps in conservation work
                                </p>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header well text-center theme-background-green">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span
                                                        class="sr-only">Close</span></button>
                                                <h2>You’re Donating:</h2>
                                                <h1 style="font-size: 5.5em; margin-top: 0;">$<span id="price"></span>
                                                </h1>
                                                <em>Thank you!</em>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <section class="col-md-12">
                                                        <form method="POST" action="/funddonate"
                                                            enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <fieldset class="col-md-12 ml-6">
                                                                <legend>
                                                                    Your personal info
                                                                </legend>
                                                                <label>First Name</label>
                                                                <input type="string" name="first_name"
                                                                    class="form-control">
                                                                <label>Last Name</label>
                                                                <input type="string" name="last_name" class="form-control">
                                                                <label>Your email</label>
                                                                <input type="email" name="email" class="form-control">
                                                                <label>Address</label>
                                                                <input type="text" name="address" class="form-control">
                                                                <label>City, State, Zip Code</label>
                                                                <input type="text" name="location" class="form-control">
                                                                <input id="bacon" type="hidden" class="bacon"
                                                                    value="" name="amount">
                                                                <input id="curr" type="hidden" class="bacon"
                                                                    value="USD" name="currency">
                                                                <?php if(config('services.recaptcha.key')): ?>
                                                                    <div class="g-recaptcha"
                                                                        data-sitekey="<?php echo e(config('services.recaptcha.key')); ?>">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </fieldset>


                                                    </section>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">BACK</button>
                                                <button type="submit" class="btn-green">CONTINUE</button>
                                            </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div>
                        <!--/.donate-bar-->
                    </div><!-- /.col-md-12 -->
                </div>


            </div>
        </div>


    </section>
    <section class="section">

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\kws_donate\resources\views/fund.blade.php ENDPATH**/ ?>