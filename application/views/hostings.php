

			<div class="jumbotron">
				<h1><?= $title ?></h1>
			</div>
			<div class="container">
			<? foreach($hostings as $hosting) : ?>
				<div class="row">
					<p><?= $hosting->firstName ?> <?= $hosting->lastName ?> <a class="button" href="/index.php/page/hosting/<?= $hosting->id ?>">View</a></p>
				</div>
			<? endforeach; ?>
			</div>