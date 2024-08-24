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
               @for($i=1;$i<=$round;$i++)
             @php  
             $r='r'.$i.'_air';
             $m='r'.$i.'_marks';
             @endphp
              <td>@if(!empty($data->$r)) {{$data->$r}}   @else {{'-'}}  @endif   @if(!empty($data->$m)) ({{$data->$m}})   @else {{'-'}}  @endif  </td>
              @endfor
          </tr>
      @endforeach
       </tbody>
    </table>
    <div class="mt-3">       
                                 </div>
 </div>