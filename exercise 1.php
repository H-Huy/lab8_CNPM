<html>
<body>
	<table border="1" style="margin:auto; border-collapse: collapse; text-align:center; width:70%; height:300px" >
		<tr><td colspan="10">BANG CUU CHUONG</td></tr>
		<?php
			for($i=1; $i<=10; $i++){
				echo "<tr>";
				for ($j=1;$j<=10;$j++){
					echo "<td>$i x $j = ". $i*$j. "</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>