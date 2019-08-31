<div class="col-md-8">
	<div class="card mt-3 border-dark">
	  <div class="card-header">
	    Register User
	  </div>
	  <div class="card-body">
	    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	    	<div class="form-group">
	    		<label for="">Users Name</label>
	    		<input type="text" name="name" class="form-control">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Email</label>
					<input name="email" type="text" class="form-control">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Password</label>
	    		<input type="password" name="password" class="form-control">
	    	</div>
	    	<input class="btn btn-primary" name="submit" type="submit" value="Register">

	    </form>
	  </div>
	</div>
</div>

