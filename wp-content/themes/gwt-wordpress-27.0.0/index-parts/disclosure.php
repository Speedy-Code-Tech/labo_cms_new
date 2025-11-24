	<div class="pt-5 container-fluid">
	    <h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">Disclosure Posts</h2>

	    <div class="row g-4">
	        <?php
            // QUERY FOR DISCLOSURE CATEGORY POSTS
            $disclosure_posts = new WP_Query(array(
                'category_name' => 'disclosure',  // Your slug
                'posts_per_page' => 3,           // Show 6 posts
                'post_status' => 'publish'
            ));

            if ($disclosure_posts->have_posts()) :
                while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
            ?>
	                <style>
	                    #disclosure_<?php echo get_the_ID(); ?> {
	                        background-color: white;
	                        transition: 0.2s;
	                    }

	                    .link1 {
	                        color: black;
	                        transition: 1.5s;
	                        background: transparent;
	                    }

	                    #disclosure_<?php echo get_the_ID(); ?>:hover,
	                    #disclosure_<?php echo get_the_ID(); ?>:hover div h5 .link1 {
	                        /* background-color: #00B518; */
	                        color: #00B518;
	                    }
	                </style>
	                <div class="col-md-6 col-lg-4">
	                    <div id="disclosure_<?= get_the_ID();; ?>" class=" card h-100 shadow-sm border-0 boxs rounded-4 overflow-hidden">
	                        <?php if (has_post_thumbnail()) : ?>
	                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
	                                class="card-img-top"
	                                alt="<?php the_title(); ?>"
	                                style="height: 200px; object-fit: cover;">
	                        <?php endif; ?>

	                        <div class="card-body d-flex flex-column p-4">
	                            <h5 class="card-title fw-bold  mb-2">
	                                <a href="<?php the_permalink(); ?>" class="text-decoration-none link1"><?php the_title(); ?></a>
	                            </h5>
	                            <a href="<?php the_permalink(); ?>" class="card-text  flex-grow-1" style="font-size: 14px;">
	                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
	                            </a>
	                            <div class="d-flex justify-content-between align-items-end mt-auto">
	                                <small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
	                                <!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
	                            </div>
	                        </div>
	                    </div>

	                </div>
	            <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
	            <div class="col-12">
	                <p class="text-center text-muted">No disclosure posts found.</p>
	            </div>
	        <?php endif; ?>
	    </div>
	    <div class="container-fluid text-center">
	        <div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
	    </div>
	</div>