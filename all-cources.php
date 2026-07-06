<?php
ob_start();
include('include/data.php');
?>


<!-- Body main wrapper start -->
<main>

    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative section-space">
        <div class="rs-breadcrumb-bg-thumb include-bg" data-background="assets/images/bg/breadcrumb.jpg">
        </div>
        <div class="container g-0">
            <div class="row">
                <div class="col-xl-6 col-lg-10">
                    <div class="rs-breadcrumb-wrapper">
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li class="rs-breadcumb-item">
                                        <a href="/">
                                            Home
                                        </a>
                                        <span class="rs-breadcrumb-icon">
                                            <svg class="e-font-icon-svg e-fas-angle-double-right" viewBox="0 0 448 512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z">
                                                </path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rs-breadcumb-item">
                                        All Courses
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title">All Courses</h1>
                            <span class="rs-breadcrumb-line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- faculty area start -->
    <section class="rs-faculty-area rs-faculty-one section-space about-course">
        <div class="container-fluid">
            <div class="">
                <div class="rs-faculty-shape-one gsap-move up-100">
                    <img src="assets/images/shape/half-wave-shape.webp" alt="image">
                </div>
                <div class="rs-faculty-shape-two">
                    <img src="assets/images/shape/graduation-doc-shape.webp" alt="image">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="rs-faculty-wrapper">
                                <div class="rs-faculty-content-wrapper">
                                    <div class="rs-faculty-tab-wrapper">
                                        <div class="rs-faculty-sec-wrapper">
                                            <div class="rs-faculty-section">
                                                <span class="section-subtitle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M5.21484 12.8949V16.6564C5.21484 16.6564 8.82175 15.1537 12.0198 15.1537C15.2178 15.1537 18.8255 16.6564 18.8255 16.6564V12.8424C18.8255 12.8424 15.3844 11.0225 11.9665 11.0225C8.55018 11.021 5.21484 12.8949 5.21484 12.8949Z">
                                                        </path>
                                                        <path
                                                            d="M22.6467 11.9993L24 11.2716L22.6467 10.5222V10.1666C22.6467 10.1666 23.0278 8.23413 20.862 9.24464C20.7517 9.30465 20.6924 9.36542 20.6684 9.42468L11.7367 4.47119L0 11.1884L4.43211 13.2019V12.5485C4.43211 12.5485 8.15079 10.4607 11.9625 10.4607C15.7734 10.4607 19.6092 12.4899 19.6092 12.4899V13.631L22.0563 12.3167V17.6377H21.2416V19.529L22.3248 18.7803L23.5274 19.529V17.637H22.6467V11.9993ZM22.0555 9.83803V10.1944L21.3413 9.79827C21.6017 9.62573 22.0555 9.38642 22.0555 9.83803ZM21.814 11.9251C21.737 11.9279 21.6603 11.9152 21.5883 11.8877C21.5164 11.8602 21.4507 11.8185 21.3952 11.7651C21.3398 11.7117 21.2956 11.6476 21.2655 11.5768C21.2353 11.5059 21.2198 11.4297 21.2197 11.3527C21.2197 11.2757 21.2351 11.1994 21.2652 11.1285C21.2953 11.0576 21.3393 10.9935 21.3947 10.94C21.4501 10.8865 21.5157 10.8447 21.5876 10.8172C21.6595 10.7896 21.7362 10.7768 21.8132 10.7795C21.9615 10.7848 22.102 10.8474 22.2051 10.9542C22.3082 11.0609 22.3659 11.2035 22.366 11.3519C22.3661 11.5003 22.3086 11.643 22.2056 11.7499C22.1027 11.8568 21.9623 11.9196 21.814 11.9251Z">
                                                        </path>
                                                    </svg>
                                                    Courses We Offer
                                                </span>
                                                <h2 class="section-title rs-split-text-enable split-in-left">
                                                    Our Courses</h2>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <?php foreach ($categories as $key => $cat): ?>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link <?= $key == 0 ? 'active' : '' ?>"
                                                        data-bs-toggle="pill" data-bs-target="#<?= $cat['id'] ?>"
                                                        type="button">
                                                        <span class="rs-faculty-tab-icon">
                                                            <?php if ($cat['icon'] == 'medical'): ?>
                                                                <!-- Medical SVG -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                                    viewBox="0 0 24 24" fill="currentColor">
                                                                    <path
                                                                        d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-6 12h-2v-3H8v-2h3V7h2v3h3v2h-3v3z" />
                                                                </svg>
                                                            <?php elseif ($cat['icon'] == 'degree'): ?>
                                                                <!-- Graduation SVG -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                                    viewBox="0 0 24 24" fill="currentColor">
                                                                    <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                                                                    <path d="M5 12v5c0 2.8 3.1 5 7 5s7-2.2 7-5v-5l-7 4-7-4z" />
                                                                </svg>
                                                            <?php else: ?>
                                                                <!-- Management SVG -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                                    viewBox="0 0 24 24" fill="currentColor">
                                                                    <path d="M10 4h4v2h5v14H5V6h5V4zm2 2V5h0v1h0z" />
                                                                    <path d="M8 11h8v2H8zm0 4h8v2H8z" />
                                                                </svg>
                                                            <?php endif; ?>
                                                        </span>
                                                        <?= $cat['title'] ?>
                                                    </button>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="rs-faculty-content">
                                        <div class="rs-faculty-tab-content-wrapper">
                                            <div class="tab-content rs-faculty-tab-anim" id="pills-tabContent">
                                                <?php foreach ($categories as $tabIndex => $category): ?>
                                                    <div class="tab-pane fade <?= $tabIndex == 0 ? 'show active' : '' ?>"
                                                        id="<?= $category['id'] ?>" role="tabpanel">
                                                        <div class="rs-faculty-item-wrapper">
                                                            <?php foreach ($category['courses'] as $course): ?>
                                                                <div class="rs-faculty-item">
                                                                    <div class="rs-faculty-thumb">
                                                                        <img src="<?= $course['image'] ?>"
                                                                            alt="<?= htmlspecialchars($course['title']) ?>">
                                                                        <div class="rs-faculty-info">
                                                                            <h5 class="rs-faculty-title">
                                                                                <a href="<?= $course['link'] ?>">
                                                                                    <?= $course['title'] ?>
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rs-faculty-accordion">
                                    <div class="rs-faculty-sec-wrapper">
                                        <div class="rs-faculty-section ">
                                            <span class="section-subtitle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M5.21484 12.8949V16.6564C5.21484 16.6564 8.82175 15.1537 12.0198 15.1537C15.2178 15.1537 18.8255 16.6564 18.8255 16.6564V12.8424C18.8255 12.8424 15.3844 11.0225 11.9665 11.0225C8.55018 11.021 5.21484 12.8949 5.21484 12.8949Z">
                                                    </path>
                                                    <path
                                                        d="M22.6467 11.9993L24 11.2716L22.6467 10.5222V10.1666C22.6467 10.1666 23.0278 8.23413 20.862 9.24464C20.7517 9.30465 20.6924 9.36542 20.6684 9.42468L11.7367 4.47119L0 11.1884L4.43211 13.2019V12.5485C4.43211 12.5485 8.15079 10.4607 11.9625 10.4607C15.7734 10.4607 19.6092 12.4899 19.6092 12.4899V13.631L22.0563 12.3167V17.6377H21.2416V19.529L22.3248 18.7803L23.5274 19.529V17.637H22.6467V11.9993ZM22.0555 9.83803V10.1944L21.3413 9.79827C21.6017 9.62573 22.0555 9.38642 22.0555 9.83803ZM21.814 11.9251C21.737 11.9279 21.6603 11.9152 21.5883 11.8877C21.5164 11.8602 21.4507 11.8185 21.3952 11.7651C21.3398 11.7117 21.2956 11.6476 21.2655 11.5768C21.2353 11.5059 21.2198 11.4297 21.2197 11.3527C21.2197 11.2757 21.2351 11.1994 21.2652 11.1285C21.2953 11.0576 21.3393 10.9935 21.3947 10.94C21.4501 10.8865 21.5157 10.8447 21.5876 10.8172C21.6595 10.7896 21.7362 10.7768 21.8132 10.7795C21.9615 10.7848 22.102 10.8474 22.2051 10.9542C22.3082 11.0609 22.3659 11.2035 22.366 11.3519C22.3661 11.5003 22.3086 11.643 22.2056 11.7499C22.1027 11.8568 21.9623 11.9196 21.814 11.9251Z">
                                                    </path>
                                                </svg>
                                                Courses We Offer
                                            </span>
                                            <h2 class="section-title rs-split-text-enable split-in-left">
                                                Explore Our Courses</h2>
                                        </div>
                                    </div>
                                    <div class="rs-faculty-sidebar">
                                        <div class="rs-admission-cta">
                                            <div class="rs-admission-cta-shape">
                                                <img src="assets/images/logo/logo.png" alt="image">
                                            </div>
                                            <div class="rs-admission-cta-content">
                                                <div class="rs-admission-cta-thumb">
                                                    <img src="assets/images/user/client-group.webp" alt="image">
                                                </div>
                                                <p class="rs-admission-cta-desc">100 + Admission</p>
                                                <div class="rs-admission-cta-btn">
                                                    <a class="rs-btn has-icon has-theme-yellow hover-white"
                                                        href="all-cources.php">
                                                        <span class="btn-text-wrap">
                                                            <span class="text-default">All Cources</span>
                                                            <span class="text-hover">All Cources</span>
                                                        </span>
                                                        <span class="icon-box has-rotate">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15">
                                                                <path
                                                                    d="M10.5 7.5C10.5 8.32843 9.82843 9 9 9C8.17157 9 7.5 8.32843 7.5 7.5C7.5 6.67157 8.17157 6 9 6C9.82843 6 10.5 6.67157 10.5 7.5Z">
                                                                </path>
                                                                <path
                                                                    d="M10.5 13.5C10.5 14.3284 9.82843 15 9 15C8.17157 15 7.5 14.3284 7.5 13.5C7.5 12.6716 8.17157 12 9 12C9.82843 12 10.5 12.6716 10.5 13.5Z">
                                                                </path>
                                                                <path
                                                                    d="M3 7.5C3 8.32843 2.32843 9 1.5 9C0.671573 9 0 8.32843 0 7.5C0 6.67157 0.671573 6 1.5 6C2.32843 6 3 6.67157 3 7.5Z">
                                                                </path>
                                                                <path
                                                                    d="M18 7.5C18 8.32843 17.3284 9 16.5 9C15.6716 9 15 8.32843 15 7.5C15 6.67157 15.6716 6 16.5 6C17.3284 6 18 6.67157 18 7.5Z">
                                                                </path>
                                                                <path
                                                                    d="M10.5 1.5C10.5 2.32843 9.82843 3 9 3C8.17157 3 7.5 2.32843 7.5 1.5C7.5 0.671573 8.17157 0 9 0C9.82843 0 10.5 0.671573 10.5 1.5Z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-one">
                                        <div class="accordion-wrapper">
                                            <div class="accordion" id="accordionExampleTwo">
                                                <?php foreach ($categories as $index => $category): ?>
                                                    <div class="rs-accordion-item">
                                                        <h6 class="accordion-header" id="heading<?= $index; ?>">
                                                            <button
                                                                class="accordion-button <?= $index != 0 ? 'collapsed' : '' ?>"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse<?= $index; ?>"
                                                                aria-expanded="<?= $index == 0 ? 'true' : 'false'; ?>">
                                                                <span class="rs-faculty-tab-icon">
                                                                    <?php if ($category['icon'] == 'medical'): ?>
                                                                        <!-- Medical SVG -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                            height="28" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path
                                                                                d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-6 12h-2v-3H8v-2h3V7h2v3h3v2h-3v3z" />
                                                                        </svg>
                                                                    <?php elseif ($category['icon'] == 'degree'): ?>
                                                                        <!-- Degree SVG -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                            height="28" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path d="M12 3L1 9l11 6 11-6-11-6z" />
                                                                            <path
                                                                                d="M5 13v4c0 2.5 3.1 4.5 7 4.5s7-2 7-4.5v-4l-7 4-7-4z" />
                                                                        </svg>
                                                                    <?php else: ?>
                                                                        <!-- Management SVG -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                            height="28" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path d="M10 4h4v2h5v14H5V6h5V4z" />
                                                                            <path d="M8 11h8v2H8zm0 4h8v2H8z" />
                                                                        </svg>
                                                                    <?php endif; ?>
                                                                </span>
                                                                <?= $category['title']; ?>
                                                            </button>
                                                        </h6>
                                                        <div id="collapse<?= $index; ?>"
                                                            class="accordion-collapse collapse <?= $index == 0 ? 'show' : ''; ?>"
                                                            data-bs-parent="#accordionExampleTwo">
                                                            <div class="accordion-body">
                                                                <div class="rs-faculty-item-wrapper">
                                                                    <?php foreach ($category['courses'] as $courseIndex => $course): ?>
                                                                        <div class="rs-faculty-item">
                                                                            <div class="rs-faculty-thumb">
                                                                                <img src="<?= $course['image'] ?>"
                                                                                    alt="<?= htmlspecialchars($course['title']) ?>">
                                                                                <div class="rs-faculty-info">
                                                                                    <h5 class="rs-faculty-title">
                                                                                        <a href="<?= $course['link']; ?>">
                                                                                            <?= $course['title']; ?>
                                                                                        </a>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faculty area end -->


</main>
<!-- Body main wrapper end -->
<?php
$content = ob_get_clean();
require 'layout.php';
?>