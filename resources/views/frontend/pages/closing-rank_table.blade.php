<div class="col-md-12">
    <div class="card mt-3">
       <div class="border-0 card">
          <div class="card-body p-0">
             <div class="table-responsive">
                <table class="table">
                   <thead>
                      <tr>
                         <th>Name </th>
                         <th>Counseling Type </th>
                      </tr>
                   </thead>
                   <tbody>
                      @foreach($list as $data)
                      <tr>
                         <td><a class="btn btn-primary btn-sm btn-hover-heading-color" href="{{route('closing_rank_details','state='.str_replace(' ','_',strtolower($state)).'&counseling_type='.$data->counseling_type)}}">{{strtoupper(str_replace('_',' ',strtolower(rtrim($state, 's'))))}}</a></td>
                         <td>{{$data->counseling_type}}</td>
                      </tr>
                      @endforeach
                     
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>