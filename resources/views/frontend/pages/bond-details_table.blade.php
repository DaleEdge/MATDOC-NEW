<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>Institute</th>
                <th>Qutoa</th>
                <th>Bond Years</th>
                <th>Bond Penalty</th>
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
             
              <td>{{$data->college}}</td>
              <td>{{$data->quota}}</td>
              <td>{{$data->bond_years}}</td>
              <td>{{$data->bond_penalty}}</td>
          </tr>
      @endforeach
       </tbody>
    </table>
    <div class="mt-3">
         @include('pagination',['list' =>$list,'class'=>'rank_details'])
    </div>
 </div>