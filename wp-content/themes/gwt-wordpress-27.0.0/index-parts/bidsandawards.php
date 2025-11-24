<div class="pt-5 container-fluid">
    <h2 class="fw-bold fs-1 mb-5 position-relative d-inline-block">
        <span class="border-start border-4 border-success ps-3">BIDS & AWARDS</span>
    </h2>

    <div class="row g-4 g-xl-5">
        <?php
        $bids = new WP_Query(array(
            'category_name'  => 'bids-and-awards',
            'posts_per_page' => 6,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ($bids->have_posts()) :
            while ($bids->have_posts()) : $bids->the_post(); ?>

                <div class="col-md-6 col-lg-4">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                        <div class="bids-card bg-white rounded-4 shadow-sm border-0 overflow-hidden h-100
                                    transition-all hover-shadow-lg hover-border-success">

                            <div class="p-4 pb-5">
                                <!-- Title -->
                                <h5 class="fw-bold text-dark mb-3 line-clamp-2">
                                    <?php the_title(); ?>
                                </h5>

                                <!-- Description / Excerpt -->
                                <p class="text-secondary small mb-4 line-clamp-3">
                                    <?php
                                    if (has_excerpt()) {
                                        echo wp_trim_words(get_the_excerpt(), 22);
                                    } else {
                                        echo 'Click to view bidding details and documents.';
                                    }
                                    ?>
                                </p>

                                <!-- Footer: Date + Icon + Arrow -->
                                <div class="d-flex align-items-center justify-content-between mt-auto pt-3">
                                    <span class="text-success fw-semibold small d-flex align-items-center">
                                        <i class="fas fa-file-alt me-2"></i>
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </span>

                                    <span class="text-success ms-3 arrow-icon">
                                        <i class="fas fa-arrow-right fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="col-12 text-center py-5">
                <div class="alert alert-light border rounded-4 py-5">
                    <i class="fas fa-info-circle fa-3x text-success mb-3"></i>
                    <h5>No active bids or awards at the moment.</h5>
                    <p class="text-muted">Please check back later.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Beautiful gradient line like in your screenshot -->
    <div class="text-center my-5">
        <div class="mx-auto" style="width: 96%; max-width: 1200px; height: 4px; 
             background: linear-gradient(90deg, transparent, #00B518, transparent);
             border-radius: 50px;"></div>
    </div>
</div>

