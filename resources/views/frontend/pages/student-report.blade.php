@extends('frontend.layouts.front_app')

<style>
    thead tr th {
  position: sticky;
  top: 0;
    }
  .header-top-wrapper .header-social ul li a {
    padding-top: 6px !important;
    }

</style>
@section('content')
    <!-- Counter Start -->
    <div class="section counter-section section counter-section">
        <div class="container mt-5" style="margin-bottom: 160px;">
            <div class="neet-pg-layout">
                <div class="shadow custom-accordion-border card">
                    <div class="card-body">
                        <form id="serch_form" method="POST" action="{{route('student_report_details')}}">
                            @csrf()
                        <div class="row mb-2">
                            <h3>College Prediction on behalf of rank </h3>
                            <div class="col-md-3">
                                {{-- @if(empty(Auth::user()->customer->rank))
                                <p style="color:red;">Please Update your rank from profile. <a style="color:blue;" href="{{route('user_dashboard')}}#profile">Click Here</a></p>
                                @endif --}}
                                <div class="form-group mt-3 ">
                                    <label for="college">NEET PG Rank :</label>
                                    <input type="number" class="form-control" name="rank" id="rank" placeholder="Enter Rank" value="@if(request('rank')){{request('rank')}}@else{{Auth::user()->customer->rank}}@endif" required/>   
                                   
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="course">Domicile :</label>
                                    <select class="form-control" name="domicile" id="domicile" tabindex="-1"
                                        aria-hidden="true"  required>
                                        <option value="" > Select State</option>
                                        <option value="andhra_pradeshes" >  Andhra Pradesh</option>
                                        <option value="assams" >   Assam</option>
                                        <option value="bihars" >  Bihar</option>
                                        <option value="chandigarhs" >  Chandigarh</option>
                                        <option value="chhattisgarhs" >  Chhattisgarh</option>
                                        <option value="gujarats" >   Gujarat</option>
                                        <option value="haryanas" >   Haryana</option>
                                        <option value="himachal_pradeshes" >Himachal Pradesh</option>
                                        <option value="jammu_and_kashmirs" >Jammu and Kashmir</option>
                                        <option value="jharkhands">Jharkhand</option>
                                        <option value="karnatakas">Karnataka</option>
                                        <option value="keralas">Kerala</option>
                                        <option value="madhya_pradeshes">Madhya Pradesh</option>
                                        <option value="maharashtras">Maharashtra</option>
                                        <option value="manipurs">Manipur</option>
                                        <option value="meghalayas">Meghalaya</option>
                                        <option value="odishas">Odisha</option>
                                        <option value="pondicherries">Pondicherry</option>
                                        <option value="punjabs">Punjab</option>
                                        <option value="rajasthans">Rajasthan</option>
                                        <option value="tamil_nadus">Tamil Nadu</option>
                                        <option value="telanganas">Telangana</option>
                                        <option value="tripuras">Tripura</option>
                                        <option value="uttar_pradeshes">Uttar Pradesh</option>
                                        <option value="uttarakhands">Uttarakhand</option>
                                        <option value="west_bengals">West Bengal</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="course">Branch :</label>
                                    @php 
                                     $category= DB::table('all_indias')->groupBy('course')->get('course');   @endphp
                                    <select class="form-control  select2" name="branch[]" id="branch" tabindex="-1"
                                        aria-hidden="true"    multiple required>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->course}}">{{$cat->course}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="category">Category :</label>
                                    <select class="form-control  select2" name="category[]" id="category"  multiple required>
                                       
                                    </select>
                                </div>
                            </div> --}}
                           
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="course">Counselling Preference :</label>
                                    <select class="form-control  select2" name="counselling_preference[]" id="counselling_preference" tabindex="-1"
                                        aria-hidden="true" onchange="fetch_state()"   multiple required>
                                        <option value="all_indias">All India</option>
                                        <option value="deemed">Deemed</option>
                                        <option value="state_home">State Counselling (Home State)</option>
                                        <option value="state_other">State Counselling (Other State)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="course">Counselling Other State :</label>
                                    <select class="form-control  select2" name="counselling_preference_other_state[]" id="counselling_preference_other_state" tabindex="-1"
                                        aria-hidden="true"   multiple >
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="form-group  ">
                                    <label for="college">Maximum Streachable Budget :</label>
                                    <input type="number" class="form-control" placeholder="Enter Budget" name="budget" id="budget"  required />   
                                   
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: 43px;">
                                <div class="form-group  ">
                                    
                                      <button class="btn btn-primary btn-hover-heading-color"> Filter </button>
                                    
                            </div>
                            </div>

                        </div>
                        
                    </form>    

                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
<script>
    function fetch_category() {
        var domicile = $('#domicile').val();
        var course = $('#course').val();

        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "get_category",
            data:{
                'state':domicile,
                'course':course
            },
            success: function(data) {
                console.log(data);
                $("#branch").empty();
                        $.each(data, function (key, value) {
                            $("#branch").append('<option value="' + value.course + '">' + value.course + '</option>');
                        });
        },
         complete: function() {
             $('.preloader').hide();
          }
        });

      }

      function fetch_state() {
          var counselling_preference_other_state=$('#counselling_preference').val();
          console.log(counselling_preference_other_state);
          $("#counselling_preference_other_state").empty();
             if(counselling_preference_other_state.includes('state_other')){
                $("#counselling_preference_other_state").prop('required',true)
                $("#counselling_preference_other_state").append(' <option value="andhra_pradeshes" >  Andhra Pradesh</option><option value="bihars" >  Bihar</option><option value="chhattisgarhs" >  Chhattisgarh</option><option value="haryanas" >   Haryana</option><option value="karnatakas">Karnataka</option><option value="madhya_pradeshes">Madhya Pradesh</option><option value="pondicherries">Pondicherry</option><option value="rajasthans">Rajasthan</option><option value="tamil_nadus">Tamil Nadu</option><option value="telanganas">Telangana</option><option value="uttar_pradeshes">Uttar Pradesh</option><option value="uttarakhands">Uttarakhand</option><option value="west_bengals">West Bengal</option>');
             }
              
      }
   
</script>
@endsection
