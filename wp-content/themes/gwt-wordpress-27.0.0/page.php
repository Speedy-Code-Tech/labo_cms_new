<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-50
 */

get_header();
include_once('inc/banner.php');
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Carter+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

#one {
    padding: 20px;
    border: 1px solid #00B518;
    border-radius: 16px;
    /* background-color: #00B518; */
    /* color:white; */
    /* text-align: center; */
}

.ninja-forms-field {
    /* 1. Reset/Base styles */
    display: block;
    /* Ensure it takes full width of its container */
    width: 100%;
    padding: 12px 16px;
    /* Comfortable padding inside the field */
    line-height: 1.5;
    /* Good line height for readability */
    font-size: 1rem;
    font-family: inherit;
    color: #333;
    background-color: #fff;

    /* 2. Border and Corners */
    border: 1px solid #ccc;
    border-radius: 8px;
    /* Slightly rounded corners */
    transition: all 0.2s ease-in-out;
    /* Smooth transitions for hover/focus */

    /* 3. Subtle Shadow for depth */
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

/* 4. Hover and Focus effects (most important part for interaction) */
.ninja-forms-field:hover {
    border-color: #999;
}

.ninja-forms-field:focus {
    color: #000;
    background-color: #fff;
    border-color: #0d6efd;
    /* Use a primary blue color for focus */
    outline: 0;
    /* Create a strong visual indicator using box-shadow (like Bootstrap) */
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

/* Ensure placeholder text is slightly muted */
.ninja-forms-field::placeholder {
    color: #999;
    opacity: 1;
    /* Override default opacity */
}

#nf-field-16 {
    background-color: #00B518;
    color: white;
    border: none;
    width: 100%;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.nf-form-fields-required,
#nf-form-title-4 {
    display: none;
}

.contact-form-header {
    text-align: center;
    /* Center the entire block */
    padding: 20px;
    font-family: 'Georgia', serif;
    /* Use a classic, serif font similar to the image */
}

.contact-form-header h1 {
    color: #2e5428;
    /* Darker green color */
    font-size: 30px;
    font-weight: bold;
    /* The text appears bold */
    letter-spacing: 2px;
    /* Slight spacing to match the image */
    margin-bottom: 5px;
    /* Adjust spacing between text and divider */
}

.divider {
    display: flex;
    align-items: center;
    /* Vertically align items in the divider */
    justify-content: center;
    /* Center the line and icon */
    width: 100%;
    max-width: 300px;
    /* Set a max width for the line as it's not full-width */
    margin: 0 auto;
    /* Center the divider block itself */
    line-height: 1;
    /* Helps with vertical alignment of the icon */
    position: relative;
}

.divider::before,
.divider::after {
    content: '';
    flex-grow: 1;
    /* Makes the line segments grow to fill the space */
    height: 1px;
    background-color: #000;
    /* Black line */
    /* Add margin to prevent the line from touching the icon */
    margin: 0 5px;
}

.divider-icon {
    font-style: normal;
    /* To remove any default italics */
    font-weight: bold;
    font-size: 21px;
    /* Size of the 'i' */
    color: #000;
    /* Black color for the icon */
    padding: 0 5px;
    /* Space around the icon */
    /* Adjust vertical position of the icon to sit on the line */
    position: relative;
    top: 1px;
}

.bgSocial {
    background-color: #15477aff;
    padding: 10px;
    border-radius: 8px;
    margin-right: 30px;
}

.social-buttons-container {
    text-align: center;
    margin-top: 30px;
    /* Space from the header */
    display: flex;
    justify-content: center;
    /* Center the buttons */
    gap: 15px;
    /* Space between buttons */
    flex-wrap: wrap;
    /* Allow buttons to wrap on smaller screens */
}

.social-button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    /* Width for circular button */
    height: 50px;
    /* Height for circular button */
    border-radius: 50%;
    /* Makes it a circle */
    background-color: #00B518;
    /* Base color provided */
    color: #fff;
    /* White icon color */
    font-size: 24px;
    /* Size of the social icon */
    text-decoration: none;
    /* Remove underline from links */
    transition: background-color 0.3s ease, transform 0.3s ease;
    /* Smooth hover effects */
}

.social-button:hover {
    background-color: #008f13;
    /* Slightly darker green on hover */
    transform: translateY(-3px);
    /* Slight lift effect on hover */
}

/* Optional: Individual button colors if you want them */
.social-button.facebook {
    /* background-color: #3b5998; */
}

.social-button.twitter {
    /* background-color: #1da1f2; */
}

.social-button.instagram {
    /* background-color: #e4405f; */
    /* You might use a gradient for Instagram's true brand color */
    /* background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); */
}

.social-button.tiktok {
    /* background-color: #000000; */
}



.headTitle {
    font-family: "Carter One", system-ui;
    font-weight: 400;
    font-style: normal;
}

.comma {
    color: #000;
}

.title {
    padding-top: 10px;
    font-style: italic;
}

.mayor {
    background: url(<?php echo get_template_directory_uri() . '/images/jojo.jpg'?>);
    color: #fff;
    width: 100%;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    background-size: cover;
    /* background-position-y: 0px; */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 180px;
    background-repeat: no-repeat;
    position: relative;

    /* background-color: #000000; */
}

.bgArticle {
    background: url(<?php echo get_template_directory_uri() . '/images/lgu_icon.png'?>);
    background-size: 600px;
    background-repeat: no-repeat;
    background-position-y: 0px;
    background-position-x: 500px;
    opacity: 0.2;
    width: 100%;
    height: 400px;
    position: absolute;
}

.greenLine {
    width: 150px;
    height: 4px;
    background-color: #008f13;
    border-radius: 50px;
}

.htitle {
    font-size: 50px;
}

.tagline {
    font-family: "Carter One", system-ui;
    font-weight: 400;
    font-style: normal;
    display: flex;
    gap: 10px;
    color: #FFF;
    font-size: 30px;
    justify-content: center;

}

.qoute {
    font-size: 1em;
}

@media only screen and (max-width: 600px) {
    .htitle {
        font-size: 30px;
    }

    .tagline {
        font-size: 15px;
        gap: 2px;
    }

    .headTitle {
        font-size: 20px;
    }
}

@media only screen and (min-width: 600px) {
    .htitle {
        font-size: 50px;
    }

    .tagline {
        font-size: 30px;
    }

    .headTitle {
        font-size: 30px;
    }
}

@media only screen and (min-width: 768px) {
    .htitle {
        font-size: 50px;
    }

    .tagline {
        font-size: 30px;
    }

    .headTitle {
        font-size: 50px;
    }
}

/* If you uncomment individual colors, make sure to adjust hover effects */
/*
.social-button.facebook:hover { background-color: #2d4373; }
.social-button.twitter:hover { background-color: #0f8ee0; }
.social-button.instagram:hover { filter: brightness(0.9); }
.social-button.tiktok:hover { background-color: #333333; }
*/
</style>
<?php govph_displayoptions('govph_panel_top'); ?>

<div id="main-content" class="container-main p-0 pb-5" role="document">
    <div>
        <?php $val = get_the_title();

		if ($val == "CONTACT US") {
			$val = "contact";
		}
		if ($val == "LABO MUNICIPAL HYMN"): ?>
        <style>
        @media (max-width: 768px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 3rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p {
                font-size: 1.4rem !important;
            }
        }

        @media (max-width: 480px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 2.5rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:first-of-type {
                font-size: 1.25rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:last-of-type {
                font-size: 1.15rem !important;
            }
        }
        </style>

        <div class="container-fluid p-0 pb-4">
            <div style="
        width: 100%;
        height: 65vh;                  /* responsive height */
        min-height: 420px;
        background: url(<?= get_template_directory_uri() ?>/images/tourism/tourism.JPG) center center / cover no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    ">
                <!-- Dark overlay -->
                <div style="position: absolute; inset: 0; background: rgba(15,15,16,0.4);"></div>

                <!-- Text content -->
                <div style="position: relative; z-index: 2; padding: 20px;">
                    <h1 style="
                font-size: 4.5rem;
                font-weight: 900;
                color: #FFF;               /* exact turquoise color */
                margin: 0 0 20px 0;
                letter-spacing: 2px;
                text-shadow: 0 4px 10px rgba(0,0,0,0.6);
            ">LABO MUNICIPAL HYMN</h1>

                    <div style="
                width: 100px;
                height: 4px;
                background: #00B518;
                margin: 0 auto 30px auto;
            "></div>

                    <p style="
                font-size: 1.8rem;
                font-weight: 600;
                margin: 0 0 8px 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">The Official Town Anthem of Labo, Camarines Norte</p>

                    <p style="
                font-size: 1.6rem;
                font-weight: 500;
                margin: 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            "></p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 d-flex flex-column  justify-content-center align-items-center">
            <div class="container-fluid">
                <iframe width="1689" height="640" src="https://www.youtube.com/embed/_GWW2aVXeCw?list=RD_GWW2aVXeCw"
                    title="Sulong Labo" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
        </div>
        <?php elseif ($val == "MAYORS PROFILE"): ?>
        <style>
        @media (max-width: 768px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 3rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p {
                font-size: 1.4rem !important;
            }
        }

        @media (max-width: 480px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 2.5rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:first-of-type {
                font-size: 1.25rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:last-of-type {
                font-size: 1.15rem !important;
            }
        }
        </style>

        <div class="container-fluid p-0 pb-4">
            <div style="
        width: 100%;
        height: 65vh;                  /* responsive height */
        min-height: 420px;
        background: url(<?= get_template_directory_uri() ?>/images/tourism/mp.jpg) center center / cover no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    ">
                <!-- Dark overlay -->
                <div style="position: absolute; inset: 0; background: rgba(15,15,16,0.4);"></div>

                <!-- Text content -->
                <div style="position: relative; z-index: 2; padding: 20px;">
                    <h1 style="
                font-size: 4.5rem;
                font-weight: 900;
                color: #FFF;               /* exact turquoise color */
                margin: 0 0 20px 0;
                letter-spacing: 2px;
                text-shadow: 0 4px 10px rgba(0,0,0,0.6);
            ">MAYOR'S PROFILE</h1>

                    <div style="
                width: 100px;
                height: 4px;
                background: #00B518;
                margin: 0 auto 30px auto;
            "></div>

                    <p style="
                font-size: 2.8rem;
                font-weight: 600;
                margin: 0 0 8px 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">
                    <p class=" p-0 m-0 poppins-semibold-italic" style="   font-size: 2rem;">my <span
                            class=" poppins-bold-italic h1 green"
                            style="   font-size: 2.8rem; color:#00B518;">S</span>ervice.
                        your <span class=" poppins-bold-italic h1 green"
                            style="   font-size: 2.8rem; color:#00B518;">H</span>elp.
                        our
                        <span class=" poppins-bold-italic h1 green"
                            style="   font-size: 2.8rem; color:#00B518;">F</span>uture.
                    </p>
                    </p>

                    <p style="
                font-size: 1.6rem;
                font-weight: 500;
                margin: 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            "></p>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-0 pb-5 m-0 px-3 d-flex flex-column align-items-center">
            <?php require(get_template_directory() . '/index-parts/profile.php'); ?>

            <?php

				while (have_posts()) : the_post();

					get_template_part('template-parts/content', 'page');

				endwhile; //end of the loop 
				?>
            <div class="mt-3" style="width: 80%; height:2px; background-color: #00B518; border-radius: 40px;"></div>
        </div>

        <?php elseif ($val !== "contact") :

			if ($val == "MUNICIPAL OFFICIAL AND DEPARTMENT HEAD" || $val == "LEGISLATIVE") { ?>
        <style>
        .bgko {
            background: url(<?= get_template_directory_uri() . '/images/officer.jpg'?>);
            background-size: cover;
        }
        </style>

        <style>
        @media (max-width: 768px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 3rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p {
                font-size: 1.4rem !important;
            }
        }

        @media (max-width: 480px) {
            .container-fluid p-0 div[style*="height: 65vh"] h1 {
                font-size: 2.5rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:first-of-type {
                font-size: 1.25rem !important;
            }

            .container-fluid p-0 div[style*="height: 65vh"] p:last-of-type {
                font-size: 1.15rem !important;
            }
        }
        </style>

        <div class="container-fluid p-0 pb-4">
            <div style="
        width: 100%;
        height: 65vh;                  /* responsive height */
        min-height: 420px;
        background: url(<?= get_template_directory_uri() ?>/images/tourism/transparency.jpg) center center / cover no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    ">
                <!-- Dark overlay -->
                <div style="position: absolute; inset: 0; background: rgba(15,15,16,0.4);"></div>

                <!-- Text content -->
                <div style="position: relative; z-index: 2; padding: 20px;">
                    <h1 style="
                font-size: 4.5rem;
                font-weight: 900;
                color: #FFF;               /* exact turquoise color */
                margin: 0 0 20px 0;
                letter-spacing: 2px;
                text-shadow: 0 4px 10px rgba(0,0,0,0.6);
            "><?= $val ?> OFFICIALS</h1>

                    <div style="
                width: 100px;
                height: 4px;
                background: #00B518;
                margin: 0 auto 30px auto;
            "></div>

                    <p style="
                font-size: 1.8rem;
                font-weight: 600;
                margin: 0 0 8px 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">
                    </p>

                    <p style="
                font-size: 1.2rem;
                font-weight: 500;
                margin: 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">View All Officials: Municipal of Labo</p>
                </div>
            </div>
        </div>

        <div id="content" class="container-fluid px-5 bgko" role="main">

            <?php } else {
				?>
            <div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">


                <?php
				}
				while (have_posts()) : the_post();

					get_template_part('template-parts/content', 'page');

				endwhile; //end of the loop 
					?>
            </div><!-- end content -->
            <?php else : ?>

            <style>
            @media (max-width: 768px) {
                .container-fluid p-0 div[style*="height: 65vh"] h1 {
                    font-size: 3rem !important;
                }

                .container-fluid p-0 div[style*="height: 65vh"] p {
                    font-size: 1.4rem !important;
                }
            }

            @media (max-width: 480px) {
                .container-fluid p-0 div[style*="height: 65vh"] h1 {
                    font-size: 2.5rem !important;
                }

                .container-fluid p-0 div[style*="height: 65vh"] p:first-of-type {
                    font-size: 1.25rem !important;
                }

                .container-fluid p-0 div[style*="height: 65vh"] p:last-of-type {
                    font-size: 1.15rem !important;
                }
            }
            </style>

            <div class="container-fluid p-0">
                <div style="
        width: 100%;
        height: 65vh;                  /* responsive height */
        min-height: 420px;
        background: url(<?= get_template_directory_uri() ?>/images/tourism/contact.png) center center / cover no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    ">
                    <!-- Dark overlay -->
                    <div style="position: absolute; inset: 0; background: rgba(15,15,16,0.4);"></div>

                    <!-- Text content -->
                    <div style="position: relative; z-index: 2; padding: 20px;">
                        <h1 style="
                font-size: 4.5rem;
                font-weight: 900;
                color: #FFF;               /* exact turquoise color */
                margin: 0 0 20px 0;
                letter-spacing: 2px;
                text-shadow: 0 4px 10px rgba(0,0,0,0.6);
            ">CONTACT US</h1>

                        <div style="
                width: 100px;
                height: 4px;
                background: #00B518;
                margin: 0 auto 30px auto;
            "></div>

                        <p style="
                font-size: 1.8rem;
                font-weight: 600;
                margin: 0 0 8px 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">Do You Have Any Questions Or Concerns?</p>

                        <p style="
                font-size: 1.6rem;
                font-weight: 500;
                margin: 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">Please Let Us Know</p>
                    </div>
                </div>
            </div>

            <div id="content" class="container-fluid px-3 d-flex flex-column flex-md-row" role="main">
                <div class="container ">
                    <div class="container">
                        <div class="contact-form-header">
                            <h1>CONTACT FORM</h1>
                            <div class="divider">
                                <span class="divider-icon">i</span>
                            </div>
                        </div>
                    </div>
                    <div id="one">
                        <?php
								while (have_posts()) : the_post();

									get_template_part('template-parts/content', 'page');

								endwhile; //end of the loop 
								?>
                    </div>
                </div>
                <div class="container">
                    <div class="container ms-0 ms-md-5 px-0 px-md-5">
                        <div class="contact-form-header ps-0">
                            <h1>SOCIALS</h1>
                            <div class="divider">
                                <span class="divider-icon"><i class="bi bi-globe2"></i></span>
                            </div>
                            <div class="social-buttons-container">
                                <a href="https://facebook.com" target="_blank" class="social-button facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com" target="_blank" class="social-button twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://instagram.com" target="_blank" class="social-button instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://tiktok.com" target="_blank" class="social-button tiktok">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="contact-form-header">
                            <h1>EMERGENCY</h1>
                            <div class="divider">
                                <span class="divider-icon"><i class="bi bi-telephone-fill"></i></span>
                            </div>
                        </div>
                        <?php require(get_template_directory() . '/template-parts/custom/contact.php');
								?>


                    </div>

                </div>
            </div>
            <!-- end 
					
			content -->
            <!-- Beautiful gradient line like in your screenshot -->
            <div class="text-center my-5">
                <div class="mx-auto" style="width: 96%; max-width: 1200px; height: 4px; 
             background: linear-gradient(90deg, transparent, #00B518, transparent);
             border-radius: 50px;"></div>
            </div>
            <section class="contact-section py-5 py-lg-7 overflow-hidden">
                <div class="container-fluid px-4 px-lg-6">
                    <div class="row g-0 shadow-lg rounded-4 overflow-hidden">
                        <!-- Left Side - Contact Info -->
                        <div style="background-color: #008f13;"
                            class="col-lg-6 bg-gradient-success text-white position-relative">
                            <div class="p-5 p-xl-7 h-100 d-flex flex-column justify-content-center">
                                <div class="mb-5">
                                    <h1 class="display-5 fw-bold mb-4 lh-1">Get in Touch</h1>
                                    <p class="lead opacity-90">We're here to help and answer any questions you might
                                        have.</p>
                                </div>

                                <div class="row g-4 mt-2">
                                    <div class="col-12">
                                        <div class="d-flex align-items-start gap-4">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-geo-alt-fill fs-3 opacity-75"></i>
                                            </div>
                                            <div>
                                                <h5 class="fw-semibold mb-2">Address</h5>
                                                <p class="mb-0 opacity-90 lh-sm">
                                                    Labo Municipal Hall Building<br>
                                                    Labo, Camarines Norte<br>
                                                    Philippines
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-start gap-4">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-envelope-fill fs-3 opacity-75"></i>
                                            </div>
                                            <div>
                                                <h5 class="fw-semibold mb-2">Email</h5>
                                                <p class="mb-0 opacity-90">
                                                    <a href="mailto:labomayorsoffice@gmail.com"
                                                        class="text-white text-decoration-none hover-opacity-75">
                                                        labomayorsoffice@gmail.com
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-start gap-4">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-telephone-fill fs-3 opacity-75"></i>
                                            </div>
                                            <div>
                                                <h5 class="fw-semibold mb-2">Telephone</h5>
                                                <p class="mb-0 opacity-90">(054) 585-2044</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Optional decorative element -->
                            <div class="position-absolute bottom-0 start-0 w-100 h-25 bg-white opacity-5"
                                style="clip-path: polygon(0 100%, 100% 0, 100% 100%);"></div>
                        </div>

                        <!-- Right Side - Map -->
                        <div class="col-lg-6 p-0">
                            <div class="h-100">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.693835386474!2d122.82758907419208!3d14.15408878785434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3398a4bf4db45fc7%3A0x8decc65a5ceb6972!2sLabo%20Municipal%20Hall%20Building!5e0!3m2!1sen!2sph!4v1763692652376!5m2!1sen!2sph"
                                    width="100%" height="100%" style="border:0; min-height: 580px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>


            <?php
				$val = get_the_title();
				if ($val == "CONTACT US") {
					$val = "contact";
				} else if ($val == "LABO MUNICIPAL HYMN") {
					$val = "hymn";
				}

				if ($val !== "contact" && $val !== "hymn" && $val != "MUNICIPAL OFFICIAL AND DEPARTMENT HEAD" && $val != "LEGISLATIVE") {
					if (is_active_sidebar('left-sidebar')):
						govph_displayoptions('govph_sidebar_left');
					endif;
				}
				?>
            <?php
				if (is_active_sidebar('right-sidebar')):
					govph_displayoptions('govph_sidebar_right');
				endif;
				?>

        </div><!-- end row -->
    </div><!-- end main -->

    <?php get_footer(); ?>