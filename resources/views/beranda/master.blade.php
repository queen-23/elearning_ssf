<!DOCTYPE html>
<!-- saved from url=(0020){{ url('/') }}/ -->
@php
    $tentang = file_get_contents(base_path('public/data/kontak.json'));
    $tentang = json_decode($tentang, false);
    $tentang = $tentang->tentang;
@endphp
<html lang="en" dir="ltr"><!-- Begin Head -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!----- Required MetaTags ----->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Smart School Foundation, SSF">
    <meta name="description" content="{{ $tentang }}">
    <!----- Style css ----->
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/animate.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/icofont.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/font.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/frontend-rtl.css">
    <link rel="stylesheet" type="text/css" href="/SSF E-Learning _ Beranda_files/frontend-style.css">

    <!----- Favicon ----->
    <link rel="shortcut icon" type="image/ico" href="{{ url('/') }}/uploads/site_data/ssf_favicon.png">
    <!----- Title ----->
    <title>SSF E-Learning | @yield('tittle')</title>
    {{-- <script>
        var base_url = "{{ url('/') }}/";
        var site_logo = "{{ url('/') }}/assets/images/favicon.png";
        var rzp_key = "rzp_test_QFKjgPljh9GufG";
        var ltr_status_msg = "Status changed successfully.";
        var ltr_matching_msg = "No matching records found.";
        var ltr_select_chapter = "Select Chapter";
        var ltr_select_subject = "Select Subject";
        var ltr_subject = "Subject";
        var ltr_teacher = "Teacher";
        var ltr_select_teacher = "Select Teacher";
        var ltr_start_date = "Start Date";
        var ltr_end_date = "End Date";
        var ltr_start_time = "Start Time";
        var ltr_end_time = "End Time";
        var ltr_cant_msg = "Can&#039;t delete, Add one more subject to delete it.";
        var ltr_are_you_msg = "Are you sure, You want to delete?";
        var ltr_add_course = "Add Course";
        var ltr_edit_course = "Edit course";
        var ltr_add_doubts_date_class = "Schedule Class";
        var ltr_add_new_exam = "Add New Exam";
        var ltr_end_date_msg = "End date should be greater than start date.";
        var ltr_subject_msg = "Add atleast one subject.";
        var ltr_characters_msg = "You can not have more than 50 characters here.";
        var ltr_password_student_msg = "Enrollment Id and Password for student";
        var ltr_enrollment_id = "Enrollment Id";
        var ltr_password = "Password";
        var ltr_add_another_student = "add another student";
        var ltr_select_batch_msg = "Please select class.";
        var ltr_select_batch = "Select Class";
        var ltr_changed_batch_msg = "Class changed successfully.";
        var ltr_changed_password_for_msg = "Change Password for";
        var ltr_confirm_password_msg = "Password and Confirm Password should be same.";
        var ltr_password_msg = "Password changed successfully.";
        var ltr_subject_name_msg = "Please enter subject name.";
        var ltr_letters_characters_msg = "Only letters, dashes and digits are allowed,Special characters are not allowed.";
        var ltr_subject_updated_msg = "subject updated successfully.";
        var ltr_subject_add_msg = "subject added successfully.";
        var ltr_subject_exists_msg = "Subject name already exists.";
        var ltr_are_you_so_msg = "Are you sure";
        var ltr_subject_delete_alert_msg = "It will delete all chapters and questions of this subject?";
        var ltr_atleast_chapter_msg = "Please enter atleast one chapter name.";
        var ltr_add_chapter_msg = "Chapters added successfully.";
        var ltr_exists_chapter_msg = "Chapter name already exists.";
        var ltr_chapter_name_msg = "Please enter chapter name.";
        var ltr_chapter_updated_msg = "Chapter updated successfully.";
        var ltr_chapter_delete_msg = "It will delete all questions of this chapter?";
        var ltr_loading_msg = "loading";
        var ltr_select_subject_msg = "Please select subject";
        var ltr_select_subject_both_msg = "Please select subject and chapter both.";
        var ltr_word_msg = "Please enter word.";
        var ltr_answer_msg = "Please choose right answer.";
        var ltr_start_date_greater_msg = "Start date should be greater than last date.";
        var ltr_add_teacher = "Add Teacher";
        var ltr_edit_teacher = "Edit Teacher";
        var ltr_update_teacher = "Update Teacher";
        var ltr_add_extra_class = "Add Extra Class";
        var ltr_add_class = "Add Class";
        var ltr_edit_extra_class = "Edit extra class";
        var ltr_update_class = "Update Class";
        var ltr_past_time_msg = "Can not accept past time.";
        var ltr_end_greater_msg = "End time should be greater than start time.";
        var ltr_today_greater_msg = "Date should be today or greater than today.";
        var ltr_class_already_added_msg = "Class is already added on same time.";
        var ltr_valid_time_msg = "Please enter valid time.";
        var ltr_select_date_msg = "Please select date.";
        var ltr_atleast_question_msg = "Please select atleast one question.";
        var ltr_select_year_msg = "Please select year.";
        var ltr_select_paper_msg = "Please select paper.";
        var ltr_add_facility = "Add Facility";
        var ltr_edit_facility = "Edit Facility";
        var ltr_add_assignment = "Add Assignment";
        var ltr_edit_assignment = "Edit Assignment";
        var ltr_update_assignment = "Update Assignment";
        var ltr_select_from_date_msg = "Please select from date.";
        var ltr_select_to_date_msg = "Please select to date.";
        var ltr_batch_inactive_msg = "This class has in active please contact to Admin.";
        var ltr_mark_complete = "Mark as complete.";
        var ltr_complete = "Complete";
        var ltr_all_fields_msg = "All fields are required.";
        var ltr_hide_password = "Hide Password";
        var ltr_change_password = "Change Password";
        var ltr_new_password_msg = "Please enter new password.";
        var ltr_all_test_record_msg = "Your all data and Test record will be cleared Do you really want to continue?";
        var ltr_once_deleted_alert_msg = "Once deleted, you will not be able to recover this data!";
        var ltr_are_deleted_alert_msg = "Are you sure to delete?";
        var ltr_updated_msg = "Updated successfully.";
        var ltr_alert_updated_msg = "Are you sure to update?";
        var ltr_category_changed_msg = "Category changed successfully.";
        var ltr_invalid_birth_msg = "Invalid date of birth.";
        var ltr_to_greater_msg = "To date should be greater than from date.";
        var ltr_message = "Message";
        var ltr_add_live_class = "Add Live Class";
        var ltr_edit_live_class = "Edit live class";
        var ltr_atleast_student_msg = "Please select atleast one student.";
        var ltr_atleast_date_msg = "Please select atleast one data.";
        var ltr_maximum40_characters_msg = "Maximum 40 characters are allowed.";
        var ltr_maximum50_characters_msg = "Maximum 50 characters are allowed.";
        var ltr_double_class_date_msg = "Please select a double class date and time.";
        var ltr_ok = "Ok";
        var ltr_cancel = "Cancel";
        var ltr_select_student = "Select Student";
        var ltr_description = "Description";
        var ltr_can_remove_msg = "Can&#039;t remove, Add more item to delete it";
        var ltr_some_required = "Some required fields are missing";
        var ltr_only_letters_msg = "Only letters, dashes and digits are allowed,Special symbols are not allowed.";
        var ltr_search = "Search";
        var ltr_show = "Show";
        var ltr_heading = "Heading";
        var ltr_sub_heading = "Sub Heading";
        var ltr_batch_speci_heading = "Class specification heading";
        var ltr_fecherd = "Features";
        var ltr_email = "Email";
        var ltr_wrong_credentials_msg = "Wrong credentials.";
        var ltr_batch_spe_msg = "Can&#039;t delete, Add one more heading to delete it.";
        var ltr_you_delete = "You want to delete ?";
        var ltr_i_learn = "What will i learn ?";
        var ltr_chapters = "Chapter&#039;s";
        var ltr_offer_price_msg = "Offer price should be greater than class price.";
        var ltr_batch_price_msg = "Please enter class price.";
        var ltr_payment_msg = "Payment is too low.";
        var ltr_something_msg = "Something went wrong, please try again.";
        var ltr_enter_your_name = "Enter Your Name";
        var ltr_enter_your_email = "Enter Your Email";
        var ltr_valid_enter_your_email = "Please enter a valid email.";
        var ltr_enter_your_phone = "Enter Your Mobile Number";
        var ltr_valid_enter_your_phone = "Please enter a valid phone number.";
        var ltr_enter_your_message = "Enter Your Message";
        var ltr_send = "Send";
        var ltr_no_result = "No result found.";
    </script> --}}
</head>

<body class="">
    <!----- Preloader Box ----->
    <div class="edu_preloader" style="display: none;">
        <div class="edu_status">
            <img src="/SSF E-Learning _ Beranda_files/Hourglass.gif" alt="loader">
        </div>
    </div>
    <!----- Preloader Box ----->
    <!----- Main Wraapper ----->
    <section class="main_wrapper">

        @include('beranda.header')
        @yield('content')


    </section>
    <!-- Logout start-->
    <div id="logoutPopup" class="edu_popup_container mfp-hide">
        <div class="edu_popup_wrapper">
            <div class="edu_popup_inner text-center">
                <h4 class="edu_title edu_logt_title padderBottom20">Are you sure, You want to logout?</h4>
                <button type="button"
                    class="edu_btn edu_admin_btn edu_admin_btn_black edu_btn_black logoutBtnCncl mb-2">Cancel</button>
                <button type="button" class="edu_btn edu_admin_btn logOutBtn ml-2 mb-2">Yes</button>
            </div>
        </div>
    </div>
    <!-- Logout end-->
    @include('beranda.footer')
    <!---------- GO To Top ------------>
    <a href="javascript:void(0);" id="scroll"><span class="icofont-swoosh-up"></span></a>
    <!----- Script Start ----->
    <script src="/SSF E-Learning _ Beranda_files/jquery.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/popper.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/bootstrap.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/swiper.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/wow.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/jquery.magnific-popup.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/jquery.appear.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/jquery.countTo.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/toastr.min.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/tilt.js.download"></script>
    <script src="/SSF E-Learning _ Beranda_files/checkout.js.download"></script>
    <div class="razorpay-container"
        style="z-index: 2147483647; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;">
        <style>
            @keyframes rzp-rot {
                to {
                    transform: rotate(360deg);
                }
            }

            @-webkit-keyframes rzp-rot {
                to {
                    -webkit-transform: rotate(360deg);
                }
            }

            .razorpay-container>iframe {
                min-height: 100% !important;
            }
        </style>
        <div class="razorpay-backdrop"
            style="min-height: 100%; transition: all 0.3s ease-out 0s; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;">
            <span
                style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in 0s; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test
                Mode</span>
        </div>
    </div>
    <script src="/SSF E-Learning _ Beranda_files/front-custom.js.download"></script>

</body>

</html>
