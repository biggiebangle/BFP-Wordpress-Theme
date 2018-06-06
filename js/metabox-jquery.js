/*-------------------------------------------*/
jQuery(document).ready(function ($) {
//Show/hide metabox, depending on element value
    jQuery(document).ready(function(){
		
       // togglesectionboxOnFormat("love_meta_boxes", 'page-templates/page-love.php');
        togglesectionboxOnFormat("protect_meta_box", 'page-templates/page-protect.php');
		togglesectionboxOnFormat("rescue_meta_box", 'page-templates/page-rescue.php');
		
		
		jQuery("#page_template").on("change",function() {
			       // togglesectionboxOnFormat("love_meta_boxes", 'page-templates/page-love.php');
        			togglesectionboxOnFormat("protect_meta_box", 'page-templates/page-protect.php');
					togglesectionboxOnFormat("rescue_meta_box", 'page-templates/page-rescue.php');
        });
    });

	function togglesectionboxOnFormat(metaboxId, value) {
		var title = jQuery("#page_template").val();
		
		/*if(title === "page-protect.php" || title === "page-rescue.php" ){
			jQuery('#love_meta_boxes').hide();
		}else{
			jQuery('#love_meta_boxes').show();
		}*/
		
		//if(title === "page-protect.php" || title === "page-templates/template-page-love.php" ){
		/*if(title === "page-protect.php" ){
			jQuery('#rescue_meta_box').hide();
		}else{
			jQuery('#rescue_meta_box').show();
		}	*/
		
		//if(title === "page-rescue.php" || title === "page-templates/template-page-love.php" ){
		/*if(title === "page-rescue.php" ){
			jQuery('#protect_meta_box').hide();
		}else{
			jQuery('#protect_meta_box').show();
		}*/
		
		if(title != value ) {
            jQuery("#" + metaboxId).slideUp("fast"); 
		}
        else { 
            jQuery("#" + metaboxId).slideDown("fast"); 
		}

	

    }
});