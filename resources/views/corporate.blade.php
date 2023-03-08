@extends('layouts.frontend')
@section('content')
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
        <p class="">Conservation is demanding and we all have a role to play. The other donation options below are endured to support conservation efforts. The aim is to providing a sustainable support for wildlife conservation and its habitats to benefit present and future generations</p>
        <div class="row offset-70">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="/img/park.jpg" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#donate">Support a park</a></h4>
                            <ul>
                                <li><strong>Development of different sites of the par</strong>k e.g. campsites, picnic sites, signage, bandas, entry gates, monkey proof dustbins/waste bins</li>
                                <li><strong>Cleanups</strong> -To keep our parks safe, clean and offer a pleasant experience for visitors</li>
                                <li><strong>Community projects</strong> -To build a closer, stronger community surrounding the protected areas •To conserve the environment! -control invasive species, planting trees, ecosystem restoration-restoring degraded habits</li>
                                <li><strong>Funding</strong> of human-wildlife conflicts</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            </br>&nbsp;
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 p-4">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img-bg" src="img/ranger.png" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#donate">Support a ranger</a></h4>
                            <p>“Guardian of Parks” is wrapped around the existence of a KWS ranger and the need to
                                support them. The ranger is the centre of conservation,</p>

                            <p><strong>The needs of a ranger</strong></p>

                            <ul>
                                <li>Equipment (Fire arms, vehicles, night visions, cameras)</li>
                                <li>Decent housing Uniforms Welfare (food)</li>
                                <li>Fallen rangers support (families)</li>
                                <li>Capacity buildings</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            &nbsp;
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="/img/bio.png" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#donate">Support Biodiversity Programs</a></h4>
                            <p>This shall provide a chance for individuals and corporates to participate in the development, planning and implementation of biodiversity programs. This includes.</p>
                            <ul>
                                <li>Park Management Plans&nbsp;</li>
                                <li>Endangered species recovery and action plans&nbsp;</li>
                                <li>Translocation&nbsp;</li>
                                <li>Wildlife collaring and rhino ear notching for monitoring</li>
                                <li>Wildlife monitoring through tracking of collard animals</li>
                                <li>Wildlife surveys/census&nbsp;</li>
                                <li>Disease surveillance</li>
                            </ul>
                            <p><strong>BENEFITS</strong></p>

                            <ul>
                                <li>Participation on the biodiversity programme supported e.g. translocation, collaring</li>
                                <li>Participate in conservation events (e.g., World Wildlife Day, World Elephant Day, Recovery action plans and Park Management Plans launch</li>
                                <li>Quarterly updates on biodiversity programs supported</li>
                                <li>Recognition on KWS social media and website</li>
                                <li>Quaterly visits to the supported park.</li>
                            </ul>

                            <a class="form__submit" href="#donate">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 p-4">
                <div class="donation-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="donation-item__img"><img class="img--bg" src="/img/donation2.jpg" alt="img"></div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="donation-item__title"><a href="#donate">Unrestricted Donations</a></h4>
                            <ul>
                                <li>One-off donation</li>
                                <li>Monthly donation</li>
                                <li>Quarterly donation</li>
                                <li>Annual donation</li>
                                <li>Donation boxes at the wildlife protected areas</li>
                            </ul>

                            <a class="form__submit" href="#donate">Donate now</a>
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
                <h3 id="donate" class="donation-details__title"><strong>Donate</strong> Now</h3>

            </div>
        </div>
        <form method="POST" action="/cdonate" enctype="multipart/form-data"  class="form donation-form">
            @csrf
            <div class="row bottom-50">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Donation Amount <span>*</span></h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="row offset-30">
                        <div class="col-6 col-sm-4 bottom-30">
                            <div class="row">

                                <div class="col-6">
                                    <label class="form__radio-label"><span class="form__label-text"><strong>  <select class="form__select" name="currency" style="display: inline-block;">
                                                    <option value="USD" selected="selected">USD</option>
                                                    <option value="KSH">KSH</option>

                                                </select></strong></span>                            </label>

                                </div>
                                <div class="col-6">
                                    <label><input class="form__input-radio" type="number" name="amount" required><span class="form__radio-mask"></span>
                                    </label>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <h6 class="donation-form__title">Campaigns</h6>
                </div>
                <div class="col-md-8 col-lg-8">
                    <select class="form__select form-control select2 {{ $errors->has('campaign') ? 'is-invalid' : '' }}"  name="campaign_id" id="campaign_id" required>
                        @foreach($campaigns as $id => $entry)
                        <option value="{{ $id }}" {{ old('campaign_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
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
                    <input class="form__field" type="text" name="company" placeholder="Company Name" required>
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="text" name="first_name" placeholder="First Name" required>
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-8">
                    <input class="form__field" type="text" name="website" placeholder="Website">
                </div>
                <div class="col-md-4">
                    <input class="form__field" type="tel" name="zip" placeholder="Telephone">
                </div>
                <div class="col-12 text-center">
                    <button class="form__submit" type="submit">Submit donation</button>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection
@section('scripts')
@parent

@endsection