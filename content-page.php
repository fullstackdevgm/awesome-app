<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Awesome_App
 * @since Awesome App 1.0
 */
 $style='';
?>

<?php if(($post->post_name)!="twitter-2"){?>
<div class="container wrapper_content"><div style="width:44%;float:left;"></div><div class="pointer-div"></div></div>
<?php }else  $style="style='margin-top:60px;'";?>
<div class="container wrapper_content" id="<?php echo $post->post_name ?>" <?php echo $style;?>>
	<div class="wrapper row-fluid">
		<div class="entry-content heading_1">
			<?php the_content(); ?>
			<?php if($post->post_name=="features"):?>
				<div id="div-feat-one" style="display:none" class="row-fluid">
				<div class="span12">
					<div class="row-fluid features_widget">		
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="customerview-icon"></div>
								</div>
								<div class="span9">
									<h5>Single Customer view</h5>
									<p>Creates one 360&deg; view of the customer but adapts to specific business unit requirements</p>
								</div>
							</div>		
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="costeffective-icon"></div>
								</div>
								<div class="span9">
									<h5>Cost effective</h5>
									<p>Distributed data architecture and open source tool set delivers rapid deployment in under 90 days</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="realmonitor-icon"></div>
								</div>
								<div class="span9">
									<h5>Real-time Monitoring</h5>
									<p>Process streams of content in the moment</p>
								</div>
							</div>	
						</div>
					</div>
					<div class="row-fluid features_widget">		
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="cloudbased-icon"></div>
								</div>
								<div class="span9">
									<h5>Cloud based</h5>
									<p>Cloud deployment provides secure, cost-effective and flexible scale</p>
								</div>
							</div>		
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="omnichannel-icon"></div>
								</div>
								<div class="span9">
									<h5>Omni-channel</h5>
									<p>Integrated data without the pain of centralized data deployment</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="easeintegration-icon"></div>
								</div>
								<div class="span9">
									<h5>Ease of Integration</h5>
									<p>Cost effectively leverages existing data, analytic, and IT investments with connection.</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
				</div>
				<div id="div-feat-two" style="display:none" class="row-fluid">
				<div class="span12">
					<div class="row-fluid features_widget">	
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="righttime-icon"></div>
								</div>
								<div class="span9">
									<h5>Right-time sensing</h5>
									<p>Sensor technology senses right time to target based on location, critical events, and customer feedback.</p>
								</div>
							</div>		
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="awareness-icon"></div>
								</div>
								<div class="span9">
									<h5>Path to purchase awareness</h5>
									<p>Real-time model optimization for individual customers allows path to purchase to be tracked with up to the moment understanding of next steps</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="realmonitor-icon"></div>
								</div>
								<div class="span9">
									<h5>Real-time Monitoring</h5>
									<p>Sensors monitor in real-time customer decisions and product engagement</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid features_widget">	
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="optimization-icon"></div>
								</div>
								<div class="span9">
									<h5>Ongoing optimization</h5>
									<p>Sensors are optimized for individual customers creating a unique optimized response and increasing the ability to target in personal and highly relevant ways</p>
								</div>
							</div>		
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="triggers-icon"></div>
								</div>
								<div class="span9">
									<h5>Triggers for influence</h5>
									<p>Moments of influence are sensed based on customer events and place in path to purchase identifying new targeting opportunities</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="modelfly-icon"></div>
								</div>
								<div class="span9">
									<h5>Model building on the fly</h5>
									<p>Models of customer decision making are created and optimized on-the-fly, avoiding costly analysis and setup</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div id="div-feat-three" style="display:none" class="row-fluid">
				<div>
					<div class="row-fluid features_widget">
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="attribute-icon"></div>
								</div>
								<div class="span9">
									<h5>Attribute analysis</h5>
									<p>Cross-data source attribute identification and analysis can identify key customer attributes across the life cycle</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="customanalysis-icon"></div>
								</div>
								<div class="span9">
									<h5>Custom analytics</h5>
									<p>Custom analytics using unique data can be easily created and changed based on strategy and insight</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="templateanalytics-icon"></div>
								</div>
								<div class="span9">
									<h5>Templated analytics</h5>
									<p>Out of the box analytic templates provide rapid insights into customers, segments and products</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid features_widget">
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="execution-icon"></div>
								</div>
								<div class="span9">
									<h5>Execution integration</h5>
									<p>Integration with analytics and marketing execution systems creates highly integrated engagement</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="analyticintegration-icon"></div>
								</div>
								<div class="span9">
									<h5>Analytic integration</h5>
									<p>Existing segmentation and analytic insights can be easily integrated for improved sensing and activation of existing insights</p>
								</div>
							</div>	
						</div>
						<div class="span4">
							<div class="row-fluid">
								<div class="span3 icon_con">
									<div class="dataexport-icon"></div>
								</div>
								<div class="span9">
									<h5>Data export</h5>
									<p>Data can be analyzed with Business Intelligence platforms extending breadth of insights</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
		<?php endif;?>
			<div class="comments-template">
			    <?php // comments_template( '', true ); ?>
			</div>
		</div>
	</div>
</div>

