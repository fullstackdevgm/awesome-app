<?php

function aa_features($params, $content = null){
	extract(shortcode_atts(array(
		"title" => '',
		"description" => ''
	), $params)); 
	global $wpdb;
	$sqlFeatures = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE post_type='features' AND post_status='publish'");
	?>
		<?php ob_start(); ?>
		<?php $icon_arr=array('realtime-icon','location-icon','offering-icon','enterprisedata-icon','bigandsmall-icon','machine-icon');?>
		<?php $i=0; foreach($sqlFeatures as $featureObj) : ?>
		<?php if(($i%3) ===0) echo '<div class="row-fluid features_widget">'; ?>
		<div class="span4">
			<div class="row-fluid">
				<div class="span3 icon_con">
					<div class="<?php echo $icon_arr[$i]?>"></div>
				</div>
				<div class="span9">
					<h5><?php echo $featureObj->post_title; ?></h5>
					<p><?php echo do_shortcode(str_replace(array("\r\n\r\n", "\n\n"), "<br />", $featureObj->post_content)); ?></p>
				</div>
			</div><?php // echo str_replace(array("\r\n\r\n", "\n\n"), "<br />", $sqlJobs[$key]->post_content); ?>
		</div>
		<?php $i++; if(($i%3) ===0) echo '</div>'; ?>
		<?php endforeach; ?>
		<?php $result = ob_get_contents();
				ob_end_clean();
		?>
	<?php return force_balance_tags( $result );
}
add_shortcode('features', 'aa_features');