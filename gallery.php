<?php include 'inc/head.php'; ?>

<body>

    <?php include 'inc/header.php'; ?>

    <!-- breadcrumb area start -->
    <div class="rts-breadcrumb-area rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <div class="pagination-wrapper">
                            <a href="index.php">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="gallery.php">Gallery</a>
                        </div>
                        <h2 class="title">Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <?php
    $childrensDay = [
        'gallery-childrens-01.jpg',
        'gallery-childrens-02.jpg',
        'gallery-childrens-03.jpg',
        'gallery-childrens-04.jpg',
        'gallery-childrens-05.jpg',
        'gallery-childrens-06.jpg',
        'gallery-childrens-07.jpg',
        'gallery-childrens-08.jpg',
    ];

    $grandparentsDay = [
        'gallery-grandparents-01.jpg',
        'gallery-grandparents-02.jpg',
        'gallery-grandparents-03.jpg',
        'gallery-grandparents-04.jpg',
        'gallery-grandparents-05.jpg',
    ];

    function ekms_gallery_item($file, $alt)
    {
        $src = 'assets/images/eminent/' . $file;
        echo '<div class="ekms-gallery-image">';
        echo '<img src="' . $src . '" alt="' . $alt . '" loading="lazy">';
        echo '<a href="' . $src . '" class="gallery-image"><div class="item-overlay"><span><i class="fa-light fa-plus"></i></span></div></a>';
        echo '<a href="' . $src . '" class="overlink gallery-image"></a>';
        echo '</div>';
    }
    ?>

    <!-- children's day gallery start -->
    <section class="rts-gallery-area rts-section-gap section-bg2">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg" alt="">Gallery</p>
                <h2 class="section-title">2025 Children's Day Celebration</h2>
                <p class="desc ekms-section-note">Celebrating the Eminent Kids in a fun-filled and memorable way.</p>
            </div>
            <div class="section-inner">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <?php ekms_gallery_item($childrensDay[0], "Children's Day celebration at EKMS"); ?>
                    </div>
                    <?php for ($i = 1; $i < count($childrensDay); $i++) : ?>
                        <div class="col-lg-3 col-md-6">
                            <?php ekms_gallery_item($childrensDay[$i], "Children's Day celebration at EKMS"); ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- children's day gallery end -->

    <!-- grandparents day gallery start -->
    <section class="rts-gallery-area rts-section-gap">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg" alt="">Gallery</p>
                <h2 class="section-title">2025 Grandparents' Day Celebration</h2>
                <p class="desc ekms-section-note">Teaching the Eminent Kids about family, care, sacrifice and respect for older people.</p>
            </div>
            <div class="section-inner">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <?php ekms_gallery_item($grandparentsDay[0], "Grandparents' Day celebration at EKMS"); ?>
                    </div>
                    <?php for ($i = 1; $i < count($grandparentsDay); $i++) : ?>
                        <div class="col-lg-3 col-md-6">
                            <?php ekms_gallery_item($grandparentsDay[$i], "Grandparents' Day celebration at EKMS"); ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- grandparents day gallery end -->

    <?php include 'inc/footer.php'; ?>
