<div class="pt-5 container-fluid">
    <h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">
        TOURISM & ACTIVITY
    </h2>

    <div class="row g-4">
        <?php
        // Correct way to query multiple categories
        $tourism = new WP_Query(array(
            'category_name'  => 'where-to-stay,restaurants,fun-and-adventure', // This actually works in many cases
            // Alternative safer method:
            // 'category__in' => array( cat_ID_1, cat_ID_2, cat_ID_3 ),
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ($tourism->have_posts()) :
            while ($tourism->have_posts()) : $tourism->the_post(); ?>
                <div class="col-12 col-lg-4"> <!-- Changed to col-lg-4 for 3 items per row -->
                    <a href="<?= the_permalink(); ?>">

                        <div class="card shadow-lg border-0 rounded-2 overflow-hidden position-relative h-100">

                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>"
                                    class="card-img"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                    style="height: 420px; object-fit: cover;">

                                <div class="position-absolute bottom-0 start-0 end-0 p-4 text-white"
                                    style="background: linear-gradient(transparent, rgba(0,0,0,0.85)); padding-top: 120px;">
                                    <h4 class="fw-bold mb-3">
                                        <a href="<?php the_permalink(); ?>"
                                            class="text-white text-decoration-none stretched-link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <small class="opacity-75">
                                        Date Posted: <?php echo get_the_date('F j, Y'); ?>
                                    </small>
                                </div>

                            <?php else : ?>
                                <div class="card-body bg-dark d-flex flex-column justify-content-end p-5" style="min-height: 420px;">
                                    <h4 class="fw-bold mb-3 text-white">
                                        <a href="<?php the_permalink(); ?>"
                                            class="text-white text-decoration-none stretched-link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <small class="opacity-75 text-white">
                                        Date Posted: <?php echo get_the_date('F j, Y'); ?>
                                    </small>
                                </div>
                            <?php endif; ?>

                        </div>
                    </a>

                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="col-12">
                <p class="text-center text-muted">No Tourism & Activity posts found.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Elegant gradient divider -->
    <div class="text-center my-5">
        <div class="mx-auto" style="width: 96%; max-width: 1200px; height: 4px; 
             background: linear-gradient(90deg, transparent, #00B518, transparent);
             border-radius: 50px;"></div>
    </div>
</div>