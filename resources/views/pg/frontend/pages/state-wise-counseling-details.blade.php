@extends('frontend.layouts.front_app')
@section('content')
         <!-- Counter Start -->
         <div class="section counter-section section counter-section">
            <div class="container mt-5" style="margin-bottom:120px;">
               <div class="neet-pg-layout">
                  <div class="shadow custom-accordion-border card">
                     <div class="card-body">
                        <!-- End State -->
                             <div class="feature-category-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="#">
                                                <img class="item-icon" src="{{asset('front_css/assets/images/icon-13.png')}}" alt="">
                                                <span class="title">Choice Filling</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="#" onclick="fetch_data('{{request('state')}}')">
                                                <img class="item-icon" src="{{asset('front_css/assets/images/icon-14.png')}}" alt="">
                                                <span class="title">Year-Wise Cutoff</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                             <a data-toggle="modal" data-target="#myModal_bond">
                                                        <img class="item-icon" src="{{asset('front_css/assets/images/icon-18.png')}}" alt="">
                                                        <span class="title">Bond Details</span>
                                                    </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                     <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="{{route('pg.fee_details','state='.request('state'))}}">
                                                <img class="item-icon" src="{{asset('front_css/assets/images/icon-11.png')}}" alt="">
                                                <span class="title">Fee Structure</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <!--<div class="col-lg-4 col-sm-6 col-xs-6">-->
                                        <!-- Category Item Start -->
                                    <!--    <div class="single-category-item">-->
                                    <!--        <a href="{{route('stipend_details','state='.request('state'))}}">-->
                                    <!--            <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">-->
                                    <!--            <span class="title">Stipend Details</span>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                        <!-- Category Item End -->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a data-toggle="modal" data-target="#myModalss">
                                                <img class="item-icon" src="{{asset('front_css/assets/images/icon-12.png')}}" alt="">
                                                <span class="title">Documents Required</span>
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
         </div>
      </div>



         <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Year-Wise Cutoff</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row" id="table">
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

         <!-- Counter Start -->
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
         <div class="modal" id="myModalss">
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
                  <h6 class="mt-3 mb-3">1. Original Allotment letter from appropriate authority</h6>
                  <h6 class="mt-3 mb-3">2. Admit Card of NEET (PG)-2022</h6>
                  <h6 class="mt-3 mb-3">3. Score Card/ Result of NEET (PG)-2022</h6>
                  <h6 class="mt-3 mb-3">4. High school/Higher secondary certificate for Date of Birth</h6>
                  <h6 class="mt-3 mb-3">5. Mark sheet of the qualifying examination (class 12th)</h6>
                  <h6 class="mt-3 mb-3">6. Pass certificate of the qualifying examination (class 12th)</h6>
                  <h6 class="mt-3 mb-3">7. Recent character certificate from the school/college last attended/Gazetted Officer</h6>
                  <h6 class="mt-3 mb-3">8. Transfer certificate/school leaving certificate</h6>
                  <h6 class="mt-3 mb-3">9. Migration Certificate</h6>
                  <h6 class="mt-3 mb-3">10. Gap year affidavit, if applicable</h6>
                  <h6 class="mt-3 mb-3">11. Category Certificate (if applicable) issued by competent authority</h6>
                  <h6 class="mt-3 mb-3">12. Ten recent colored passport size photographs & two stamp size photographs</h6>
                  <h6 class="mt-3 mb-3">13. Affidavit against ragging from the CANDIDATE</h6>
                  <h6 class="mt-3 mb-3">14. Affidavit against ragging from the PARENTS</h6>
                  <h6 class="mt-3 mb-3">15. Aadhar Card</h6>
                  <h6 class="mt-3 mb-3">16. PAN Card</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="modal" id="myModal_bond">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Bond Details</h4>
                  <button type="button" class="close" data-dismiss="modal">X</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">

    <style type="text/css">
        

        .s1 {
            color: #FFF;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 20pt;
        }

        .s2 {
            color: #FF0;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s3 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s4 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 16pt;
        }

        .s5 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

      

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }
    </style>

    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:5.9pt" cellspacing="0">
        <tr style="height:25pt">
            <td style="width:455pt" colspan="3" bgcolor="#000000">
                <p class="s1"
                    style="padding-left: 77pt;padding-right: 81pt;text-indent: 0pt;line-height: 23pt;text-align: center;">
                    MBBS Rural Service Bonds/ Penalty</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FF0000">
                <p class="s2"
                    style="padding-left: 45pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    STATE</p>
            </td>
            <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FF0000">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    RURAL SERVICE BOND</p>
            </td>
            <td style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FF0000">
                <p class="s2"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                    Discountinuation/ Conditional</p>
            </td>
        </tr>
        <tr style="height:20pt">
            <td style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FDE8D8">
                <p class="s3" style="padding-top: 2pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">All AIIMS
                </p>
            </td>
            <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FDE8D8">
                <p class="s3"
                    style="padding-top: 2pt;padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">
                    No Bond</p>
            </td>
            <td style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#FDE8D8">
                <p class="s4"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 18pt;text-align: center;">
                    ***</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">HARYANA</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    7 Year</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    36 lakh</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Tripura</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    20 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">TAMILNADU
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">GOA</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">ASSAM</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEARS or 5 Year State</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    30 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">ANDAMAN
                    &amp; NICOBAR</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">CHHATISGARH
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    2 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    25 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">ESI
                    COLLEGES</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 7pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEARS (All india ESI Inst)</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">UP</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    2 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">RAJSTHAN
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    2 YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    5 LAKHS</p>
            </td>
        </tr>
        <tr style="height:28pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Madhya Pradesh (With</p>
                <p class="s5"
                    style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Scholorship)</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-top: 7pt;padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">2
                    YEARS</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-top: 7pt;padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Madhya
                    Pradesh</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEAR</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS FOR UR, 5 LAKHS FOR RESV.</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">KARNATAKA
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEAR</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    ***</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">MAHARASHTRA
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEAR</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">MEGHALAYA
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 YEAR</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">DELHI</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    3 LAKHS UPON SEAT REJIGNATION</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">HIMACHAL
                    PRADESH</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 7pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    BANK GUARANTEE OF 10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">JHARKHAND
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 7pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    20 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">KERALA</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    10 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">TELANGANA
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    DISCONTINUES BOND OF 3 LAKHS</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">UTTARAKHAND
                </p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    ***</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">W.B.</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    1 LAKH UPON REJIGNATION</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Manipur</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:123pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Gujarat</p>
            </td>
            <td
                style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
            <td
                style="width:195pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5"
                    style="padding-left: 9pt;padding-right: 8pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    No Bond</p>
            </td>
        </tr>
    </table>

                </div>
              </div>
            </div>
          </div>
        </div>
  
  



      @endsection
      @section('script')
      <script>
      function fetch_data(state) {
        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "{{route('pg.closing_rank')}}",
            data:{
               'state':state
            },
            success: function(data) {
                $('#myModal').modal('show');
                $('#table').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });
      }

      function fetch_document(state) {
        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "{{route('state_document')}}",
            data:{
               'state':state
            },
            success: function(data) {
                $('#myModal_document').modal('show');
                $('#document').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });
      }

      </script>
      @endsection