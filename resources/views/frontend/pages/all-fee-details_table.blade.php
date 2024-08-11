<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>Institute</th>
                <th>Quota</th>
                <th>Course </th>
                <th>Course Fee</th>
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
             
              <td>{{$data->college}}</td>
              <td>{{$data->quota}}</td>
              <td>{{$data->course}}</td>
              <td>{{$data->course_fee}}</td>
          </tr>
      @endforeach
       </tbody>
    </table>
    <div class="mt-3">
         @include('pagination',['list' =>$list,'class'=>'rank_details'])
    </div>
 </div>