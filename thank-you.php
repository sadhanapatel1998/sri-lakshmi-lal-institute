<?php
ob_start();
?>


<!-- Body main wrapper start -->
<main>

    <!-- error content area start -->
    <section class="rs-error-area d-flex align-items-center justify-content-center section-space bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-7">
                    <div class="error-wrapper text-center">
                        <h1 class="section-title white-text mt-25 mb-20">
                            Thank You !
                        </h1>

                        <h3 class="mb-20">
                            Your Request Has Been Received
                        </h3>

                        <p>
                            Thank you for contacting us. Our team will review your inquiry and get in touch with you
                            shortly. We appreciate your interest in our courses and programs.
                        </p>

                        <div class="error-btn">
                            <a class="rs-btn has-icon" href="/">
                                Back To Homepage
                                <span class="icon-box">
                                    <svg class="icon-first" width="17" height="12" viewBox="0 0 17 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.3153 5.0991C13.1189 5.0991 11.1171 3.0991 11.1171 0.900901V0H9.31532V0.900901C9.31532 2.4991 10.0162 3.9982 11.1162 5.0991H0V6.9009H11.1162C10.0162 8.0018 9.31532 9.5009 9.31532 11.0991V12H11.1171V11.0991C11.1171 8.9018 13.1189 6.9009 15.3153 6.9009H16.2162V5.0991H15.3153Z"
                                            fill="white" />
                                    </svg>

                                    <svg class="icon-second" width="17" height="12" viewBox="0 0 17 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.3153 5.0991C13.1189 5.0991 11.1171 3.0991 11.1171 0.900901V0H9.31532V0.900901C9.31532 2.4991 10.0162 3.9982 11.1162 5.0991H0V6.9009H11.1162C10.0162 8.0018 9.31532 9.5009 9.31532 11.0991V12H11.1171V11.0991C11.1171 8.9018 13.1189 6.9009 15.3153 6.9009H16.2162V5.0991H15.3153Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error content area end -->

</main>
<!-- Body main wrapper end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>