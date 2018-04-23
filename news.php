<?php
include 'newsclass.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Новости</title>
  </head>
  <body>
    <section>
		  <h1>Картина дня.</h1>
			<?php foreach ($news as $key => $new) { ?>
				<h4><?php echo $news[$key]->getTitle(); ?></h4>
        <p><?php echo $news[$key]->getBody(); ?></p>
			<?php } ?>
		</section>
  </body>
</html>