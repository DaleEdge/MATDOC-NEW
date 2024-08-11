<html>
<body>
<style>
   
table { width: 100%; border-collapse:collapse; text-align:center;}
table td, table th,tr { overflow-wrap: anywhere; border:1px solid black; border-collapse:collapse; }

</style>

                                    
    <table >
       <thead>
          <tr>
                <th>Quota</th>
                <th style="width:100px">Institute</th>
                <th style="width:70px">Course</th>
                <th style="width:70px">Course Fee</th>
                <th>Category</th>
                <th>Bond</th>
                <th>Stipend</th>
                @for($i=1;$i<=$round;$i++)
                <th>R{{$i}}</th>
                @endfor
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
              <td>{{$data->quota}}</td>
              <td style="width:100px">{{$data->college}}</td>
              <td style="width:70px">{{$data->course}}</td>
              <td style="width:70px">Rs. {{$data->course_fee}}</td>
              <td>{{strtoupper($data->category)}}</td>
               <td>{{$data->bond_years}}</td>
                <td>Rs. {{(int) filter_var($data->stripend_year, FILTER_SANITIZE_NUMBER_INT)}}</td>
              @for($i=0;$i<$round;$i++)
              <td>@if(!empty(json_decode($data->rank)[$i])) {{json_decode($data->rank)[$i]}}   @else {{'-'}}  @endif</td>
              @endfor
             
             
          </tr>
      @endforeach
       </tbody>
    </table>
   

    </body>
</html>

