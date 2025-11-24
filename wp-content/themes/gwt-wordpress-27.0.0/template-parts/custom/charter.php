<style>
    /* Responsive left panel */
    @media (max-width: 992px) {
        .left-panel {
            flex: 0 0 100% !important;
            min-height: 240px !important;
            padding: 40px 20px !important;
        }

        .service-title {
            font-size: 1.35rem !important;
        }

        .logo-wrapper img {
            width: 120px !important;
            height: 120px !important;
        }
    }

    /* Green accent line – vertical on desktop, horizontal on mobile */
    .accent-line {
        position: absolute;
        background: linear-gradient(to bottom, #00B518, #34d399);
        width: 6px;
        height: 100%;
        top: 0;
        right: 0;
    }

    /* On mobile → turn the line horizontal at the bottom */
    @media (max-width: 992px) {
        .accent-line {
            width: 100% !important;
            height: 6px !important;
            top: auto !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
        }
    }

    /* Nice hover effect */
    .service-card {
        transition: all 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
    }
</style>
<div class="service-card shadow-lg border-0 rounded-4 overflow-hidden mb-5 bg-white">
    <div class="d-flex flex-column flex-lg-row">

        <!-- LEFT PANEL – Logo + Title -->
        <div class="left-panel text-center position-relative d-flex flex-column align-items-center justify-content-center"
            style="
                 background: linear-gradient(135deg, #f9fafa 0%, #eef0f2 100%);
                 padding: 50px 30px;
                 flex: 0 0 380px;        /* Desktop */
                 min-height: 280px;
             ">

            <!-- Thin green line on the right (desktop) / bottom (mobile) -->
       
            <?php if (has_post_thumbnail()) : ?>
                <div class="logo-wrapper mb-4">
                    <?php the_post_thumbnail('medium', [
                        'class' => 'img-fluid rounded-circle shadow',
                        'style' => 'width: 140px; height: 140px; object-fit: contain; border: 8px solid #fff;'
                    ]); ?>
                </div>
            <?php endif; ?>

            <h2 class="service-title mb-0 px-3" style="
                color: #03720D;
                font-weight: 800;
                font-size: 1.5rem;
                letter-spacing: 1.2px;
                text-transform: uppercase;
                line-height: 1.3;
            ">
                <?php the_title(); ?>
            </h2>
        </div>

        <!-- RIGHT PANEL – Content -->
        <div class="flex-grow-1 position-relative bg-white">
            <!-- Green top bar -->
      

            <div class="p-4 p-md-5 pt-5">
                <div class="content-area" style="font-size: 1.05rem; line-height: 1.8; color: #2d3748;">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>