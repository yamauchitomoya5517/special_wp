<?php get_header(); ?>
<div class="container">
	<nav aria-label="パンくずリスト">
  <ol class="breadcrumb" style="background:#000;">
    <li class="breadcrumb-item"><a href="http://csr-takahirokamiya.com/">ホーム</a></li>
    <li class="breadcrumb-item active" aria-current="page">エントリーフォーム</li>
  </ol>
</nav>
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<h1 class="text-center"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>