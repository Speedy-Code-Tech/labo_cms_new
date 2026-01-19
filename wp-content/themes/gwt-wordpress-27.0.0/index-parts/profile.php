<style>
.profile-section {

    font-family: 'Georgia', serif;
}

.profile-card {
    background: white;
    border-radius: 10px;
}

.profile-card:hover {
    transform: translateY(-10px);
}

.profile-img {
    border-radius: 15px;
    object-fit: cover;
    width: 100%;
    height: 100%;

}

.profile-text {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #2c3e50;
}

.profile-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a5d8a;
    margin-bottom: 1rem;
}

.highlight-name {
    color: #01B31A;
    font-weight: 800;
}

@media (max-width: 768px) {
    .profile-title {
        font-size: 1.8rem;
    }

    .profile-text {
        font-size: 1rem;
    }
}
</style>

<section class="profile-section">
    <div class="container-fluid p-0 m-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="profile-card p-4 p-md-5">
                    <div class="row align-items-center g-5">
                        <!-- Text Column -->
                        <div class="col-md-7">
                            <h2 class="profile-title text-center text-md-start poppins-bold">
                                Hon. Severino H. Francisco Jr.
                            </h2>
                            <div class="profile-text">
                                <p class="poppins-regular" style="text-align: justify;">
                                    With an unwavering commitment to serve the people of Labo, Camarines Norte,
                                    <strong class=" highlight-name">Hon. Severino H. Francisco Jr.</strong> has
                                    dedicated
                                    himself
                                    to uplifting the municipality through dynamic leadership and people-centered
                                    programs.
                                </p>
                                <p class="poppins-regular" style="text-align: justify;">
                                    A seasoned public servant, he has honed his knowledge and skills to spearhead
                                    transformative
                                    initiatives in governance, agriculture, education, and community development —
                                    earning him
                                    numerous recognitions, including the recent Certificate of Commendation and Plaque
                                    of Appreciation
                                    from the League of Municipalities and various government agencies.
                                </p>
                                <p class="poppins-regular" style="text-align: justify;">
                                    Guided by integrity, inclusivity, and innovation, Mayor Francisco continues to lead
                                    Labo
                                    toward sustainable progress, ensuring that every barangay benefits from responsive
                                    governance
                                    and meaningful development.
                                </p>
                                <p class="fw-bold darkGreen poppins-regular">
                                    Together, let us build a brighter, stronger, and more prosperous Labo!
                                </p>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="col-md-5 text-center">
                            <img src="<?= get_template_directory_uri() . '/images/m2.jpg' ?>"
                                alt="Hon. Severino H. Francisco Jr., Municipal Mayor of Labo"
                                class="img-fluid profile-img">
                            <div class="mt-3">
                                <small class="text-muted poppins-regular">
                                    Hon. Severino H. Francisco Jr.<br>
                                    <strong>Municipal Mayor</strong> • Labo, Camarines Norte
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>