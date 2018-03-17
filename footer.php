<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Awesome_App
 * @since Awesome App 1.0
 */
?>
</div><!-- #page -->
<footer id="colophon" class="footer" role="contentinfo">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<hr class="" />
				</div>
				<div class="copyright">
					Copyrights <?php echo date("Y"); ?>, <a href="<?php echo home_url(); ?>"><?php echo get_home_url(); ?></a>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
<script type="text/javascript">
	<?php echo ot_get_option('text_scripts'); ?>
</script>
<script>
function scrollToElement(selector, time,id) {



	jQuery('a').removeClass('active');



    jQuery(id).addClass('active');



   jQuery('.home').removeClass('active');	



	time = typeof(time) != 'undefined' ? time : 1000;



	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset :55;



	element = jQuery(selector);



	offset = element.offset();



	offsetTop = offset.top -verticalOffset;



	jQuery('html, body').animate({



		scrollTop: offsetTop



	}, time);



}


</script>
<script>
function funcfeatdisp(id){
var arr= new Array('div-feat','div-feat-one','div-feat-two','div-feat-three');
for(var i=0;i<4;i++){
jQuery("#"+arr[i]).hide();
jQuery("#"+arr[i]+'-a').removeClass( "prod_cnt_div_act" ).addClass( "prod_cnt_div" );
}
jQuery("#"+id).show();
jQuery("#"+id+'-a').removeClass( "prod_cnt_div" ).addClass( "prod_cnt_div_act" );
}
</script>
</body>
</html>