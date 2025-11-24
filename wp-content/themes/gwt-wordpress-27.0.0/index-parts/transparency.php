<div class="pt-5 container-fluid">
    <!-- Elegant Title with green accent line -->
    <h2 class="fw-bold fs-1 mb-5 position-relative d-inline-block">
        <span class="border-start border-4 border-success ps-3">TRANSPARENCY</span>
    </h2>

    <div class="row g-4 g-xl-5">
        <?php
        $transparency = new WP_Query(array(
            'category_name'  => 'executive-order,memorandum-order',
            'posts_per_page' => 6,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ($transparency->have_posts()) :
            while ($transparency->have_posts()) : $transparency->the_post(); ?>

                <div class="col-md-6 col-lg-4">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                        <div class="transparency-card bg-white rounded-4 shadow-sm h-100 position-relative overflow-hidden
                                    transition-all hover-lift hover-border-green">

                            <div class="p-4 pb-5">
                                <!-- Title -->
                                <h5 class="fw-bold text-dark mb-3 line-clamp-2">
                                    <?php the_title(); ?>
                                </h5>

                                <!-- Short description -->
                                <p class="text-secondary small mb-4 line-clamp-3">
                                    <?php
                                    if (has_excerpt()) {
                                        echo wp_trim_words(get_the_excerpt(), 20);
                                    } else {
                                        echo 'View full executive order or memorandum details.';
                                    }
                                    ?>
                                </p>

                                <!-- Footer: Document Icon + Date + Arrow -->
                                <div class="d-flex align-items-center justify-content-between pt-3 border-top border-light">
                                    <span class="text-success fw-semibold small d-flex align-items-center">
                                        <i class="fas fa-file-contract me-2"></i>
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </span>

                                    <span class="text-success arrow-move">
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
                <div class="alert alert-light border rounded-4 py-5 shadow-sm">
                    <i class="fas fa-info-circle fa-3x text-success mb-3"></i>
                    <h5>No transparency documents at the moment.</h5>
                    <p class="text-muted">Executive Orders and Memorandum will be posted here as soon as available.</p>
                </div>
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

