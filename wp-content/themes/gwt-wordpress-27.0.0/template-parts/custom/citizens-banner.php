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
        background: url(<?= get_template_directory_uri() ?>/images/tourism/header_bg.jpg) center center / cover no-repeat;
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
            ">CITIZENS CHARTER</h1>

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
            ">All Government Forms in One Place</p>

            <p style="
                font-size: 1.6rem;
                font-weight: 500;
                margin: 0;
                text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            ">View & Download Instantly</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-0 pb-5 m-0 px-3 d-flex flex-column align-items-center">

    <div class="container-fluid d-flex flex-column flex-md-row pb-5">
        <article style="text-align:justify;" class="pe-4 poppins-regular fs-4">
            &emsp;&emsp;The <strong>Labo Citizen's Charter</strong> serves as your essential guide to accessing the local government's programs, services, and commitment to transparency. This document clearly outlines the standard procedures, required documents, processing times, and fees for every service offered by the Municipality of Labo. We aim to ensure every constituent receives efficient, effective, and ethical public service, guaranteeing your right to know and expect the best from your local officials.
        </article>
    </div>
    <div class="mt-3" style="width: 80%; height:2px; background-color: #00B518; border-radius: 40px;"></div>
</div>