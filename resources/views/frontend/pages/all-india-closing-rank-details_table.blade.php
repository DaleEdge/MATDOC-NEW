<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>Quota</th>
                <th>Institute</th>
                <th>Course</th>
                <th>Category</th>
                @for($i=1;$i<=$round;$i++)
                <th>Round {{$i}}</th>
                @endfor
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
              <td>{{$data->quota}}</td>
              <td>{{$data->college}}</td>
              <td>{{$data->course}}</td>
              <td>{{strtoupper($data->category)}}</td>
              @for($i=0;$i<$round;$i++)
              <td>@if(!empty(json_decode($data->rank)[$i])) {{json_decode($data->rank)[$i]}}   @else {{'-'}}  @endif</td>
              @endfor
          </tr>
      @endforeach
       </tbody>
    </table>
     <div class="mt-3">
          @include('pagination',['list' =>$list,'class'=>'rank_details'])
     </div>
 </div>