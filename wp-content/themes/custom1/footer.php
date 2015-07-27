<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

	<?php wp_footer(); ?>
	
    <!--FOOTER START-->
    <footer>
        <div class="bottom-footer">
            <div class="container">
                <div class="row" style="color:white;text-align: center;padding:10px 0 0 0;">
                	
               		<p><?=(qtranxf_getLanguage()=='th'?'สาขาวิชาวิทยาการจัดการ มหาวิทยาลัยสุโขทัยธรรมาธิราช 9/9 หมู่ 9 ถ.แจ้งวัฒนะ อ.ปากเกร็ด จ.นนทบุรี 11120':
						'School of Management Science Sukhothai Thammathirat Open University Chaengwattana Rd.Pakkret Nonthaburi 11120 Thailand')?><br />
               		Tel: 02-504-8181-6 Fax: 02-503-3612 Email: psoffice@stou.ac.th<br />
               		Copyright © STOU Sukhothai Thammathirat OpenUniversity. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER END-->
	
	
	<!-- Bootstrap -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	
</body>
</html>