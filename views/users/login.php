<div class="col-md-8">
	<div class="card mt-3 border-dark">
	  <div class="card-header">
	    User Login
	  </div>
	  <div class="card-body">
	    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">


	    	<div class="form-group">
	    		<label for="">Email</label>
					<input type="text" name="email" class="form-control">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Password</label>
	    		<input type="password" name="password" class="form-control">
	    	</div>
	    	<input class="btn btn-primary" name="submit" type="submit" value="Login">

	    </form>
	  </div>
	</div>
</div>

