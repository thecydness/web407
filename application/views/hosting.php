			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<div class="container">
				<? if($hosting) : ?>
					<table class="table">
						<tr>
							<th>Type</th>
							<th>Billing Amount</th>
							<th>Billing Frequency</th>
							<th>Start Data</th>
							<th>End Date</th>
						</tr>
						<tr>
							<td><?= $hosting->type ?></td>
							<td>$<?= $hosting->billingAmount ?></td>
							<td>Every <?= $hosting->billingFrequency ?> months</td>
							<td><?= $hosting->startDate ?></td>
							<td><?= $hosting->endDate ?></td>
						</tr>
					</table>
				<? endif; ?>
			</div>