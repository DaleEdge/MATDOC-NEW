@extends('frontend.layouts.front_app')
<style>
    .modal-body {
    padding: 1rem !important;
}
.header-top-wrapper .header-social ul li a {
    padding-top: 7px;
}
</style>
@section('content')

        <!-- Pricing Start -->
        <div class="section section-padding mb-5">
            <div class="container mb-5">
                <!-- Pricing Wrapper End -->
                <div >
                    <ul class="nav pricing-btns">
                        <li class="mr-10 wd-100"><button class="active" data-bs-toggle="tab" data-bs-target="#all_india">All India Quota (50%)</button></li>
                        <li class="mr-10 wd-100"><button data-bs-toggle="tab" data-bs-target="#deemed">Deemed Universities</button></li>
                        <li class="mr-10 wd-100"> <button data-bs-toggle="tab" data-bs-target="#dnb">DNB</button></li>
                        <li class="wd-100"> <button data-bs-toggle="tab" data-bs-target="#nbe">NBE Diploma</button></li>
                    </ul>

                    <div class="tab-content shadow ">
                        <div class="tab-pane fade show active" id="all_india">
                            <div class="card-body">
                                <!-- End State -->
                                <div class="feature-category-body mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('choice_filling_deemed')}}?type=all_india">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-13.png')}}" alt="">
                                                        <span class="title">  Choice Filling</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_closing_rank_details','state=all_indias&type=all')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-14.png')}}" alt="">
                                                        <span class="title">  Year-Wise Cutoff</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('bond_details','state=all_indias&type=all')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                        <span class="title">Bond Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                             <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_fee_details','state=all_indias&type=all')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-11.png')}}" alt="">
                                                        <span class="title">  Fee Structure</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_stipend_details','state=all_indias&type=all')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">  Stipend Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
        
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a data-toggle="modal" data-target="#myModal">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">Document Required</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                        </div>
                                          </div>
                    
                             </div>
                        </div>
                        <div class="tab-pane fade" id="deemed">
                            <div class="card-body">
                                <!-- End State -->
                                <div class="feature-category-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('choice_filling_deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-13.png')}}" alt="">
                                                        <span class="title">  Choice Filling</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_closing_rank_details','state=all_indias&type=deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-14.png')}}" alt="">
                                                        <span class="title">  Year-Wise Cutoff</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('bond_details','state=all_indias&type=deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/bond.png')}}" alt="">
                                                        <span class="title">Bond Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                             <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_fee_details','state=all_indias&type=deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-11.png')}}" alt="">
                                                        <span class="title">  Fee Structure</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_stipend_details','state=all_indias&type=deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">  Stipend Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
        
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a data-toggle="modal" data-target="#myModal">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">Document Required</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                             <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('deemed_hospital_details')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title"> Collage Hospital Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                        </div>
                                          </div>
                    
                             </div>
                        </div>
                        <div class="tab-pane fade" id="dnb">
                            <div class="card-body">
                                <!-- End State -->
                                <div class="feature-category-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('choice_filling_deemed')}}?type=dnb">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-13.png')}}" alt="">
                                                        <span class="title">  Choice Filling</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_closing_rank_details','state=all_indias&type=dnb')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-14.png')}}" alt="">
                                                        <span class="title"> Year-Wise Cutoff</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('bond_details','state=all_indias&type=deemed')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                        <span class="title">Bond Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                             <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_fee_details','state=all_indias&type=dnb')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-11.png')}}" alt="">
                                                        <span class="title"> Fee Structure</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_stipend_details','state=all_indias&type=dnb')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title"> Stipend Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
        
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a data-toggle="modal" data-target="#myModal">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">Document Required</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                        </div>
                                          </div>
                    
                             </div>
                        </div>
                        <div class="tab-pane fade" id="nbe">
                            <div class="card-body">
                                <!-- End State -->
                                <div class="feature-category-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('choice_filling_deemed')}}?type=nbe">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-13.png')}}" alt="">
                                                        <span class="title">  Choice Filling</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_closing_rank_details','state=all_indias&type=nbe')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-14.png')}}" alt="">
                                                        <span class="title"> Year-Wise Cutoff</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('bond_details','state=all_indias&type=nbe')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                        <span class="title">Bond Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                             <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_fee_details','state=all_indias&type=nbe')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-11.png')}}" alt="">
                                                        <span class="title"> Fee Structure</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a href="{{route('all_india_stipend_details','state=all_indias&type=nbe')}}">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title"> Stipend Details</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
        
                                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                                <!-- Category Item Start -->
                                                <div class="single-category-item">
                                                    <a data-toggle="modal" data-target="#myModal">
                                                        <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                        <span class="title">Document Required</span>
                                                    </a>
                                                </div>
                                                <!-- Category Item End -->
                                            </div>
                                        </div>
                                          </div>
                    
                             </div>
                        </div>
                    </div>

                </div>
                <!-- Pricing Wrapper End -->

            </div>
        </div>
        <!-- Pricing End -->
         <!-- Counter Start -->
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Document Required</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3 class="text-center">Certificates and Documents required</h3><br>
          <h5 class="mt-3 mb-3">1) Get your admitcard, application form downloaded as pdf – Get a pdfcopy from yourNBE
            login and send the pdfsto your email ID/save them in google drive.NBE exam login usually
            gets deactivated before counseling.</h5>
            <p>a. The info in the application form will be used for MCC All India counseling
                registration (Mother’s name,Application number, Roll no,DoB etc. as exactly
                provided in your application form).</p>
            <p>b. The admitcard will be required for admission. Keep the hardcopy ofthe one you
                took to the exam centersafe.Also have the softcopy pdfsaved in email or google
                drive</p>
            <h5 class="mt-3 mb-3">2) Get allcertificatesready.Allcertificates are required to be in original. The
                certificatesrequired for admissions are
                </h5>
                <p>a.Admit Card (issued byNBE).</p>
                <p>b. Results/ Rank Letter(issued byNBE).</p>
                <p>c. Mark sheets of MBBS 1st, 2nd and 3rd Exams.</p>
                <p>d. MBBSDegree Certificate / Provisional Certificate.</p>
                <p>e. Internship completion certificate from theHead of Institution or College.</p>
                <p>f. Permanent/ Provisionalregistration certificate (Provisional applicable only for
                candidates who complete internship in 2021).</p>
                <p>g. SSC orHSC certificate or Birth certificate asDoB proof.One ofthese is enough.</p>
                <p>h. IDproof (Aadhaar or VoterIDor Passport orDriving Licence).</p>
                <p>i. Category certificatesforAll India counseling if applicable – SC/ST, EWS,OBC or PwD
                certificate.</p>
                <p>i.OBC certificate hasto beOBCNCL certificate issued for Central Institutes
                (Non creamy layer and part ofthe central list ofOBCs).</p>
                <p>ii. EWS certificate hasto be EWS certificate issued as per Central norms.</p>
                <h5 class="mt-3 mb-3">3) Othercertificates(notrequired for admission duringAll India counseling, may be
                required forsome state counselings during or before choice filling, and some may be
                required only aftercommencement ofcourse)
                </h5>
                <p>a. Migration certificate - If you are joining PGin a university which is differentfrom
                    theUniversity in which you did your MBBS,then a migration certificate would be required to
                    be submitted to the PGuniversity. The migration certificate isto be taken from the MBBS
                    university. If your MBBS university isready to give one now, and you expectto apply for
                    otherUniversity seats, you can getthis now itself.</p>
                <p>b. Eligibility certificate – If you are joining PGin a university which is differentfrom the
                    University in which you did your MBBS,then an eligibility certificate would be required for
                    admission. The eligibility certificate isto be taken from the PGuniversity by submitting your
                    migration certificate (taken as above from MBBS univ) and otherrelevant documents.</p>
                <p>i. You need to have your migration certificate from MBBS university to apply for an
                    eligibility certificate in the PGseatUniversity.</p>
                <p>ii. If both MBBS univ and PGUniv are the same no need ofthe migration / eligibility
                    certificates.</p>
                <p>c. Note thatthe migration / eligibility certificate requirements are notstate specific but
                    University specific.</p>
                <p>d. ForAll India counseling - The migration / eligibility certificate is not mandatory during
                    admissions and can be submitted later afterthe finalround.</p>
                <p>e. Forsome state counselling (TamilNadu, Karnataka etc.) an eligibility certificate from the
                    state govt university (TN MGR univ, RGUHS etc.respectively) isrequired for attending the
                    state quota counseling. So, if you are applying forthese state counselingscheck on how to
                    getthe eligibility certificates online. Some universities may take 30 days+ to provide
                    eligibility certificates.</p>
                <p>f. NOC from registered state medicalcouncil – If you are already registered in a particular
                    state medicalcouncil and if you join PGin anotherstate, you have to register yourself in the
                    medicalcouncil ofthe state where you would be doing MD/MS. You would need anNOC
                    from yourcurrently registered state medicalcouncil forthis new state MC registration. This
                    can be done afterthe final upgrade (i.e. aftercourse commencement after you are sure that
                    the seatis yourfinalseatthroughNEET PG2021). So do not need to worry aboutittill your
                    seatisfinal.</p>
                <p>g. Gap certificate – Relevant only for Maharashtra candidatesto my knowledge. (self
                    affidavit of gap between completion of qualification and joining nextcourse)</p>
                <p>h. CandidatesclaimingNRI (to availNRIseats underDeemedUniversitiesinAll India
                    counseling) may need to getthe required certificates. The certificates are mentioned in the
                    last page ofthis document(forAll India counseling). This mighttake some time (embassy
                    certificate etc.) and so apply forthem on priority if not done till now.</p>
                <h5 class="mt-3 mb-3">Forsome state counselings,the criteria may be differentforNRIseats or private
                    institute seats.</h5>
                <p>i. There might be othercertificatesspecificto state counseling.Willtry to collate those
                    and share them as and when notifications are shared.</p>
                <h5 class="mt-3 mb-3">4) When are the certificatesrequired ?</h5>
                <p>  a. ForAll India counseling certificates are notrequired atthe time ofregistration /choice filling. The
                    certificates will be required only atthe time of admission.</p>
                <p>  b. Some state counselings have an offline (manual)certificate verification process before choice
                    filling. In such casescertificates may be required afterregistration and before choice filling /
                    allotment. Thisisstate specific and you would getto know from state notifications.</p>
                <h5 class="mt-3 mb-3"> 5) Originalrequirement and submission ofcertificates.</h5>

                <p>a. Repeating – forAll India counseling and in moststate counseling allcertificates are required in
                 original for admission, and the institute hasto confirm during admission that allcertificates have
                  been received by them inORIGINAL.</p>
                <p>b. If your original documents are with a bonded institute /stateDME, or an employed hospital,
                 please find outthe process of getting them back or ensure that you take stepsto getthem atthe
                  earliest.</p>
                <p>c. The certificates will be deposited atthe institute atthe time of admission to avoid seat blocking.
                 Thisisto ensure that a candidate does not hold two admissions at a time.All India counseling and
                 moststate counselingsfollow this process.</p>
                 <h5 class="mt-3 mb-3">6) Usually there are issues with invalid medicalregistration (provisionalregistration validity
                  being over),category certificates not being available, original degree certificateslying with
                  bond institute / not yet provided by university etc. Ensure you take the extra effortto get all
                  certificates</h5>
                
        </div>
      </div>
    </div>
  </div>
      </div>

      
      @endsection