<?php 
    if (isset($_POST['all'])) {

        require_once __DIR__ . '/../../../../../../wp-load.php';
        // header("Location: ".get_site_url()."/wp-content/plugins/quiz-maker/admin/partials/quizes/export_file/quiz_maker_coupon_data_example.csv");
        //echo get_site_url()+ "/../quizes/export_file/quiz_maker_coupon_data_example.csv";
        echo get_site_url()."/wp-content/plugins/quiz-maker/admin/partials/quizes/export_file/quiz_maker_coupon_data_example.csv";
        exit();
    }
?>