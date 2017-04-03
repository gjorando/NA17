<!DOCTYPE html>
<html lang="fr">
<?php require_once("include/head.php"); ?>
<body>
	<?php require_once("include/nav.php"); ?>
	<div id="main">
		<h1>Statistiques</h1>
		<h2>Données de production</h2>
		<h3>Comptages</h3>
		<?php fancy_table($stats, $stats_col_names); ?>
	</div>
</body>
</html>
