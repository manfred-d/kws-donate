<?php $__env->startSection('content'); ?>
<section class="section promo-primary">
    <picture>
        <source srcset="img/donation.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/donation.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">Donate to</span>
                        <h1 class="promo-primary__title"><span>Corporate </span> <span>Donations</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row offset-70">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="img/donation_1.jpg" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#">SAFE: Saving Animals From Extinction</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat voluptatum labore suscipit saepe ipsa repudiandae vel beatae vitae at, officia veritatis nobis exercitationem dolores cum magnam velit autem. Aperiam dolor facilis impedit illo voluptates reprehenderit natus eius eligendi enim. Aperiam dolor facilis impedit illo voluptates.</p><a class="button button--primary" href="#">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="img/donation_2.jpg" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#">Conservation Grants Fund (CGF)</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat voluptatum labore suscipit saepe ipsa repudiandae vel beatae vitae at, officia veritatis nobis exercitationem dolores cum magnam velit autem. Aperiam dolor facilis impedit illo voluptates reprehenderit natus eius eligendi enim. Aperiam dolor facilis impedit illo voluptates.</p><a class="button button--primary" href="#">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="img/donation_3.jpg" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#">Employee Relief Fund (GFSD)</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat voluptatum labore suscipit saepe ipsa repudiandae vel beatae vitae at, officia veritatis nobis exercitationem dolores cum magnam velit autem. Aperiam dolor facilis impedit illo voluptates reprehenderit natus eius eligendi enim. Aperiam dolor facilis impedit illo voluptates.</p><a class="button button--primary" href="#">Donate now</a>
                        </div>
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
                <div class="donation-details__img"><img class="img--bg" src="img/donation-details_img.jpg" alt="img"></div>
                <h3 class="donation-details__title"><strong>Donate</strong> Now</h3>

            </div>
        </div>
        <form method="POST" action="/cdonate" enctype="multipart/form-data" class="form donation-form">
             <?php echo csrf_field(); ?>
            <div class="row bottom-50">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Donation Amount <span>*</span></h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="row offset-30">
                        <div class="col-6 col-sm-4 bottom-30">
                            <label class="form__radio-label"><span class="form__label-text"><strong>  <select class="form__select" name="currency" style="display: inline-block;">
                                            <option value="USD" selected="selected">USD</option>
                                            <option value="KSH">KSH</option>

                                        </select></strong></span>
                                <input class="form__input-radio" type="number" name="amount" ><span class="form__radio-mask"></span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row bottom-50">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Payment Method <span>*</span></h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="row offset-30">
                        <div class="col-6 col-sm-4 bottom-30">
                            <label class="form__radio-label"><img class="form__label-img" src="img/paypal.png" alt="paypal">
                                <input class="form__input-radio" type="radio" name="method-select" value="paypal"><span class="form__radio-mask"></span>
                            </label>
                        </div>
                        <div class="col-6 col-sm-4 bottom-30">
                            <label class="form__radio-label"><img class="form__label-img" src="img/klarna.png" alt="klarna">
                                <input class="form__input-radio" type="radio" name="method-select" value="klarna"><span class="form__radio-mask"></span>
                            </label>
                        </div>
                        <div class="col-6 col-sm-4 bottom-30">
                            <label class="form__radio-label"><img class="form__label-img" src="img/visa.png" alt="visa">
                                <input class="form__input-radio" type="radio" name="method-select" value="visa" checked="checked"><span class="form__radio-mask"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Campaigns</h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <select class="form__select" name="campaigns-select">
                        <option value="value" selected="selected">No specific campaign</option>
                        <option value="value2">Value 2</option>
                        <option value="value3">Value 3</option>
                        <option value="value3">Value 4</option>
                        <option value="value3">Value 5</option>
                    </select>
                </div>
            </div>
            <div class="row bottom-30">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Message</h6>
                </div>
                <div class="col-md-8 col-lg-8 offset-30">
                    <textarea class="form__field form__message" placeholder="Your massage text"></textarea>
                </div>
            </div>
            <div class="row bottom-50">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Anonymous donation?</h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <label class="form__checkbox-label"><span class="form__label-text">Check this box to hide your personal info in our donators list</span>
                        <input class="form__input-checkbox" type="checkbox" name="donation-checkbox"><span class="form__checkbox-mask"></span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="donation-details__title bottom-50 no-margin-top"><strong>Donator</strong> Details</h3>
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="text" name="first_name" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="text" name="last_name" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="email" name="email" placeholder="Email">
                </div>
                <div class="col-md-8">
                    <input class="form__field" type="text" name="address" placeholder="Adress">
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="text" name="zip" placeholder="Zip Code">
                </div>
                <div class="col-12 text-center">
                    <button class="form__submit" type="submit">Submit donation</button>
                </div>
            </div>
        </form>
    </div>
</section>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kws-donate\resources\views/corporate.blade.php ENDPATH**/ ?>