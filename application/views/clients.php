

			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<? foreach($clients as $client) : ?>
				<div class="row">
					<p><?= $client->firstName ?> <?= $client->lastName ?> <a class="button" href="/index.php/page/client/<?= $client->id ?>">View/Edit</a></p>
				</div>
			<? endforeach; ?>