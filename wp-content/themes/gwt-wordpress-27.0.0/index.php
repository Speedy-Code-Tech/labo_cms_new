<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-60
 */

get_header();
include_once('inc/banner.php');
?>
<style>
#main-content {
    padding: 0;
}

.ban-green {
    background-color: #03720D;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 10px 0;
    margin-bottom: 20px;
    font-size: 18px;
}

.greens {
    width: 100%;
    height: 200px;
    border-radius: 10px;
    background-color: #03720D;
    position: absolute;
    top: 0;
    left: 0;
    /* cover the card */
    opacity: 0;
    /* invisible */
    visibility: hidden;
    /* not in tab order */
    cursor: pointer;
    transition: opacity 0.55s ease, visibility 0.55s ease;
    /* <-- transition here */
    display: flex;
    /* keep flex so children layout correctly */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    color: white;
}

/* 2. Show it on hover */
.t1:hover .target1,
.t2:hover .target2,
.t3:hover .target3 {
    opacity: 1;
    visibility: visible;
    transition: opacity 0.55s ease, visibility 0s 0s;
    /* instant visibility after opacity */
}

/* Extra-large on large screens only */
.h1-lg {
    font-size: 1.2rem;
}


/* lg and up */
@media (min-width: 1200px) {
    .h1-lg {
        font-size: 4rem;
    }
}


@media (min-width: 992px) {
    .h1-lg {

        font-size: clamp(1rem, 0.75rem + 3vw, 2.5rem);
    }
}

.textsixe {

    font-size: clamp(0.75rem, 0.75rem + 3vw, 1rem);
}

@media(min-width:1540px) {
    .textsixe {
        font-size: clamp(0.75rem, 0.5rem + 3vw, 1.7rem);
    }

}
</style>
<?php govph_displayoptions('govph_panel_top'); ?>

<div class="container-main" role="document">

    <div id="main-content">
        <div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
            <div class="pt-1 container-fluid d-flex flex-column flex-sm-row gap-3">

                <div class="container-fluid bg-white  rounded-4 p-0 p-md-5 mx-auto">

                    <!-- Border top styling -->
                    <div class=" pt-3 d-flex flex-column flex-lg-row container-fluid">

                        <!-- Historical Text Content -->
                        <div class="text-body lh-lg col-12 col-lg-6 ps-3">
                            <h2
                                class="border border-top-0 poppins-bold border-end-0 border-bottom-0 border-2 border-success ps-3">
                                WELCOME TO <br>
                                <span class=" h1-lg  poppins-bold darkGreen">LABO CAMARINES NORTE</span>
                            </h2>
                            <p class="textsixe pt-3 px-0 px-lg-5 m-0" style="line-height: 1.7em; text-align: justify;">
                                Labo is a first-class municipality in Camarines Norte. It is rich in culture and
                                beautiful sceneries. It was named after the miscommunication of two languages. Labo is
                                blessed with natural resources, rich harvest and people. As a firs-class municipality,
                                we offer exciting adventures. Experience and reward yourself with the beautiful nature
                                in different waterfalls. Go on a long journey and enjoy the panoramic view of the 3
                                mountains in Labo. Treverse in rivers and caves and visit some historical places that
                                made a big impact in our history. Dream… Explore… Discover the beauty of our town.
                                Again, with the warmest of hearts and the best intentions, we welcome you! </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="container-fluid">
                                <video class="img-fluid rounded pt-3"
                                    src="<?= get_template_directory_uri() . '/images/video.mp4' ?>" autoplay muted loop>
                                </video>
                                <div class="container-fluid text-secondary text-end p-0 m-0" style="font-size:10px;">
                                    Video Courtesy: Camarines Norte Provincial Information Office</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php require(get_template_directory() . '/index-parts/transparency.php'); ?>
            <?php require(get_template_directory() . '/index-parts/bidsandawards.php'); ?>
            <?php require(get_template_directory() . '/index-parts/news.php'); ?>
            <?php require(get_template_directory() . '/index-parts/tourism.php'); ?>
            <?php require(get_template_directory() . '/index-parts/quicklinks.php'); ?>
            <?php require(get_template_directory() . '/index-parts/socials.php'); ?>


            <!-- END OF BLOCK -->

        </div><!-- end content -->

        <?php
		if (is_active_sidebar('left-sidebar')) {
			govph_displayoptions('govph_sidebar_left');
		}
		?>
        <?php
		if (is_active_sidebar('right-sidebar')) {
			govph_displayoptions('govph_sidebar_right');
		}
		?>

    </div>
</div>


<?php govph_displayoptions('govph_panel_bottom'); ?>

<?php get_footer(); ?>