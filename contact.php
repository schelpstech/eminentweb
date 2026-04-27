<?php include 'inc/head.php'; ?>

<body>

    <?php include 'inc/header.php'; ?>

    <!-- bread crumb area -->
    <!-- bread crumb area -->
    <div class="rts-breadcrumb-area rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <div class="pagination-wrapper">
                            <a href="index.php">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="contact.php">Contact Us</a>
                        </div>

                        <h2 class="title">Contact Us</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- course area start -->
    <section class="rts-contact-area rts-section-gap inner">
        <div class="container">

            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center">
                    <img src="assets/images/banner/title-img.svg" alt="">
                    Get In Touch
                </p>
                <h2 class="section-title">We Are Always Happy to Hear From You</h2>
            </div>
            <!-- Google Map Start -->
            <div class="rts-map-area rts-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="section-title-area text-center mb--30">
                                <p class="pre-title justify-content-center">
                                    <img src="assets/images/banner/title-img.svg" alt="">
                                    Our Location
                                </p>
                            </div>

                            <div class="map-wrapper" style="border-radius:10px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1);">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.367762217507!2d3.4249412!3d6.8193822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdabaaa211dc23c4!2sEminent+Kids+Montessori+School!5e0!3m2!1sen!2sng!4v1564030368753!5m2!1sen!2sng"
                                    width="100%"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Google Map End -->
            <div class="section-inner">
                <div class="row">

                    <div class="col-lg-5">
                        <div class="get-in-touch">
                            <ul class="contact-wrapper-list">

                                <li class="phone bg-two">
                                    <div class="icon">
                                        <img src="assets/images/icon/phone.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Phone</h4>
                                        <p class="desc">
                                            <a href="tel:+2348069025521">+234 8069 025 521</a><br>
                                            <a href="tel:+2348098008854">+234 8098 008 854</a>
                                        </p>
                                    </div>
                                </li>

                                <li class="phone bg-four">
                                    <div class="icon">
                                        <img src="assets/images/icon/mail.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Email Address</h4>
                                        <p class="desc">
                                            <a href="mailto:info@eminentkidsschool.com">info@eminentkidsschool.com</a>
                                        </p>
                                    </div>
                                </li>

                                <li class="phone bg-one">
                                    <div class="icon">
                                        <img src="assets/images/icon/phone.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>School Address</h4>
                                        <p class="desc">
                                            Eminent Kids Montessori School, <br>
                                            1,3 & 6 Ezekiel Salako street,
                                            Off Ifedayo street, Glorious Estate,
                                            Olope Meji, Mowe, Ogun State.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="#" class="contact-form">

                            <h3 class="heading-title">Send Us a Message</h3>

                            <div class="form-inner">

                                <div class="single-input">
                                    <input type="text" name="Name" placeholder="Your Full Name" required>
                                </div>

                                <div class="single-input">
                                    <input type="email" name="Email" placeholder="Email Address" required>
                                </div>

                                <div class="single-input">
                                    <input type="text" name="Number" placeholder="Phone Number" required>
                                </div>

                                <div class="single-input">
                                    <div class="left-filter">
                                        <select class="nice-select" name="subject">
                                            <option>Subject</option>
                                            <option value="admission">Admission Enquiry</option>
                                            <option value="fees">Fees Information</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="support">Support</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="single-input message">
                                    <textarea name="Message" placeholder="Write your message here..." required></textarea>
                                </div>

                                <div class="form-btn">
                                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                                </div>

                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- course area end -->
    <!-- course area end -->
    <?php include 'inc/footer.php'; ?>