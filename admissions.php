<?php
ob_start();
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$old = isset($_SESSION['old']) ? $_SESSION['old'] : [];
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
                                        Apply Now
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title">Apply Now</h1>
                            <span class="rs-breadcrumb-line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- scholarship area start -->
    <section class="rs-scholarships-area bg-primary section-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="rs-sec-wrapper mb-40">
                        <h2 class="section-title mb-20 has-theme-blue text-center">
                            Apply For Admission
                        </h2>

                        <p class="section-desc text-center">
                            Join Sri Lakshmi Lal Institute and explore quality education, practical training, and
                            career-focused programs designed to help you achieve your professional goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="rs-contact-three">
                        <div class="rs-contact-form-wrapper">
                            <h5 class="form-title rs-split-text-enable split-in-left mb-20">
                                Personal Information
                            </h5>
                            <form action="admission-mail" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Full Name <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="full_name"
                                                    value="<?php echo isset($old['full_name']) ? $old['full_name'] : ''; ?>"
                                                    placeholder="Enter Full Name">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['full_name']) ? $errors['full_name'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Father's Name <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="father_name"
                                                    value="<?php echo isset($old['father_name']) ? $old['father_name'] : ''; ?>"
                                                    placeholder="Enter Father's Name">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['father_name']) ? $errors['father_name'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Email Address</label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="email" name="email"
                                                    value="<?php echo isset($old['email']) ? $old['email'] : ''; ?>"
                                                    placeholder="Enter Email Address">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['email']) ? $errors['email'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Mobile Number <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="phone"
                                                    value="<?php echo isset($old['phone']) ? $old['phone'] : ''; ?>"
                                                    placeholder="Enter Mobile Number">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label for="name">Date of Brith<span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input id="rs-date" name="date" type="date"
                                                    value="<?php echo isset($old['date']) ? $old['date'] : ''; ?>"
                                                    placeholder="Select Date*" autocomplete="off">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['date']) ? $errors['date'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Gender <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <select name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male" <?php echo (isset($old['gender']) && $old['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                                    <option value="Female" <?php echo (isset($old['gender']) && $old['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                                    <option value="Other" <?php echo (isset($old['gender']) && $old['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                                                </select>

                                                <span class="text-danger">
                                                    <?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>City <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="city"
                                                    value="<?php echo isset($old['city']) ? $old['city'] : ''; ?>"
                                                    placeholder="Enter City">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['city']) ? $errors['city'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>State <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="state"
                                                    value="<?php echo isset($old['state']) ? $old['state'] : ''; ?>"
                                                    placeholder="Enter State">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['state']) ? $errors['state'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <h5 class="form-title rs-split-text-enable split-in-left mb-20">
                                    Course Information
                                </h5>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Interested Course <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <select name="course_name" class="course-select">
                                                    <option value="">Select Course</option>
                                            
                                                    <option value="Operation Theatre Technician (O.T. Technician)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Operation Theatre Technician (O.T. Technician)') ? 'selected' : ''; ?>>
                                                        Operation Theatre Technician (O.T. Technician)
                                                    </option>
                                            
                                                    <option value="Medical Laboratory Technician"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Medical Laboratory Technician') ? 'selected' : ''; ?>>
                                                        Medical Laboratory Technician
                                                    </option>
                                            
                                                    <option value="X-Ray Technician"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'X-Ray Technician') ? 'selected' : ''; ?>>
                                                        X-Ray Technician
                                                    </option>
                                            
                                                    <option value="Electrocardiography Technician (E.C.G. Technician)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Electrocardiography Technician (E.C.G. Technician)') ? 'selected' : ''; ?>>
                                                        Electrocardiography Technician (E.C.G. Technician)
                                                    </option>
                                            
                                                    <option value="Physiotherapy"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Physiotherapy') ? 'selected' : ''; ?>>
                                                        Physiotherapy
                                                    </option>
                                            
                                                    <option value="Neuro Physiology"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Neuro Physiology') ? 'selected' : ''; ?>>
                                                        Neuro Physiology
                                                    </option>
                                            
                                                    <option value="Yoga Science"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Yoga Science') ? 'selected' : ''; ?>>
                                                        Yoga Science
                                                    </option>
                                            
                                                    <option value="Acupuncture"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Acupuncture') ? 'selected' : ''; ?>>
                                                        Acupuncture
                                                    </option>
                                            
                                                    <option value="Nursing Assistant"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Nursing Assistant') ? 'selected' : ''; ?>>
                                                        Nursing Assistant
                                                    </option>
                                            
                                                    <option value="Diploma in Health Sanitary Inspector (D.H.S.I.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Diploma in Health Sanitary Inspector (D.H.S.I.)') ? 'selected' : ''; ?>>
                                                        Diploma in Health Sanitary Inspector (D.H.S.I.)
                                                    </option>
                                            
                                                    <option value="Bachelor of Arts (B.A.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Bachelor of Arts (B.A.)') ? 'selected' : ''; ?>>
                                                        Bachelor of Arts (B.A.)
                                                    </option>
                                            
                                                    <option value="Bachelor of Science (B.Sc.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Bachelor of Science (B.Sc.)') ? 'selected' : ''; ?>>
                                                        Bachelor of Science (B.Sc.)
                                                    </option>

                                                    <option value="Bachelor of Commerce (B.Com.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Bachelor of Commerce (B.Com.)') ? 'selected' : ''; ?>>
                                                        Bachelor of Commerce (B.Com.)
                                                    </option>
                                            
                                                    <option value="Master of Arts (M.A.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Master of Arts (M.A.)') ? 'selected' : ''; ?>>
                                                        Master of Arts (M.A.)
                                                    </option>
                                            
                                                    <option value="Master of Science (M.Sc.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Master of Science (M.Sc.)') ? 'selected' : ''; ?>>
                                                        Master of Science (M.Sc.)
                                                    </option>
                                            
                                                    <option value="Master of Commerce (M.Com.)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Master of Commerce (M.Com.)') ? 'selected' : ''; ?>>
                                                        Master of Commerce (M.Com.)
                                                    </option>
                                            
                                                    <option value="B.Ed Special Education"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'B.Ed Special Education') ? 'selected' : ''; ?>>
                                                        B.Ed Special Education
                                                    </option>
                                            
                                                    <option value="Bachelor of Business Administration (BBA)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Bachelor of Business Administration (BBA)') ? 'selected' : ''; ?>>
                                                        Bachelor of Business Administration (BBA)
                                                    </option>
                                            
                                                    <option value="Master of Business Administration (MBA)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Master of Business Administration (MBA)') ? 'selected' : ''; ?>>
                                                        Master of Business Administration (MBA)
                                                    </option>
                                            
                                                    <option value="Bachelor of Social Work (BSW)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Bachelor of Social Work (BSW)') ? 'selected' : ''; ?>>
                                                        Bachelor of Social Work (BSW)
                                                    </option>
                                            
                                                    <option value="Master of Social Work (MSW)"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Master of Social Work (MSW)') ? 'selected' : ''; ?>>
                                                        Master of Social Work (MSW)
                                                    </option>
                                            
                                                    <option value="Event Management"
                                                        <?php echo (isset($old['course_name']) && $old['course_name'] == 'Event Management') ? 'selected' : ''; ?>>
                                                        Event Management
                                                    </option>
                                                </select>
                                            
                                                <span class="text-danger">
                                                    <?php echo isset($errors['course_name']) ? $errors['course_name'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="form-title rs-split-text-enable split-in-left mb-20">
                                    Academic Information
                                </h5>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Highest Qualification <span>*</span></label>
                                            </div>
                                          <div class="rs-contact-input">
                                               <select name="qualification">
                                                   <option value="">Select Qualification</option>
                                           
                                                   <option value="10th Pass"
                                                       <?php echo (isset($old['qualification']) && $old['qualification'] == '10th Pass') ? 'selected' : ''; ?>>
                                                       10th Pass
                                                   </option>
                                           
                                                   <option value="12th Pass"
                                                       <?php echo (isset($old['qualification']) && $old['qualification'] == '12th Pass') ? 'selected' : ''; ?>>
                                                       12th Pass
                                                   </option>
                                           
                                                   <option value="Graduate"
                                                       <?php echo (isset($old['qualification']) && $old['qualification'] == 'Graduate') ? 'selected' : ''; ?>>
                                                       Graduate
                                                   </option>
                                           
                                                   <option value="Post Graduate"
                                                       <?php echo (isset($old['qualification']) && $old['qualification'] == 'Post Graduate') ? 'selected' : ''; ?>>
                                                       Post Graduate
                                                   </option>
                                               </select>
                                           
                                               <span class="text-danger">
                                                   <?php echo isset($errors['qualification']) ? $errors['qualification'] : ''; ?>
                                               </span>
                                           </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Board / University <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="text" name="board"
                                                    value="<?php echo isset($old['board']) ? $old['board'] : ''; ?>"
                                                    placeholder="Board / University">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['board']) ? $errors['board'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Passing Year <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <input type="number" name="passing_year"
                                                    value="<?php echo isset($old['passing_year']) ? $old['passing_year'] : ''; ?>"
                                                    placeholder="Passing Year">

                                                <span class="text-danger">
                                                    <?php echo isset($errors['passing_year']) ? $errors['passing_year'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="rs-contact-input-box">
                                            <div class="rs-contact-input-title">
                                                <label>Address <span>*</span></label>
                                            </div>
                                            <div class="rs-contact-input">
                                                <textarea name="address" rows="4"
                                                    placeholder="Enter Full Address"><?php echo isset($old['address']) ? $old['address'] : ''; ?></textarea>

                                                <span class="text-danger">
                                                    <?php echo isset($errors['address']) ? $errors['address'] : ''; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <div class="form-loader text-success">
                                            <i class="fa fa-spinner fa-spin"></i>
                                            Please wait, submitting your admission enquiry...
                                        </div>
                                    </div>
                                </div>
                                <div class="rs-contact-btn">
                                    <button type="submit" class="rs-btn hover-yellow radius-6 w-100">
                                        Apply For Admission
                                    </button>
                                </div>

                            </form>
                            <?php
                            unset($_SESSION['errors']);
                            unset($_SESSION['old']);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-sticky">
                        <div class="rs-cta-two">
                            <div class="rs-cta-bg-thumb include-bg"
                                data-background="assets/images/about/cta.jpg">
                            </div>
                            <div class="rs-cta-content">
                                <div class="rs-cta-icon">
                                    <img src="assets/images/logo/logo.png" alt="image">
                                </div>
                                <h6 class="rs-cta-title">Do Your Need Help?</h6>
                                <div class="rs-cta-contact">
                                    <a href="tel:+919217900261" class="contact-phone">
                                        +91 9217900261

                                    </a>

                                    <a href="mailto:laxmilalinstitue@gmail.com" class="contact-email">
                                        laxmilalinstitue@gmail.com

                                    </a>
                                </div>
                                <div class="rs-cta-btn">
                                    <a class="rs-btn has-icon has-bg-white hover-yellow" href="contact-us.php">
                                        <span class="btn-text-wrap">
                                            <span class="text-default">Contact Now</span>
                                            <span class="text-hover">Contact Now</span>
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
                </div>
            </div>
        </div>
    </section>
    <!-- scholarship area end -->


</main>
<!-- Body main wrapper end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>