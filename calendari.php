<?php
$diaActual = date("j");
$mes = date("n");
$mesLetra = date ("F");
$año = date("Y");
$totalDiasMes = date("t");
$diaSemana=date("w",mktime(0,0,0,$mes,1,$año));
?>
<html>
	<style>
		td{border: 1px solid black; width: 50px;height: 50px;background-color: #66ccff;}
		#actual {background-color: red;}
		table {margin: 0 auto;}
	</style>
	<body>
	<table>
		<tr>
			<?php  echo "<caption>    $mesLetra &nbsp;  $año</caption>" ?>;
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
			<th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
		<tr>
			<?php
				$dia = 1;
				for($i=1;$i <=42;$i++){
					//coloca el primer día en el día de la semana correspondiente
					if ($i == $diaSemana)
					{
						echo "<td> $dia </td>";
						$dia++;
					}
					
					//si la variable i es más pequeña al dia de la semana (en este caso 5)
					//o es más grande al total de días que tiene el més (más cuatro espacios en blanco que representarían los últimos días del mes anterior)
					else if ($i < $diaSemana || $i > $totalDiasMes+4)
					{
						 echo "<td> &nbsp; </td>";
					}
					
					// si la variable día es igual al día actual, lo pintará con otro color
					else if ($dia == $diaActual)
					{
						echo "<td id='actual'>$dia</td>";
						$dia++;
					}
					
					// simplemente coloca los demás días
					else 
					{
						echo "<td> $dia </td>";
						$dia++;
					}

					if ($i % 7 == 0){
							echo "<tr></tr>";
					}
				}
			?>
		</tr>
	</table>
	</body>
</html>
