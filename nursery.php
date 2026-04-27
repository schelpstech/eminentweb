<?php include 'inc/head.php'; ?>

<body>

    <?php include 'inc/header.php'; ?>

    <!-- bread crumb area -->
    <div class="rts-breadcrumb-area rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <div class="pagination-wrapper">
                            <a href="index.php">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="nursery.php">Our Nursery Classes</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class="title">Nursery Classes</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- course area start -->
    <div class="rts-course-details-area rts-section-gap rts-shape-move">
        <div class="container">
            <div class="row g-5 sticky-column-wrap">
                <div class="col-lg-7">
                    <div class="left-side-content">
                        <div class="video-area">
                            <div class="image">
                                <img src="assets/images/course/27.jpg" alt="">
                                <div class="video-btn-area">
                                    <div class="vedio-icone">
                                        <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=ezbJwaLmOeM">
                                            <span class="play-icon">
                                                <i class="fa-sharp fa-solid fa-play"></i>
                                            </span>
                                        </a>
                                        <div class="video-overlay">
                                            <a class="video-overlay-close">×</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-btn-wrapper full-width pb--20">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Course Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt--50" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="course-content-wrapper">

                                    <h5 class="title mb--10">About Our Nursery Classes</h5>
                                    <p class="disc">
                                        Our Nursery School at Eminent Kids Montessori School provides a warm, safe, and stimulating environment where young children begin their learning journey.
                                        We focus on nurturing each child’s natural curiosity, independence, and confidence through guided play and structured activities.
                                    </p>

                                    <h5 class="title mb--10">Our Classes</h5>
                                    <p class="disc">
                                        The Nursery section is carefully structured into four levels to support gradual development:
                                        <br><br>
                                        <strong>Nido One:</strong> A gentle introduction to school life, focusing on sensory exploration, bonding, and basic routines.
                                        <br>
                                        <strong>Nido Two:</strong> Encourages early communication, movement, and social interaction in a supportive environment.
                                        <br>
                                        <strong>Infant One:</strong> Builds foundational skills in language, numbers, and creativity through engaging activities.
                                        <br>
                                        <strong>Infant Two:</strong> Prepares children for primary education with stronger emphasis on literacy, numeracy, and independent learning.
                                    </p>

                                    <p class="disc">
                                        Our approach combines Montessori principles with modern teaching methods to ensure that every child develops academically, socially, and emotionally at their own pace.
                                    </p>

                                    <div class="module-wrapper">
                                        <h6 class="title mb--10">What Your Child Will Gain</h6>

                                        <div class="inner-content">
                                            <div class="single-wrapper">
                                                <div class="single-codule">
                                                    <i class="fa-regular fa-check"></i>
                                                    <p>Early literacy and numeracy skills</p>
                                                </div>
                                                <div class="single-codule">
                                                    <i class="fa-regular fa-check"></i>
                                                    <p>Confidence and independence</p>
                                                </div>
                                                <div class="single-codule">
                                                    <i class="fa-regular fa-check"></i>
                                                    <p>Social and communication skills</p>
                                                </div>
                                            </div>

                                            <div class="single-wrapper">
                                                <div class="single-codule">
                                                    <i class="fa-regular fa-check"></i>
                                                    <p>Creativity through play and exploration</p>
                                                </div>
                                                <div class="single-codule">
                                                    <i class="fa-regular fa-check"></i>
                                                    <p>Strong moral values and discipline</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- You can keep the review tab OR replace it with something more relevant later -->
                        </div>


                        <div class="course-content-wrapper-main">
                            <h5 class="title">Our Learning Areas</h5>

                            <div class="accordion mt--30 mb--50" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            <span>Language Development</span>
                                            <span>Communication Skills</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <p>Children are introduced to letters, sounds, storytelling, and basic reading skills to build strong communication abilities.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            <span>Numeracy Skills</span>
                                            <span>Early Mathematics</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>We introduce counting, number recognition, shapes, and patterns through fun and interactive activities.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <span>Creative Activities</span>
                                            <span>Art & Expression</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>Children express themselves through drawing, painting, music, and imaginative play.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <span>Social Development</span>
                                            <span>Interaction & Confidence</span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>We encourage teamwork, sharing, and positive relationships to build confidence and social skills.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="single-instructor-area-details">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/course/28.jpg" width="205" alt="Nursery Teacher">
                            </a>
                            <div class="inner-instrustor-area">
                                <h5 class="title">Our Nursery Educators</h5>
                                <span class="deg">Experienced & Caring Professionals</span>

                                <div class="stars-area-wrapper">
                                    <div class="stars-area">
                                        <span>Trusted</span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="users-area">
                                        <i class="fa-light fa-users"></i>
                                        <span>Small Class Sizes</span>
                                    </div>

                                    <div class="users-area">
                                        <i class="fa-light fa-video"></i>
                                        <span>Interactive Learning</span>
                                    </div>
                                </div>

                                <p class="disc">
                                    Our Nursery teachers are highly trained, patient, and passionate about early childhood education.
                                    They provide a nurturing and supportive environment where every child feels safe, valued, and encouraged to explore, learn, and grow with confidence.
                                </p>

                                <div class="follow-us">
                                    <span>Connect With Us</span>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="rating-main-wrapper">

                            <div class="rating-top-main-wrapper">

                                <div class="rating-area-main-wrapper">
                                    <h2 class="title">5</h2>
                                    <div class="stars-wrapper">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>Ratings</span>
                                </div>

                                <div class="progress-wrapper-main">
                                    <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="progress-top">
                                            <i class="fa-regular fa-star"></i>
                                            <span class="parcent">
                                                5
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>Literacy</span>
                                        </div>
                                    </div>
                                    <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="progress-top">
                                            <i class="fa-regular fa-star"></i>
                                            <span class="parcent">
                                                5
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>Numeracy</span>
                                        </div>
                                    </div>
                                    <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="progress-top">
                                            <i class="fa-regular fa-star"></i>
                                            <span class="parcent">
                                                5
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>Creativity</span>
                                        </div>
                                    </div>
                                    <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="progress-top">
                                            <i class="fa-regular fa-star"></i>
                                            <span class="parcent">
                                                5
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>Leadership</span>
                                        </div>
                                    </div>
                                    <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="progress-top">
                                            <i class="fa-regular fa-star"></i>
                                            <span class="parcent">
                                                5
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="end">
                                            <span>Etiquette</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Testimonials -->
                            <div class="indevidual-rating-area">
                                <div class="author-area">
                                    <img src="assets/images/course/28.jpg" width="60" alt="Parent">
                                    <div class="information">
                                        <span>Parent Testimony</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ml--30">Recently</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="disc">
                                    “My child has grown in confidence and independence since joining the Nursery section.
                                    The teachers are caring and attentive, and the learning environment is excellent.”
                                </p>
                            </div>


                            <div class="indevidual-rating-area">
                                <div class="author-area">
                                    <img src="assets/images/course/29.jpg" width="60" alt="Parent">
                                    <div class="information">
                                        <span>Parent Testimony</span>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ml--30">Recently</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="disc">
                                    “The school has created a wonderful foundation for my child’s learning journey.
                                    I highly recommend the Nursery programme to every parent.”
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-cl-2 order-lg-2 order-md-1 order-sm-1 order-1 rts-sticky-column-item">

                    <div class="right-course-details">
                        <div class="course-side-bar">

                            <div class="price-area">
                                <h3 class="title">Admissions Open</h3>
                                <span class="discount">2026 Session</span>
                            </div>

                            <a href="#" class="rts-btn btn-primary">Enroll Your Child</a>

                            <div class="what-includes">
                                <span class="m">Limited Spaces Available</span>
                                <h5 class="title">Nursery Programme Highlights:</h5>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Classes</span>
                                    </div>
                                    <div class="right">
                                        <span>Nido 1 – Infant 2</span>
                                    </div>
                                </div>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Age Range</span>
                                    </div>
                                    <div class="right">
                                        <span>1.5 – 5 Years</span>
                                    </div>
                                </div>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Approach</span>
                                    </div>
                                    <div class="right">
                                        <span>Montessori-Based Learning</span>
                                    </div>
                                </div>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Class Size</span>
                                    </div>
                                    <div class="right">
                                        <span>Small & Personalized</span>
                                    </div>
                                </div>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Learning Focus</span>
                                    </div>
                                    <div class="right">
                                        <span>Academic & Social Development</span>
                                    </div>
                                </div>

                                <div class="single-include">
                                    <div class="left">
                                        <span>Term</span>
                                    </div>
                                    <div class="right">
                                        <span>3 Terms Per Session</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="right-course-details mt--30">
                        <div class="course-side-bar">

                            <!-- School Information -->
                            <div class="course-single-information">
                                <h5 class="title">Why Choose Our Nursery?</h5>
                                <div class="body">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Safe and child-friendly environment
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Experienced and caring teachers
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Strong academic foundation
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Emphasis on discipline and values
                                    </div>
                                </div>
                            </div>

                            <!-- Daily Activities -->
                            <div class="course-single-information">
                                <h5 class="title">Daily Activities</h5>
                                <div class="body">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Phonics and early reading
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Numeracy and counting skills
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Creative play and art
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Music, rhymes, and storytelling
                                    </div>
                                </div>
                            </div>

                            <!-- Requirements -->
                            <div class="course-single-information">
                                <h5 class="title">Admission Requirements</h5>
                                <div class="body">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Completed application form
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Birth certificate
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Passport photograph
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="course-single-information">
                                <h5 class="title">Programme Focus</h5>
                                <div class="body">
                                    <div class="tags-wrapper">
                                        <span>Nursery</span>
                                        <span>Montessori</span>
                                        <span>Early Learning</span>
                                        <span>Child Development</span>
                                        <span>Foundation Stage</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Social -->
                            <div class="course-single-information">
                                <h5 class="title">Connect With Us</h5>
                                <div class="body">
                                    <div class="social-share-course-side-bar">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Audience -->
                            <div class="course-single-information last">
                                <h5 class="title">Who This Is For</h5>
                                <div class="body">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Children aged 1.5 – 5 years
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Parents seeking quality early education
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->


    <?php include 'inc/footer.php'; ?>