<div class="col-md-8">
	<div class="card mt-3 border-dark">
	  <div class="card-header">
	    Share Something
	  </div>
	  <div class="card-body">
	    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    	<div class="form-group">
	    		<label for="">Share Title</label>
	    		<input type="text" name="title" class="form-control">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Body</label>
					<textarea name="body" cols="2" rows="4" class="form-control"></textarea>
	    	</div>

	    	<div class="form-group">
	    		<label for="">Link</label>
	    		<input type="text" name="link" class="form-control">
	    	</div>
	    	<input class="btn btn-primary" name="submit" type="submit" value="Submit">
	    	<a class="btn btn-danger" href="<?php echo ROOT_URL; ?>shares">Cancel</a>
	    </form>
	  </div>
	</div>
</div>

