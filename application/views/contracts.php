

			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<div class="container">
			<? foreach($contracts as $contract) : ?>
				<div class="row">
					<p><?= $contract->firstName ?> <?= $contract->lastName ?> <a class="button" href="/index.php/page/contract/<?= $contract->id ?>">View</a></p>
				</div>
			<? endforeach; ?>
			</div>