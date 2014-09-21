

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
				<? if($previous) : ?>
					<a class="button" href="<?= $previous->id ?>">Previous Client</a>
				<? endif; ?>
				<? if($next) : ?>
					<a class="button" href="<?= $next->id ?>">Next Client</a>
				<? endif; ?>
			</div>