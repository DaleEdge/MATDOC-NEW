<div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>Institute</th>
                <th>Category</th>
                <th>Tuitions Fees</th>
                @for($i=1;$i<=$round;$i++)
                <th>Round {{$i}}</th>
                @endfor
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
              <td>{{$data->college}}</td>
              <td>{{strtoupper($data->category)}}</td>
              <td>{{$data->tuition_fees}}</td>
               @foreach(json_decode($data->rank) as $rank)
              <td> @if(!empty($rank)) {{$rank}}   @else {{'-'}}  @endif </td>
              @endforeach
          </tr>
      @endforeach
       </tbody>
    </table>
    <div class="mt-3">
       @include('pagination',['list' =>$list,'class'=>'rank_details'])
    </div>
 </div>