<?php
/**
 * The template for displaying the footer
 */

?>
<footer id="mims-footer" role="contentinfo" >
    <div class="mims-container">
        <div class="mims-row">
            <div class="mims-col-md-4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
                <?php endif;?>
            </div>
            <div class="mims-col-md-4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif;?>
            </div>
            <div class="mims-col-md-4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
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