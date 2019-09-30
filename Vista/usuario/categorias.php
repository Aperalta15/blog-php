<h5>Categorias</h5>
<?php
echo "<table class='table table-striped'>";
  echo "<thead>";
     echo "<tr>";
       echo "<th>#</th>";
       echo "<th>Categoria</th>";
     echo "</tr>";
   echo "</thead>";
 foreach ($r as $key => $value) {
  echo "<tr>";
    echo "<td>".$value['catId']."</td>";
    echo "<td>".$value['catNombre']."</td>";
  echo "</tr>";
 }

echo "</table>";
if(isset($_SESSION['NOMBRE'])){
 if ($_SESSION['ROL']==1) {

 }
}
?>
