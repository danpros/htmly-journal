<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="gh-article post">
	<header class="gh-article-header gh-canvas">
		<h1 class="gh-article-title">Search results not found!</h1>
	</header>
	<div class="gh-content gh-canvas">
		<p>Please search again, or would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
	<form class="search-form" role="search">
		<label>
			<span class="screen-reader-text">Search for:</span>
			<input type="search" title="Search for:" name="search" value="" placeholder="Search …" class="search-field">
		</label>
		<button class="search-submit" type="submit"><span class="screen-reader-text">Search</span></button>
	</form>
	</div>
</article>

