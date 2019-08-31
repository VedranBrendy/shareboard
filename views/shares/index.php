<div class="container">
	<?php if (isset($_SESSION['is_logged_in'])): ?>
		<a href="<?php echo ROOT_URL; ?>shares/add" class="btn btn-success mt-3">Share Something</a>
	<?php endif; ?>
	
	<?php foreach ($viewmodel as $item): ?>
		<div class="card border-dark col-md-12 my-3">
		  <div class="card-body">
		    <h3><?php echo $item['title']; ?></h3>
		    <small><?php echo $item['create_date']; ?></small>
		    <hr>
		    <p><?php echo $item['body']; ?></p>
		    <br>
		    <a class="btn btn-secondary" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
		  </div>
		</div>
	<?php endforeach ?>
</div>