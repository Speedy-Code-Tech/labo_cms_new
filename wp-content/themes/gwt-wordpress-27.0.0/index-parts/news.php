<!-- NEWS & ANNOUNCEMENTS SECTION – PERFECTLY WORKING -->
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
    }

    .news-small-card:hover h6 a {
        color: #00B518 !important;
    }
</style>

<div class="pt-5 container-fluid">
    <h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-5 fw-bold">
        FLASH UPDATES
    </h2>

    <?php
    $news_query = new WP_Query(array(
        'category_name'  => 'news',
        'posts_per_page' => 4,
        'post_status'    => 'publish'
    ));

    if ($news_query->have_posts()) :
        $posts = $news_query->posts;
        $featured = array_shift($posts); // First post = featured
    ?>

        <div class="row g-5 align-items-start">
            <!-- LEFT: BIG FEATURED NEWS -->
            <div class="col-lg-6">
                <div class="card shadow-lg  border-0 rounded-4 overflow-hidden position-relative h-100">
                    <?php if (has_post_thumbnail($featured)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($featured, 'large'); ?>"
                            class="card-img"
                            alt="<?php echo esc_attr(get_the_title($featured)); ?>"
                            style="height: 420px; object-fit: cover;">

                        <div class="position-absolute bottom-0 start-0 end-0 p-4 text-white"
                            style="background: linear-gradient(transparent, rgba(0,0,0,0.85)); padding-top: 120px;">
                        <?php else : ?>
                            <div class="card-body bg-dark d-flex flex-column justify-content-end p-5" style="min-height: 420px;">
                            <?php endif; ?>

                            <h4 class="fw-bold mb-3">
                                <a href="<?php echo get_permalink($featured); ?>"
                                    class="text-white text-decoration-none stretched-link">
                                    <?php echo esc_html(get_the_title($featured)); ?>
                                </a>
                            </h4>
                            <small class="opacity-75">
                                Date Posted: <?php echo get_the_date('F j, Y', $featured); ?>
                            </small>

                            <?php if (has_post_thumbnail($featured)) : ?>
                            </div><?php endif; ?>
                        </div>
                </div>

                <!-- RIGHT: 4 SMALL NEWS (VERTICAL LIST) -->
                <div class="col-lg-6">
                    <?php foreach ($posts as $post) : setup_postdata($post); ?>
                        <div class="d-flex gap-3 align-items-start shadow-sm bg-white rounded-4 overflow-hidden mb-4 news-small-card"
                            style="border: 1px solid #eee; min-height: 110px;">

                            <!-- Thumbnail -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="d-flex align-items-center">

                                    <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                        class="flex-shrink-0"
                                        alt="<?php the_title(); ?>"
                                        style="width: 120px; height: 120px; object-fit: cover;">
                                </div>
                            <?php else : ?>
                                <div class="bg-light flex-shrink-0 d-flex align-items-center justify-content-center"
                                    style="width: 120px; height: 110px;">
                                    <i class="bi bi-image text-muted fs-3"></i>
                                </div>
                            <?php endif; ?>

                            <!-- Text -->
                            <div class="py-3 pe-3 flex-grow-1">
                                <h5 class="fw-bold mb-1 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>
                                <small class="text-muted d-block mb-2">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                </small>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
                                    <a href="<?php the_permalink(); ?>" class="text-success fw-bold small">Read More →</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>

        <?php else : ?>
            <p class="text-center text-muted fs-5 py-5">No news available at the moment.</p>
        <?php endif; ?>

        <!-- Green divider line -->

        <!-- Elegant gradient divider -->
        <div class="text-center my-5">
            <div class="mx-auto" style="width: 96%; max-width: 1200px; height: 4px; 
             background: linear-gradient(90deg, transparent, #00B518, transparent);
             border-radius: 50px;"></div>
        </div>
        </div>
        <!-- End of container-fluid -->