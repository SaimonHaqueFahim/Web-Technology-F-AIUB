

<?php 
	include 'Controllers/fundController.php';
    include 'header.php';
?>






<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">From:</h4> 
				<input type="text" name="from" class="form-control">
			</div>

            <div class="form-group">
				<h4 class="text">to:</h4> 
				<input type="text" name="to" class="form-control">
			</div>

            <div class="form-group">
				<h4 class="text">Ammount:</h4> 
				<input type="text" name="amount" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_fund" class="btn btn-success" value="Add Fund" class="form-control">
			</div>
		</form>
	</div>

