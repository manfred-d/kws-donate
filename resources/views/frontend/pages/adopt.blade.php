@extends('layouts.frontend')
@section('content')
<section class="section promo-primary">
    <picture>
        <source srcset="img/Hyenas.jpg" media="(min-width: 992px)"><img class="img--bg" src="img/Hyenas.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">Our</span>
                        <h1 class="promo-primary__title"><span>Adoption  </span> <span>Programme</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container section" >
    </br>
    <div class="row" >
        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Confined Animal Adoption</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Endangered Species Adoption</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">About</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-abouts" role="tab" aria-controls="nav-about" aria-selected="false">Conditions for Adoption</a>
                   <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about1" aria-selected="false">Adoption Process</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Contacts</a>
                
                   
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>The Nairobi Animal Orphanage, The <strong>Nairobi Safari Walk</strong> and the Kisumu <strong>Impala Sanctuary</strong> are famed for their efforts in caring for all species of wild animals that are orphaned, abandoned, sick and injured.</p>

                    <p>Over the years this facilities have restored this great heritage to their full health. Just as every animal in the facilities have a unique story, so are their needs.</p>
                    <div class="row" >
                        <div class="col-5">
                            <table class="table table-bordered table-hover text-white">
                                <thead>
                                    <tr style="background-color: #8bc34a;">
                                        <th></th>
                                        <th></th>


                                        <th colspan="2" scope="colgroup">Naming adoption fee
                                            for a period of one year</th>
                                    </tr>
                                    <tr  style="background-color: #641E16;">
                                        <th rowspan="2">Adoption Level</th>
                                        <th rowspan="2">Animal Category</th>

                                        <th>Fee US$</th>
                                        <th>Fee Kshs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  style="background-color: #C54429;">
                                        <th scope="row">Level 1</th>
                                        <td>Big Game (Lions,
                                            Cheetahs, Rhino,
                                            Leopards, Buffalos)</td>
                                        <td>2,000</td>
                                        <td>200,000</td>
                                    </tr>
                                    <tr style="background-color: crimson;">
                                        <th scope="row">Level 2</th>
                                        <td>Big herbivores
                                            (Eland, Giraffe)</td>
                                        <td>1000</td>
                                        <td>100,000</td>
                                    </tr>
                                    <tr style="background-color: #8E2B92;">
                                        <th scope="row">Level 3</th>
                                        <td>Small antelopes
                                            (gazelles, impala)</td>
                                        <td>500</td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr style="background-color: #FFC300;">
                                        <th scope="row">Level 4</th>
                                        <td>Non-human primates</td>
                                        <td>500</td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr class="bg-danger">
                                        <th scope="row">Level 5</th>
                                        <td>Crocodiles and other Reptiles </td>
                                        <td>500</td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <th scope="row">Level 6</th>
                                        <td>Birds</td>
                                        <td>300</td>
                                        <td>30,000</td>

                                    </tr>
                                    <tr class="bg-warning">
                                        <th scope="row">NB</th>
                                        <td colspan="3"><p>The adoption fee is unrestricted amount meaning one can support with as little as <strong>KSh 1000 or $10</strong></p></td>


                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                        <div class="col-7">

                            <div class="row-block">
                                <ul id="sortable" style="list-style: none;">

                                    <li><div class="media border">
                                            <div class="media-left align-self-center p-3 mb-2 bg-info text-white">
                                                <p> Support of 1,000 </p>
                                            </div>
                                            <div class="media-body lign-self-center   ">
                                                <h4 class="text-center">Benefits</h4>
                                                <ul>
                                                    <p class="text-center"><li >Adoption certificate</li></p>

                                                </ul>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    <li><div class="media">
                                            <div class="media-left align-self-center p-3 mb-2 bg-danger text-white">
                                                <p>Support of 5,000 - 50,000</p>
                                            </div>
                                            <div class="media-body">

                                                <ul>
                                                    <li>&nbsp;Adoption certificate</li>
                                                    <li>&nbsp;Fact sheet on your adopted animal</li>
                                                    <li>&nbsp;Adoption T-shirt or polo shirt or a cap</li>
                                                    <li>&nbsp;One visit to the host facility</li>
                                                </ul>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    <li><div class="media border">
                                            <div class="media-left align-self-center p-3 mb-2 bg-info text-white">
                                                <p>Support of 51,000 - 199,000</p>
                                            </div>
                                            <div class="media-body">
                                                <ul>
                                                    <li>&nbsp;Adoption certificate</li>
                                                    <li>&nbsp;Fact sheet on your adopted animal</li>
                                                    <li>&nbsp;Adoption T-shirt or polo shirt or cap</li>
                                                    <li>&nbsp;Two Feeding days for the adopted animal in a year</li>
                                                    <li>&nbsp;Two visits to the host facility</li>
                                                </ul>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    <li><div class="media ">
                                            <div class="media-left align-self-center p-3 mb-2 bg-warning text-white border">
                                                <p> Support of 200,000 - 500,000</br>
                                                    (Naming Category)</p></div>
                                            <div class="media-body">

                                                <ul>
                                                    <li>&nbsp;Adoption certificate,</li>
                                                    <li>&nbsp;Fact sheet on your adopted animal</li>
                                                    <li>&nbsp;Adoption T-shirt or polo shirt or cap</li>
                                                    <li>&nbsp;Feeding days for the adopted animal</li>
                                                    <li>&nbsp;Annual pass to visit the host facility</li>
                                                    <li>&nbsp;A plaque at the animal enclosure for a specified period of time</li>
                                                    <li>&nbsp;Recognition on KWS social media and website</li>
                                                </ul>

                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-green">Support Now</a>
                                            </div>
                                        </div></li>



                                    <li><div class="media border">
                                            <div class="media-left align-self-center p-3 mb-2 bg-info text-white">
                                                Support of 500,000
                                                and above
                                            </div>
                                            <div class="media-body">

                                                <ul>
                                                    <li>Adoption certificate</li>
                                                    <li>Fact sheet on your adopted animal</li>
                                                    <li>Adoption T-shirt or polo shirt or cap</li>
                                                    <li>Feeding days for the adopted animal</li>
                                                    <li>Annual pass to visit the host facility</li>
                                                    <li>A plaque at the animal enclosure for a specified period of time</li>
                                                    <li>Recognition on KWS social media and website</li>
                                                    <li>Keynote speaker in the end of the year adoption ceremony</li>
                                                    <li>Name in the board of fame as an adopting parent</li>
                                                    <li>&nbsp;Keynote speaker in the end of the year adoption ceremony</li>
                                                    <li>&nbsp;Name in the board of fame as an adopting parent</li>
                                                </ul>


                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>

                            </div>



                            </ul>
                        </div>

                    </div>


                </div>



                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <div class="row" >
                        <div class="col-5">
                            <table class="table table-bordered table-hover text-white">
                                <thead>
                                    <tr style="background-color: #8bc34a;">
                                        <th></th>
                                        <th></th>


                                        <th colspan="2" scope="colgroup">Naming adoption fee
                                            for a period of one year</th>
                                    </tr>
                                    <tr  style="background-color: #641E16;">
                                        <th rowspan="2">Adoption Level</th>
                                        <th rowspan="2">Animal Category</th>

                                        <th>Fee US$</th>
                                        <th>Fee Kshs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  style="background-color: #C54429;">
                                        <th scope="row">Level 1</th>
                                        <td>Rhino, Elephant,
Lion</td>
                                        <td>10,000</td>
                                        <td>1,000,000</td>
                                    </tr>
                                    <tr style="background-color: crimson;">
                                        <th scope="row">Level 2</th>
                                        <td>Roan Antelope (only
12 remaining).This is a
critically endangered
species</td>
                                        <td>10,000</td>
                                        <td>1,000,000</td>
                                    </tr>
                                    <tr style="background-color: #8E2B92;">
                                        <th scope="row">Level 3</th>
                                        <td>Endangered herbivores
(eland, Girafe, Bongo,
Sable, Sitatunga)</td>
                                        <td>5000</td>
                                        <td>500,000</td>
                                    </tr>
                                   
                                    <tr class="bg-warning">
                                        <th scope="row">NB</th>
                                        <td colspan="3"><p>The adoption fee for the
endangered species is from <strong>KSh 50,000</strong></p></td>


                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                        <div class="col-7">

                            <div class="row-block">
                                <ul id="sortable" style="list-style: none;">

                                    <li><div class="media border">
                                            <div class="media-left align-self-center p-3 mb-2 bg-info text-white">
                                                <p> Support of 50,000 - 500,000 </p>
                                            </div>
                                            <div class="media-body lign-self-center   ">
                                                <h4 class="text-center">Benefits</h4>
                                               <ul>
	<li style="text-align: left;">&nbsp;Adopt an endangered species certificate</li>
	<li style="text-align: left;">&nbsp;Fact sheet on your adopted animal</li>
	<li style="text-align: left;">Adoption T-shirt or polo shirt or a cap</li>
	<li style="text-align: left;">Four visits to the respective park</li>
	<li style="text-align: left;">Recognition on KWS social media and website</li>
</ul>

                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    <li><div class="media">
                                            <div class="media-left align-self-center p-3 mb-2 bg-danger text-white">
                                                <p>Support of 600,000 -
1,000,000</p>
                                            </div>
                                            <div class="media-body">

                                               <ul>
	<li style="text-align: left;">&nbsp;Opportunity to name the adopted animal</li>
	<li style="text-align: left;">&nbsp;Adopt an endangered species certificate</li>
	<li style="text-align: left;">Fact sheet on your adopted animal&nbsp;</li>
	<li style="text-align: left;">Adoption T-shirt or polo shirt or cap</li>
	<li style="text-align: left;">Quarterly visit to the host facility</li>
	<li style="text-align: left;">&nbsp;Recognition on KWS social media and website</li>
	<li style="text-align: left;">Name in the board of fame as an adopting parent</li>
</ul>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    <li><div class="media border">
                                            <div class="media-left align-self-center p-3 mb-2 bg-info text-white">
                                                <p>Support of 1,000,000
and above</p>
                                            </div>
                                            <div class="media-body">
                                               <ul>
	<li>Opportunity to name the adopted animal</li>
	<li>Adopt an endangered species certificate&nbsp;</li>
	<li>Fact sheet on your adopted animal</li>
	<li>Adoption T-shirt or polo shirt or cap</li>
	<li>Two years quartely visits to the respective park</li>
	<li>Name in the board of fame as an adopting parent</li>
	<li>Opportunity to Participate and be keynote speaker in conservation education public outreach programs (e.g. World Wildlife Day, World Elephant Day</li>
	<li>Recognition on KWS social media and website</li>
</ul>

                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Support Now</a>
                                            </div>
                                        </div></li>
                                    



                                    

                            </div>



                            </ul>
                        </div>
                     <p><b class="border-r">NB</b>There will be an event during every Rhino and Elephant birth where individuals, corporates and other organised groups will bid to name these animals. The highest bidder gets to give the first name to the new born animal. This will be a big event with maximum publicity. The adopting parent will be accorded opportunity to be keynote speaker in the event.</p>
                    </div>

                
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  
<p>A pilot animal adoption project began in September 2009. This was followed by first public adoption by the Kenya’s former Prime Minister and former world 100metres champions <strong>Usain Bolt</strong>, and <strong>Collin Jackson</strong> in November 2009. The program has received significant interest and as such, there is a need to extend it beyond the existing Animal Adoption Programme at the Nairobi Animal Orphanage, Nairobi Safari Walk and Kisumu Impala Sanctuary.</p>

<p>The Kenya Wildlife Service Adoption Programme presents a distinctive opportunity to Kenyan citizens, residents, and non-residents to participate and support wildlife and its habitat conservation. The programme is open to ALL as conservation is a collective responsibility.</p>

<p>Conservation is demanding and we all have a role to play. The revamped adoption will give the public more options to support conservation. It aims at providing a sustainable support for wildlife conservation and its habitats to benefit present and future generations.<br />
&nbsp;</p>
<h3>WHO CAN ADOPT?</h3>

<p>KWS adoption programme is for ALL. Individuals of all ages, community groups, youth groups, special interest groups, corporations, schools, agencies and families 
</p>

<h3>WHERE CAN I ADOPT?</h3>

<p>The KWS adoption programme is available in all our protected areas (National Parks, Reserves, Orphanage and Sanctuaries) 
</p>

<h3>HOW CAN I PARTICIPATE?</h3>

<p>One can give financial or in kind support in all the adoption categories.
Other ways of support include unrestricted donations or purchase of branded merchandise
</p>



                </div>
                <div class="tab-pane fade" id="nav-abouts" role="tabpanel" aria-labelledby="nav-about-tab">
                 <p>A minimum adoption/fostering fee will be administered for a specific number of months (i.e. 1 year), per animal adopted, thus opening the scale of the number of animals an individual can adopt to infinite as long as they can finance the same</p>

<p>All animals adopted remain under the custody of Kenya Wildlife Service, which reserves the right to transfer them to other establishments when necessary. In such an event, the adopters will be informed appropriately</p>

<p>If an animal is no longer available for adoption due to either relocation to another establishment, death or other circumstances, an alternative animal to adopt will be offered. In such circumstances, an updated adoption pack, including an adoption certificate and photo of an animal in electronic format will be sent to the adopter free of charge.&nbsp;&nbsp; </p>

<p>An adoption event is limited to 12 attendees and a maximum of 2 hours. Additional guests are welcome to attend by admittance at the applicable facility entry rates.&nbsp;</p>

<p>The adoption shall be processed and certificate sent within two weeks</p>

<p>Any adopting parent can pull out of the adoption when they so desire. When this happens, the adopting parent will have no rights to the animal and the same animal will be available for adoption by other interested parties. However, the adopting parent has to inform KWS of the discontinuation at least 3 months in advance for alternative adoption arrangements to be made. No refunds will be made in the event of discontinuation.</p>
<p>In terms of visitation, there is usually a Home Coming and Feeding Day in December every year where the adopting parents spend the day with their animal and get to feed them.  NB: Arrangements could be made for a representative to visit the animal on an agreed frequency. 
</p>
<p>KWS Animal Adoption Programme will make every reasonable attempt to deliver all benefits eligible at the adoption category, and shall not be held liable or responsible if some or all of the benefits are not recognised, received or realised by the adopter for example due to non-valid email address. Adopting parent is responsible for notifying Kenya Wildlife Service of email address changes. Adopters may elect to adopt animals and waive their rights to any or all of their benefits.
</p>
<p>Individuals/corporate organisations interested in making a supportive donation to KWS Animal Adoption Programme outside of specific animals may do so by simply designating it as "No animal elected for adoption". 
</p>
<p>In the unlikely event of an accident (personal injury or death) involving an adopter, their accompanying attendees or their additional guests while at the Nairobi Animal Orphanage or Nairobi Safari Walk, I (individual or corporate) acknowledge that the Kenya Wildlife Service will not be liable for any direct or indirect loss, damage or injury arising from or in connection with the Kenya Wildlife Service I agree to waive all and any claims against the Kenya Wildlife Service in this respect.
</p>

                </div>
                
      <div class="tab-pane fade" id="nav-about1" role="tabpanel" aria-labelledby="nav-about-tab">
                <p style="margin-top:0pt; margin-bottom:8.0pt; margin-left:0in; text-align:left"><span style="language:en-GB"><span style="line-height:107%"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="punctuation-wrap:hanging"><span style="font-size:60.0pt"><span style=""><span style="color:black"><span style="language:en-GB"><span style="font-weight:bold">1</span></span></span></span></span></span></span></span>Identify the adoption category of choice from the website, our park gates or our Resource Mobilization office</span></span></p>

<p style="margin-top:0pt; margin-bottom:8.0pt; margin-left:0in; text-align:left"><span style="language:en-GB"><span style="line-height:107%"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="punctuation-wrap:hanging"><span style="font-size:60.0pt"><span style=""><span style="color:black"><span style="language:en-GB"><span style="font-weight:bold">2</span></span></span></span></span></span></span></span>Obtain feedback either automatically from the website or through email on availability of the animal depending with category chosen</span></span></p>

<p style="margin-top:0pt; margin-bottom:8.0pt; margin-left:0in; text-align:left"><span style="language:en-GB"><span style="line-height:107%"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="punctuation-wrap:hanging"><span style="font-size:60.0pt"><span style=""><span style="color:black"><span style="language:en-GB"><span style="font-weight:bold">3</span></span></span></span></span></span></span></span>Complete an adoption form from the website, our park gates or our Resource Mobilization office. The same can be downloaded from the KWS website.
</span></span></p>

<p style="margin-top:0pt; margin-bottom:8.0pt; margin-left:0in; text-align:left"><span style="language:en-GB"><span style="line-height:107%"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="punctuation-wrap:hanging"><span style="font-size:60.0pt"><span style=""><span style="color:black"><span style="language:en-GB"><span style="font-weight:bold">4</span></span></span></span></span></span></span></span>Submit the form and make your payments through Mpesa pay bill 329329 Account no.010833037400 or KWS Bank Account or Online payments</span></span></p>
                </div>           
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                  <p>For more information call: 0708 191 522, 0775 912 933 Toll free: 0800 597 000 Email: rmevents@kws.go.ke</p>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

@endsection