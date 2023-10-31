@for ($i=1; $i<10; $i++)

<table>
  <tr>
    <td>Company</td>
    
  </tr>
 
</table>

@endfor


@foreach($fruits as $fruit)

      <tr>{{$fruit}}<tr>

@endforeach


<select>
@foreach($car as $cars)

   <option>{{$cars}}</option>   

@endforeach

</select>