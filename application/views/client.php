

			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<div class="container">
				<form method="post" action="/index.php/page/client_update/<?= $client->id ?>">
					<div class="row">
						<div class="col-md-2">
							<label>First Name</label>
							<input type='text' name='firstName' value='<?= $client->firstName ?>' />
						</div>
						<div class="col-md-2">
							<label>Last Name</label>
							<input type='text' name='lastName' value='<?= $client->lastName ?>' />
						</div>
						<div class="col-md-2">
							<label>Email</label>
							<input type='text' name='emailAddress' value='<?= $client->emailAddress ?>' />
						</div>
						<div class="col-md-2">
							<label>Address</label>
							<input type='text' name='address' value='<?= $client->address ?>' />
						</div>
						<div class="col-md-2">
							<label>Address 2</label>
							<input type='text' name='address2' value='<?= $client->address2 ?>' />
						</div>
						<div class="col-md-2">
							<label>City</label>
							<input type='text' name='city' value='<?= $client->city ?>' />
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label>State</label>
							<input type='text' name='state' value='<?= $client->state ?>' />
						</div>
						<div class="col-md-2">
							<label>Zip</label>
							<input type='text' name='zip' value='<?= $client->zip ?>' />
						</div>
						<div class="col-md-2">
							<label>Phone</label>
							<input type='text' name='phoneNumber' value='<?= $client->phoneNumber ?>' />
						</div>
						<div class="col-md-2">
							<label>Cell</label>
							<input type='text' name='cellNumber' value='<?= $client->cellNumber ?>' />
						</div>
					</div>
					<br />
					<div class="row">
						<input class="col-md-12" type="submit" value="Update" /></p>
					</div>
				</form>
				<br />
				<? if($contracts) : ?>
					<h2>Contracts</h2>
					<table class="table">
						<tr>
							<th>Type</th>
							<th>Start Data</th>
							<th>End Date</th>
							<th>Billing Amount</th>
							<th>Billing Frequency</th>
							<th>Action</th>
						</tr>
					<? foreach($contracts as $contract) : ?>
						<tr>
							<td><?= $contract->type ?></td>
							<td><?= $contract->startDate ?></td>
							<td><?= $contract->endDate ?></td>
							<td>$<?= $contract->billingAmount ?></td>
							<td>Every <?= $contract->billingFrequency ?> months</td>
							<td><a href="/index.php/page/contract/<?= $contract->id ?>">View/Edit</a></td>
						</tr>
					<? endforeach;  ?>
					</table>
				<? endif; ?>
				<? if($hostings) : ?>
					<h2>Hosting Accounts</h2>
					<table class="table">
						<tr>
							<th>Type</th>
							<th>Billing Amount</th>
							<th>Billing Frequency</th>
							<th>Start Data</th>
							<th>End Date</th>
							<th>Action</th>
						</tr>
					<? foreach($hostings as $hosting) : ?>
						<tr>
							<td><?= $hosting->type ?></td>
							<td>$<?= $hosting->billingAmount ?></td>
							<td>Every <?= $hosting->billingFrequency ?> months</td>
							<td><?= $hosting->startDate ?></td>
							<td><?= $hosting->endDate ?></td>
							<td><a href="/index.php/page/hosting/<?= $hosting->id ?>">View/Edit</a></td>
						</tr>
					<? endforeach;  ?>
					</table>
				<? endif; ?>
				<br />
				<? if($previous) : ?>
					<a class="button" href="<?= $previous->id ?>">Previous Client</a>
				<? endif; ?>
				<? if($next) : ?>
					<a class="button" href="<?= $next->id ?>">Next Client</a>
				<? endif; ?>
			</div>