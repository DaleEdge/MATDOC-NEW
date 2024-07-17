<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
              @if(request('course')!='anaesthesias')
              <th>Choice Order</th>
              @endif
                <th>Institute</th>
                <th>Branch</th>
                <th>State</th>
                @if(request('course')=='dematologiest')
                <th>Department OPD</th>
                <th>Skin Biopsies</th>
                @endif
                @if(request('course')=='radiologies')
                <th>X-Ray</th>
                <th>CT-Scan</th>
                 <th>MRI</th>
                @endif
                 @if(request('course')=='tb_chests')
                <th>Department OPD</th>
                <th>RICU Beads</th>
                 <th>Bipap Ventilators</th>
                @endif
                 @if(request('course')=='anaesthesias')
                <th>Major Surgery</th>
                <th>Minor Surgery</th>
                 <th>Pre Anaesthetic Clinic Daily</th>
                @endif
                @if(request('course')=='ents' || request('course')=='general_surgeries' || request('course')=='orthopedices' || request('course')=='ophthalmologies')
                <th>Department OPD</th>
                <th>Major Surgery</th>
                <th>Minor Surgery</th>
                @endif
                 @if(request('course')=='general_medicines')
                <th>Department OPD</th>
                <th>Icu Beds</th>
                <th>Iccu Beds</th>
                @endif
                
                  @if(request('course')=='paediatrices'  || request('course')=='pathologies' || request('course')=='preventive_social_medicine')
                <th>Department OPD</th>
                <th>Cardiology Clinic Cases</th>
                <th>Nephrology Clinic Cases</th>
                @endif
                
                 @if(request('course')=='psychiatries')
                <th>Department OPD</th>
                <th>Psychiatry Clinic Cases</th>
                <th>Psychological 10 Testing</th>
                @endif
                
                 @if(request('course')=='obstrtrics_and_gynaecologies')
                <th>Department OPD</th>
                <th>Major Surgery</th>
                <th>Minor Surgery</th>
                <th>Normal Delivery</th>
                @endif
               
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>   
          @if(request('course')!='anaesthesias')
               <td>{{$data->choice_order}}</td>
               @endif
              <td>{{$data->college_name}}</td>
              <td>{{$data->branch}}</td>
              <td>{{$data->state}}</td>
              @if(request('course')=='dematologiest')
              <td>{{$data->dept_opd}}</td>
              <td>{{$data->skin_biopsies}}</td>
                 @endif
                  @if(request('course')=='radiologies')
                 <td>{{$data->x_ray}}</td>
                  <td>{{$data->ct_scan}}</td>
                   <td>{{$data->mri}}</td>
                @endif
                  @if(request('course')=='tb_chests')
              <td>{{$data->dept_opd}}</td>
              <td>{{$data->ricu_beds}}</td>
              <td>{{$data->bipap_ventilators}}</td>
                 @endif
                 @if(request('course')=='anaesthesias')
              <td>{{$data->major_surgery}}</td>
              <td>{{$data->minor_surgery}}</td>
              <td>{{$data->pre_anaesthetic_clinic_daily}}</td>
                 @endif
                  @if(request('course')=='ents' || request('course')=='general_surgeries' || request('course')=='orthopedices' || request('course')=='ophthalmologies')
                   <td>{{$data->dept_opd}}</td>
              <td>{{$data->major_surgery}}</td>
              <td>{{$data->minor_surgery}}</td>
                 @endif
                 @if(request('course')=='general_medicines')
                   <td>{{$data->dept_opd}}</td>
              <td>{{$data->icu_beds}}</td>
              <td>{{$data->iccu_beds}}</td>
                 @endif
                  @if(request('course')=='paediatrices' || request('course')=='pathologies' || request('course')=='preventive_social_medicine')
                   <td>{{$data->dept_opd}}</td>
              <td>{{$data->cardiology_clinic_cases}}</td>
              <td>{{$data->nephrology_clinic_cases}}</td>
                 @endif
                 @if(request('course')=='psychiatries')
                   <td>{{$data->dept_opd}}</td>
              <td>{{$data->psychiatry_clinic_cases}}</td>
              <td>{{$data->psychological_10_testing}}</td>
                 @endif
                  @if(request('course')=='obstrtrics_and_gynaecologies')
                   <td>{{$data->dept_opd}}</td>
                   <td>{{$data->major_surgery}}</td>
                   <td>{{$data->minor_surgery}}</td>
                   <td>{{$data->normal_delivery}}</td>
                  @endif
          </tr>
      @endforeach
       </tbody>
    </table>
 </div>