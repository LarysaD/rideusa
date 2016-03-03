<?php
/**
 *  * Template Name: - Custom Carrers Form Thank You
 * 
 * @package transport
 * @package transport
 * @since transport 1.0.0
 */




if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['careersSubmit'] ) && $_POST['careersSubmit'] == 'SUBMIT' ){
    /*echo "<pre>";
    print_r($_FILES);
    exit;
*/

    $emailTo = 'developer.insegment@gmail.com';

    $headers = array();
    $headers[] = 'Content-Type: text/html; charset=UTF-8';  
    $headers[] = 'From: inSegment <no-reply@insegment.com>';

    $headers[] = 'Cc: BackupLeads <backupleads.insegment@gmail.com >';  


    $message = "";
    $message .= "<h3>Hello, New form submission on ".get_bloginfo('name')."</h3>";


    $message .= "<h4>APPLICANT INFORMATION:</h4>";
    $message .= "Full Name: ". $_POST['fullName']."\n";
    $message .= "Date (m/d/y): ".$_POST['dateMonth']."/".$_POST['dateDay']."/".$_POST['dateYear']."\n";
    $message .= "Address: ". $_POST['adress']."\n";
    $message .= "Phone: ". $_POST['phone']."\n";
    $message .= "Email: ". $_POST['emailAdress']."\n";
    $message .= "Date Available (m/d/y): ".$_POST['dateMonthAvailable']."/".$_POST['dateDayAvailable']."/".$_POST['dateYearAvailable']."\n";
    $message .= "Days Available: ". $_POST['daysAvailable']."\n";
    $message .= "Desired Salary: ". $_POST['desiredSalary']."\n";
    $message .= "Position Aplied for: ". $_POST['position']."\n";
    $message .= "Are you a citizen of the United States?: ". $_POST['usCitizen']."\n";
    $message .= "If no, are you authorized to work in the U.S.?: ". $_POST['ifNoCitizen']."\n";
    $message .= "Have you ever worked for this company?: ". $_POST['workedBefore']."\n";
    $message .= "If Yes, When?: ". $_POST['ifYes']."\n";
    $message .= "Have you ever been convicted of a felony?: ". $_POST['convicted']."\n";
    $message .= "If Yes, explain: ". $_POST['ifConvicted']."\n";

    $message .= "<h4>APPLICANT INFORMATION:</h4>";
    $message .= "Company: ". $_POST['company']."\n";
    $message .= "Phone: ". $_POST['phonePrevious']."\n";
    $message .= "Address: ". $_POST['adressPrevious']."\n";
    $message .= "Supervisor: ". $_POST['supervisor']."\n";
    $message .= "Job Title: ". $_POST['jobTitle']."\n";
    $message .= "Starting Salary: ". $_POST['startingSalary']."\n";
    $message .= "Ending Salary: ". $_POST['endingSalary']."\n";
    $message .= "Responsabilities: ". $_POST['responsabilities']."\n";
    $message .= "From: ". $_POST['from']."\n";
    $message .= "To: ". $_POST['to']."\n";
    $message .= "Reason for Leaving: ". $_POST['reasonForLeaving']."\n";
    $message .= "May we contact your previous supervisor for a reference?: ". $_POST['contactPreviousSupervisor']."\n";

    $message .= "<br/><br/>";
    $message .= "Have a nice day,<br/>";
    $subject = "Application Form submission.";


        move_uploaded_file($_FILES["uploadResume"]["tmp_name"],WP_CONTENT_DIR .'/uploads/'.basename($_FILES['uploadResume']['name']));
        move_uploaded_file($_FILES["uploadDrivingRecord"]["tmp_name"],WP_CONTENT_DIR .'/uploads/'.basename($_FILES['uploadDrivingRecord']['name']));

        $attachments = array( WP_CONTENT_DIR ."/uploads/".$_FILES["uploadResume"]["name"], WP_CONTENT_DIR ."/uploads/".$_FILES["uploadDrivingRecord"]["name"]  );
            //wp_mail($to, $subject, $message, $headers, $attachments);
    

    wp_mail($emailTo, $subject, $message, $headers, $attachments);

}



function careersFormScripts() {
    wp_enqueue_style( 'careers-form', get_template_directory_uri ()."/content/careersform.css" );
    wp_enqueue_script( 'jqueryValidatioCareers', 'http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js', array(), '', true );
    wp_enqueue_script( 'jqueryValidatioCustom', get_template_directory_uri ()."/content/careersValidate.js", array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'careersFormScripts' );

get_header();

?>
<div class="common-page page-layout-two comment-drop-box">
    <?php do_action("transport_banner"); ?>
    <!--Section area starts Here -->
    <section id="section"> 
        <!--Section box starts Here -->
        <div class="section  team-wrap air-fright">
            <div class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12  col-xs-12 p age-layout-two-content">
                            <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                    ?>
                                    <div class="heading">
                                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                                        <h2 class="h3"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="air-fright-img-part">
                                        <?php
                                        $sec_image = get_post_thumbnail_id();
                                        if (!empty($sec_image)):
                                            ?>
                                            <img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($sec_image), '848', '357'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                            <?php
                                        endif;
                                        the_content();
                                        ?>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!--Section box ends Here --> 
    </section>
</div>
<?php
get_footer();
