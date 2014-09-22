			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<div class="container">
				<? if($contract) : ?>
					<table class="table">
						<tr>
							<th>Type</th>
							<th>Start Data</th>
							<th>End Date</th>
							<th>Billing Amount</th>
							<th>Billing Frequency</th>
						</tr>
						<tr>
							<td><?= $contract->type ?></td>
							<td><?= $contract->startDate ?></td>
							<td><?= $contract->endDate ?></td>
							<td>$<?= $contract->billingAmount ?></td>
							<td>Every <?= $contract->billingFrequency ?> months</td>
						</tr>
					</table>
				<? endif; ?>
			</div>