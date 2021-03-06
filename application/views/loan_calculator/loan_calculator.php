<!DOCTYPE html>
<html>
<head>
	<title>Loan Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
	<h4 align="center">Loan Calculator</h4>
	<form method="post" action="<?= site_url("Loan_calculator/calculation") ?>">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Prinipal</label>
			<input type="text" name="prinipal" class="form-control col-md-6" placeholder="Enter Prinipal" required>
		</div>

		<div class="form-group">
			<label>Down payment</label>
			<input type="text" name="down_payment" class="form-control col-md-6" placeholder="Enter Down Payment" required>
		</div>

		<div class="form-group">
			<label>Off Year</label>
			<input type="text" name="off_year" class="form-control col-md-6" placeholder="Enter Loan Amount" required>
		</div>

		<div class="form-group">
			<label>Installment Frequency</label>
			<select class="form-control col-md-6" name="installmen_frequency">
				<option value="">Select Installment Frequnecy</option>
				<option value="monthly">Monthly</option>
				<option value="yearly">Yearly</option>

			</select>
		</div>

		<div class="form-group">
			<label>Intrest Per Period</label>
			<input type="text" name="intrest_per_period" class="form-control col-md-6" placeholder="Enter Loan Amount" required>
		</div>

		<div class="form-group">
			<label>MOD</label>
			<input type="text" name="mod" class="form-control col-md-6" placeholder="Enter Loan Amount" required>
		</div>
		<button type="submit" class="btn btn-primary">Calculate</button>
	</form>
	</div>
<div class="col-md-6">
	<h4>Result</h4>
	<p>Remaining Amount:<?= $remaining_amount??0 ?></p>
	<p>Duration:<?= $years??0 ?></p>
	<p>Payment per month : <?= number_format($payment_per_month??0) ?></p>
	<p>Intrest rate : <?= number_format($intrest_per_period??0) ?></p>
	<h4>payment schedule</h4>
	<table class="table table-border">
		<tr>
			<th>Month</th>
			<th>Beginning Balance</th>
			<th>Intrest</th>
			<th>Principle</th>
			<th>Ending Balance</th>
		</tr>
		<tbody>
			<?php
			if ($months!="") 
			{
				$balance=0;
				$beginning_amount =0;
			 foreach($months as $key=>$value): ?>
				
					
					<?php
					for($result=1;$result<=$years;$result++){ 
						$beginning_amount = $remaining_amount -= $payment_per_month;
						$balance_amount =$remaining_amount - $payment_per_month;
						$intrest = $balance_amount/$intrest_per_period*$years-1;

					?>
				<tr>	
					<td><?= $result ?></td>
					<td><?= number_format($beginning_amount) ?></td>
					<td><?= number_format($intrest) ?></td>
					<td><?= number_format($payment_per_month) ?></td>
					<td><?= number_format($balance_amount) ?></td>
					<?php } ?>
				</tr>
			<?php endforeach;} ?>
		</tbody>
	</table>
</div>
</div>
</div>
</body>
</html>