<?php
/**
 * The template for displaying the footer
 */

?>
<section class="footer-top-1 elementor-element elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d658720" data-element_type="section"  >
   <div class="elementor-shape elementor-shape-top" data-negative="false">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
         <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
         <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
         <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
      </svg>
   </div>
   <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
            <div class="mim-center"><p>MIMS is a component of the National <a style="color: #408a93;" href="http://www.ocims.gov.za/" target="_blank" rel="noopener">Oceans and Coasts Information Management System</a> (OCIMS) and manages the <a style="color: #408a93;" href="http://sadco.ocean.gov.za/" target="_blank" rel="noopener">Southern African Data Centre for Oceanography</a> (SADCO).</p></div>
            </div>
            </div>
            <div class="elementor-element elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
            <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-widget-image">
                    <a href="https://ocims.dhcp.meraka.csir.co.za/" target="_blank">
                    <img width="300" height="113" src="http://beta.data.ocean.gov.za/wp-content/uploads/2020/06/logo-ocims.png" class="attachment-large size-large" alt=""></a>
                </div>
            </div>
            </div>
            </div>
        </div>
   </div>
</section>
<!-- <section class="footer-top elementor-element elementor-section-stretched shadow-top-inner elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section" >
   <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-text-editor elementor-clearfix"><strong>Latest data uploads: </strong> *dataset citation</div>
   </div>
</section> -->

<footer id="mims-footer" role="contentinfo" >
    <div class="mims-container">
        <div class="mims-row">
            <div class="mims-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
                <?php endif;?>
            </div>
            <div class="mims-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif;?>
            </div>
            <div class="mims-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
                <?php endif;?>
            </div>
            <div class="mims-col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 4") ) : ?>
                <?php endif;?>
            </div>
        </div>
        
    </div>
    <div class="mims-bg-dark">
    <div class="mims-container">
        <p>Copyright <?php echo date("Y"); ?> Marine Information Management System</p>
    </div>
    </div>

</footer>

		<?php wp_footer(); ?>

	</body>
</html>