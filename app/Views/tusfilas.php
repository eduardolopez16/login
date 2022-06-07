<div class="container">
  <div class="row">
   <div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">


   
<?php
$i=1;
foreach($data as $row)
{
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row->fila."</td>";
echo "</tr>";
$i++;
}

 // foreach ($tusfilas as $allfilas){
    
   // echo $allfilas['fila'];
   // echo $allfilas['hora-comienzo'];
    //echo $allfilas['hora-termino'];

//}
?>


        </div>
    </div>
</div>  

