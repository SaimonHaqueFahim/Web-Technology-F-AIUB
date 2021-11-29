<?php 
include 'header.php';
	include 'controllers/fundController.php';
	$categories = getAllTransactions();
	
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>From</th>
			<th>To </th>
			<th>Amount</th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					///$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["from"]."</td>";
                        echo "<td>".$c["to"]."</td>";
                        echo "<td>".$c["amount"]."</td>";
					
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->