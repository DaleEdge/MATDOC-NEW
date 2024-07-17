<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>Institute</th>
                <th>Stipend Years</th>
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
             
              <td>{{$data->college}}</td>
              <td>{{$data->stripend_year}}</td>
          </tr>
      @endforeach
       </tbody>
    </table>
     <div class="mt-3">
         @include('pagination',['list' =>$list,'class'=>'rank_details'])
     </div>
 </div>