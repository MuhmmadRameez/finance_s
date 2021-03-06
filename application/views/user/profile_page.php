<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/profile.css">
<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<!-- Student Profile -->
					<div class="student-profile py-4">
						<div class="container">
							<div class="row">
								<div class="col-lg-4">
									<div class="card shadow-sm">
										<div class="card-header bg-transparent text-center">
											<?php if($basic_profile['image']!="")
											{ ?>
											<img class="profile_img" src="<?= base_url() ?>/assets/user_images/<?= $basic_profile['image'] ?>" alt="">
										<?php }
										else
										{?>
											<img class="profile_img" src="<?= base_url() ?>/assets/user_images/male.png" alt="">
										<?php } ?>
											<h3><?= $basic_profile['first_name'] ?></h3>
										</div>
										<h4 align="center">
											<a href="<?= site_url('User_profile/') ?>" class='btn btn-primary'>Edit Profile</a>
										</h4>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="card shadow-sm">
										<div class="card-header bg-transparent border-0">
											<h3 class="mb-0 text-center"><i class="fa fa-user text-primary"></i>
												Account Information </h3>
												<button class="btn btn-primary btn-sm edit_signup" data-id="<?= $signup_record['id'] ?>"  data-name="<?= $signup_record['first_name']?>" data-lastname="<?=  $signup_record['last_name']?>" data-email="<?=  $signup_record['email']?>" data-contact="<?=  $signup_record['phone']?>">
													<i class="fa fa-edit"></i></button>
										</div>
										<div class="card-body pt-0">
											<table class="table table-bordered text-center">
												<tr>
													<th width="30%">First Name</th>
													<td width="2%">:</td>
													<td><?= ucfirst($signup_record['first_name']) ?></td>
												</tr>
												<tr>
													<th width="30%">Last Name </th>
													<td width="2%">:</td>
													<td><?= ucfirst($signup_record['last_name']) ?></td>
												</tr>
												<tr>
													<th width="30%">Email</th>
													<td width="2%">:</td>
													<td><?= $signup_record['email'] ?></td>
												</tr>
												<tr>
													<th width="30%">Contact</th>
													<td width="2%">:</td>
													<td><?= ucfirst($signup_record['phone']) ?></td>
												</tr>
												<tr>
													<th width="30%">Joining Date</th>
													<td width="2%">:</td>
													<td><?= date('m-d-Y',strtotime($signup_record['account_creation_date'])) ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="tabs">	
										<div class="tab">
											<input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
											<label for="tab-1" class="tab-label">Basic Profile</label>
											<div class="tab-content col-md-12">
												
												<table class="table table-stripped" style="width: 100%;text-align: center">
													<tr>
														<th>Adress</th>
														<th><?= $basic_profile['adress'] ?></th>

														<th>Country</th>
														<th><?= $basic_profile['country'] ?></th>
													</tr>

													<tr>
														<th>State</th>
														<th><?= $basic_profile['province'] ?></th>

														<th>City</th>
														<th><?= $basic_profile['city'] ?></th>
													</tr>

													<tr>
														<th>Language</th>
														<th><?= $basic_profile['language'] ?></th>

														<th>Gender</th>
														<th><?= $basic_profile['gender'] ?></th>
													</tr>

													<tr>
														<th>Date Of Birth</th>
														<th><?= date("m-d-Y",strtotime($basic_profile['adress'])) ?></th>

														<th>Age</th>
														<th><?= $basic_profile['age'] ?></th>
													</tr>
												</table>

											</div>
										</div>
										<div class="tab">
											<input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
											<label for="tab-2" class="tab-label">Financial Profile</label>
											<div class="tab-content col-md-12">
												<table class="table table-stripped" style="width: 100%;text-align: center">
													<tr>
														<th>Salary Income</th>
														<th><?= $financial_profile['salary_income']??0 ?></th>

														<th>Rental Income</th>
														<th><?= $financial_profile['rental_income']??0 ?></th>
													</tr>

													<tr>
														<th>Commission Income</th>
														<th><?= $financial_profile['commision_income']??0 ?></th>

														<th>Other Income</th>
														<th><?= $financial_profile['other_income']??0 ?></th>
													</tr>

													<tr>
														<th>Dividends</th>
														<th><?= $financial_profile['dividends']??0 ?></th>
													</tr>
												</table> 
											</div>
										</div>
										<div class="tab">
											<input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
											<label for="tab-3" class="tab-label">Investment</label>
											<div class="tab-content col-md-12">
												<table class="table table-stripped" style="width: 100%;text-align: center">
													<tr>
														<th>Tax</th>
														<th>Curruncy</th>
														<th>Percentage</th>
														<th>Monthly Yearly</th>
													</tr>
													<tbody>
														<?php foreach($investment as $invest): ?>
															<tr>
																<td><?=$invest->tax ?></td>
																<td><?=$invest->currency ?></td>
																<td><?=$invest->percentage ?></td>
																<td><?=$invest->monthly_yearly ?></td>
															</tr>
														<?php endforeach; ?>	
													</tbody>

												</table>
											</div>
										</div>



										<div class="tab">
											<input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
											<label for="tab-5" class="tab-label">Savings</label>
											<div class="tab-content col-md-12">
												<table class="table table-stripped" style="width: 100%;text-align: center">
													<tr>
														<th>Emergency Fund</th>
														<th><?= $saving['emergency_fund'] ?></th>

														<th>Retirement Fund</th>
														<th><?= $saving['retirement_fund'] ?></th>
													</tr>

													<tr>
														<th>Education Fund</th>
														<th><?= $saving['education_fund'] ?></th>

														<th>Car Replacement Fund</th>
														<th><?= $saving['car_replacement_fund'] ?></th>
													</tr>

													<tr>
														<th>Investment</th>
														<th><?= $saving['investment'] ?></th>

														<th>Other</th>
														<th><?= $saving['other'] ?></th>
													</tr>
												</table></div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div id="styleSelector"></div>
</div>
</div>
</div>

</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Update Account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?= site_url('User/update_user_account') ?>">
					<div class="row">
						<div class="col-md-6">
							<label>Name</label>
							<input type="hidden" id="id" name="id">
							<input type="text" name="name" id="name" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Lastname</label>
							<input type="text" name="lastname" id="lastname" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label>Email</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Contact</label>
							<input type="text" name="contact" id="contact" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update Record <i class="fa fa-refrest"></i></button>
			</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".edit_signup").click(function(){

		var id = $(this).data('id');	
		$("#id").val(id);

		var name = $(this).data('name');	
		$("#name").val(name);

		var lastname = $(this).data('lastname');	
		$("#lastname").val(lastname);

		var email = $(this).data('email');	
		$("#email").val(email);

		var contact = $(this).data('contact');	
		$("#contact").val(contact);



			$("#edit_modal").modal('show');
		})
	})

</script>
