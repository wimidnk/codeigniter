<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['title']; ?> </h3>
	<small class="post-date"><?php echo $post['created_at']; ?> </small>
	<p><?php echo $post['body']; ?> </p>
<?php endforeach; ?>