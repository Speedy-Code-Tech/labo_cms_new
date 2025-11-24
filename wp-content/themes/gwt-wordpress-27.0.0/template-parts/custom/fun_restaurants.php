<style>
	.touristCard {
		position: relative;
		overflow: hidden;
	}

	.touristCard img {
		transition: transform 0.5s ease;
	}

	.touristCard:hover img {
		transform: scale(1.1);
	}

	/* Hover Overlay (Green + Center Title) */
	.overlay-center {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: rgba(0, 181, 24, 0.90);
		/* Your green #00B518 */
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;
		transition: opacity 0.4s ease;
		padding: 20px;
		text-align: center;
	}

	.touristCard:hover .overlay-center {
		opacity: 1;
	}

	.title-hover {
		color: white;
		font-size: 28px;
		font-weight: 800;
		margin: 0;
		text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
	}

	/* Always Visible Title at Bottom */
	.title-bottom {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		padding: 40px 20px 18px;
		/* more space for gradient */
		pointer-events: none;
		overflow: hidden;
	}

	/* This creates the dark-to-transparent gradient ONLY behind the text */
	.title-bottom::before {
		content: '';
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		height: 100px;
		/* height of gradient */
		background: linear-gradient(to top,
				rgba(0, 0, 0, 0.85) 0%,
				rgba(0, 0, 0, 0.5) 50%,
				transparent 100%);
		pointer-events: none;
	}

	/* The actual title text */
	.title-text {
		position: relative;
		/* above the gradient */
		color: white;
		font-size: 22px;
		font-weight: 800;
		margin: 0;
		text-align: center;
		text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
		line-height: 1.3;
		word-wrap: break-word;
	}

	/* Optional: make title pop even more on hover */
	.touristCard:hover .title-text {
		transform: scale(1.05);
		transition: transform 0.3s ease;
		display: none;
	}

	.touristCard:hover .title-bottom {
		display: none;
	}
</style>
<div class="d-flex flex-wrap gap-4 justify-content-center">

	<article id="post-<?php the_ID(); ?>" <?php post_class('touristCard'); ?>
		style="width: 380px; height: 380px; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); position: relative; cursor: pointer;">

		<!-- Featured Image -->
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large', [
				'class' => 'w-100 h-100 object-fit-cover',
				'style' => 'transition: transform 0.5s ease; display: block;'
			]); ?>
		<?php else : ?>
			<div class="bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center h-100">
				<span class="text-muted fs-3 fw-bold">No Image</span>
			</div>
		<?php endif; ?>

		<!-- Green Overlay + Title on Hover (Center) -->
		<div class="overlay-center">
			<h3 class="title-hover"><?php the_title(); ?></h3>
		</div>

		<!-- Title Always Visible at Bottom -->
		<div class="title-bottom">
			<h3 class="title-text"><?php the_title(); ?></h3>
		</div>

		<!-- Clickable Area -->
		<a href="<?php the_permalink(); ?>" class="stretched-link"></a>

	</article>
</div>