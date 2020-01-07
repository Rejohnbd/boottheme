<form action="<?php echo site_url(); ?>" method="get">
	<label for="search">Search</label>
	<!-- <input type="hidden" name="cat" value="1"> -->
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
	<button type="submit">Search</button>
</form>