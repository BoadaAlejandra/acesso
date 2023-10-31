<h1>EJERCICIO VENTA</h1>
<?php
   $cliente= "PEPITO";
   $producto= "ATUN LOMITOS";
   $canti=5;
   $precio=7;
   $subTot=$canti*$precio;
   $iva=$subTot*0.12;
   if($subTot>20){
    $des=$subTot*0.05;
   }
   $totPagar=$subTot+$iva-$des;
   if (subTot < 50) {
      desc = 0;
      regalo = "NO HAY REGALO";
  } else {
	if (subTot >= 50 && subTot < 100) {
		desc = subTot * 0.05;
		regalo = "CUADERNO";
	} else {
		if (subTot >= 100 && subTot < 200) {
			desc = subTot * 0.07;
			regalo = "LONCHERA";

		} else {
			$regalo="";
			if (subTot >= 200 && subTot < 500) {
				desc = subTot * 0.1;
				regalo = "PELOTA";
				
			} else {
				desc = subTot * 015;
				regalo = "MOCHILA";

			}
		}
	}
}


?>
 

<label>RESULTADOS</label>
<label>Cliente :</label> <?php echo $cliente; ?>
<label>producto :</label> <?php echo $producto; ?>
