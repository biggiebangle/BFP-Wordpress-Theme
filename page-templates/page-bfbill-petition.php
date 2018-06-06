<?php /* Template Name: Petition Page */  ?>
<?php get_header('bill'); ?>
 
 <!-- breadcrumb --> 
    <div class="blue-bg container-fluid">
     	<div class="row">
            <div class="col-sm-6">           
                 	<ol class="breadcrumb">
                      <li><a href="/protect">Protect</a></li>
                      <li><a href="#">Beagle Freedom Bill</a></li>
                      <li class="active"> <?php if ( is_page('petition') ) { echo 'Petition';}  else {echo 'Call Your Representative';}?></li>
                    </ol>
              </div>
          </div>  
    </div><!-- breadcrumb end --> 
    <!-- hero -->     
    <div class="campaign-hero-image default-hero blue-bg white-title white-mobile">
      
      <div class="container-fluid">
           
            <div class="row">
                <div class="col-xs-2 col-sm-1">
                    <div class="hero-dec-space"></div>
                    <div class="hero-dec-space2 dkred-bg"></div>
                    <div class="hero-dec-space2 ltred-bg"></div>
                    <div class="hero-dec-space2 dkred-bg"></div>            
                </div>
                <div class="col-xs-10  col-xs-pull-1 col-sm-11 col-sm-pull-0 campaign-header">
                    <h2>Help pass the</h2>
                        <h1>Beagle <br>Freedom<br> Bill</h1>
                </div>
            </div>
    	</div>
    
   </div><!-- hero end -->
   
    <!-- dismissible -->
    <div class="blue-bg container-fluid">
         <div class="row">
            <div class="col-sm-6">                
                     <div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Looking 
                  <?php if ( is_page('petition') ) {
					 echo 'to call your <a href="/call-your-representative"><strong>representative?</strong> ';} 
					 else {
					 echo 'for the <a href="/petition"><strong>petition?</strong>';}?>
                     </a></div>
            </div>
         </div>
     </div> <!-- dismissible end -->         

<!-- campaign-body container -->
  <div class="campaign-body container">
  	<!-- row -->
    <div class="row">
      		<!-- six columns -->
            <div class="col-sm-6 col-sm-push-6 form-content">

                <ul id="myTabs" class="nav nav-tabs"  role="tablist">
                  <li role="presentation" class="active"><a href="#illinois" aria-controls="illinois" role="tab" data-toggle="tab">Illinois</a></li>
                  <li class="dropdown" role="presentation">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Past Bills <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> 
                            <li><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">California</a></li> 
                            <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Connecticut</a></li>
                            <li><a href="#dropdown3" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown3">Minnesota</a></li> 
                            <li><a href="#dropdown4" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown4">Nevada</a></li>
                            <li><a href="#dropdown4" role="tab" id="dropdown5-tab" data-toggle="tab" aria-controls="dropdown5">New York</a></li>
                        </ul>
                    </li>
                </ul>
               	<!--petitions tabs -->
                 <div id="myTabContent" class="tab-content">
                 
                  <div role="tabpanel" class="tab-pane active" id="illinois" aria-labelledby="illinois-tab" style="height:<?php if ( is_page('petition') ) {echo '1100px';} else {echo '1850px';}?>">
                     <?php
					 $currentURL; 
					 if ( is_page('petition') ) {
					 $currentURL= 'https://beaglefreedomproject.good.do/r2r_il/signthispetition/';} 
					 else {
					 $currentURL= 'https://beaglefreedomproject.good.do/r2r_il/makethecall/';}?>
                
                  <iframe id="dogooder" allowTransparency="true" src="<?php print $currentURL?>?embedded=" scrolling="no" frameborder="0"><p>Your browser does not support iframes. Please visit <a href="<?php print $currentURL?>"><?php print $currentURL?></a></p></iframe><script>if(!window.jQuery){document.write('<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"><\/script>');}</script><script type="text/javascript" src="//dogooder.co/static/js/jquery.iframeResizer.7d04fe8f6f93.js"></script><script type="text/javascript" src="//dogooder.co/embed.js"></script>
                  </div>
                 
                  <div role="tabpanel" class="tab-pane fade" id="dropdown1"  aria-labelledby="dropdown1-tab"><img src="/wp-content/themes/bfp/img/petition/seals/CA_seal_50.gif" class="victory center-block img-responsive"></div>
                  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab"><img src="/wp-content/themes/bfp/img/petition/seals/CT_seal_50.gif" class="victory center-block img-responsive"></div>
                  <div role="tabpanel" class="tab-pane fade" id="dropdown3"  aria-labelledby="dropdown3-tab"><img src="/wp-content/themes/bfp/img/petition/seals/MN_seal_50.gif" class="victory center-block img-responsive"></div>
                  <div role="tabpanel" class="tab-pane fade" id="dropdown4" aria-labelledby="dropdown4-tab"><img src="/wp-content/themes/bfp/img/petition/seals/NV_seal_50.gif" class="victory center-block  img-responsive"></div>
                  <div role="tabpanel" class="tab-pane fade" id="dropdown5" aria-labelledby="dropdown5-tab"><img src="/wp-content/themes/bfp/img/petition/seals/NY_seal_50.gif" class="victory center-block  img-responsive"></div>
                  
                </div><!--petitions tabs end-->  
    
            </div><!-- six columns end -->
            
            <!-- campaign content six columns-->
            <div class="col-sm-6 col-sm-pull-6 campaign-content">
                 <h3>Support the Beagle Freedom Bill!</h3>
                 <h4> A Right to Release: Finding forever homes for research animals.</h4>
                    <p>Beagle Freedom Project's important legislative push to enact laws that would ensure research facilities can give dogs and cats used in laboratory testing a chance at a life after research. <br /><br /> This is a simple, common-sense, and compassionate proposal to help rescue dogs and cats from tax-payer funded research laboratories. The legislation would facilitate a relationship between laboratories that use dogs and cats for research purposes and registered non-profit animal rescue organizations so that when the animals are no longer needed they can be placed up for public adoption. </p>
                    <p>The law is needed! There is a deficiency of law right now and the opportunity for a post-laboratory life for these animals is completely dependent on the discretion of research workers to volunteer their time to try to find these animals homes. Not surprisingly, most choose not to do so. There exists no federal or state law or regulation that addresses what is to happen to an animal when the testing ends. After all these animals have endured for human products, pharmaceuticals, and academic curiosities they deserve a chance at a real life! </p>
                    <p>In 2014 Minnesota became the first state to pass the Beagle Freedom Bill and it has been successfully implemented. In 2015 Beagle Freedom Project continued the momentum and passed this law in California, Connecticut, and Nevada. In 2016 Beagle Freedom Project is supporting the passage of similar bills in the following states and the federal ban on cosmetic testing on animals. If you live in one of these states please sign the petition, email, write, and call your representatives or personally lobby at the capital. If this bill is not in your state, take federal action and help us ban cosmetic animal-testing!</p>
                <h3>Take Action</h3>
                <p>For this law to pass your political representatives need to hear from  you. The more direct and personal &ndash; the more effective. Please send an  email to your representative, give them a call, and download the support  materials and lobby in person!</p>
      		</div><!-- campaign content six columns end -->
     
   	</div><!-- row end -->
  </div><!-- campaign-body container -->
  
 <!-- right to release banner --> 
  <div class="container-fluid">
      <div class="row">
      	<div class="col-xs-12 support text-center">
        	<h2> Support the 'right to release' </h2>
        </div>        
      </div>
  </div> <!-- right to release banner end--> 
  
  
  
  <!-- action container  --> 
  <div class="container-fluid">
  	<!-- row seals menu desktop only -->
  	<div class="row text-center desktop-seals hidden-xs">
    	<div class="col-sm-2">
        	<p>Support Illinois' Campaign</p>
        </div>
        <div class="col-sm-2">
        	<p>Support New York's Campaign</p>
        </div>
    	<div class="col-sm-2">
        	<p>Support California's Campaign</p>
        </div>
    	<div class="col-sm-2">
        	<p>Support Connecticut's Campaign</p>
        </div>
    	<div class="col-sm-2">
        	<p>Support Minnesota's Campaign</p>
        </div>
        <div class="col-sm-2">
        	<p>Support Nevada's Campaign</p>
        </div>
    </div><!-- row seals menu desktop only end -->
    
    <!-- row seals tabs desktop only -->
    <div class="row desktop-seals hidden-xs">
        
            <!-- tabs top -->
             <div class="tabbable">
             
                  <ul class="nav nav-tabs">
                    <li class="active col-sm-2"><a href="#IL" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/bfp/img/petition/seals/IL_seal.gif"></a></li>
                    <li class="col-sm-2"><img src="/wp-content/themes/bfp/img/petition/seals/NY_seal_50.gif" class="victory img-responsive"></li>
                    <li class="col-sm-2"><img src="/wp-content/themes/bfp/img/petition/seals/CA_seal_50.gif" class="victory img-responsive"></li>
                    <li class="col-sm-2"><img src="/wp-content/themes/bfp/img/petition/seals/CT_seal_50.gif" class="victory img-responsive"></li>
                    <li class="col-sm-2"><img src="/wp-content/themes/bfp/img/petition/seals/MN_seal_50.gif" class="victory img-responsive"></li>
                    <li class="col-sm-2"><img src="/wp-content/themes/bfp/img/petition/seals/NV_seal_50.gif" class="victory img-responsive"></li>
                  </ul>
                <!-- tab content -->      
                <div class="tab-content campaigns">
                	<!-- individual tab -->
                    <div class="tab-pane active fade in" id="IL">
                  
                         <h3>&nbsp;Support Illinois' Research Animal Adoption Bill</h3>
                         
               			<!-- internal row-->
                         <div class="row text-center">
                         
                         	<div class="col-sm-3">
                                <div class="action call-rep">
                              
                               <?php if ( is_page('petition') ) {
									 echo '<a href="/call-your-representative" class="action-link"><span class="image-hover"></span><div class="action-title"><h5>Call your</h5> representative</div></a>';} 
									 else {
									 echo '<a href="/petition" class="action-link"><span class="image-hover"></span><div class="action-title">Sign the <h5>petition</h5></div></a>';}?>
                                   
                             	</div>
                             </div>
                            
                             <div class="col-sm-3 ">
                                <div class="action dnld-fact">
                                	<a href="/downloads/BFB_Fact_Sheet_IL.pdf" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Fact Sheet</h5></div>
                                     </a>
                             	</div>
                             </div>
                             
                             <div class="col-sm-3">
                                <div class="action dnld-policy">
                                	<a href="/downloads/BFB_Policy_IL.pdf" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Policy</h5></div>
                                     </a>
                             	</div>
                             </div>
                             
                            <div class="col-sm-3">
                                <div class="action  dnld-poster">
                                	<a href="/downloads/RightToRelease_IL.pdf" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Poster</h5></div>
                                     </a>
                             	</div>
                             </div>
                             
                         </div><!-- internal row end-->
                        	
                    </div><!-- individual tab end-->
                    
                   <!-- <div class="tab-pane fade" id="NY">
                         
                   <h3>&nbsp;Support New York's Research Animal Adoption Bill</h3>
               
                         <div class="row text-center">
                         
                         	<div class="col-sm-3">
                                <div class="action call-rep">
                                	<a href="#" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title"><h5>Call your</h5> representative</div>
                                     </a>
                             	</div>
                             </div>
                            
                             <div class="col-sm-3 ">
                                <div class="action dnld-fact">
                                	<a href="#" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Fact Sheet</h5></div>
                                     </a>
                             	</div>
                             </div>
                             <div class="col-sm-3">
                                <div class="action dnld-policy">
                                	<a href="#" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Policy</h5></div>
                                     </a>
                             	</div>
                             </div>
                            <div class="col-sm-3">
                                <div class="action  dnld-poster">
                                	<a href="#" class="action-link">
                                    	<span class="image-hover"></span>
                                        <div class="action-title">Download<h5>Poster</h5></div>
                                     </a>
                             	</div>
                             </div>
                         </div>
                         
                    </div>--><!-- individual tab end -->
               
                </div><!-- tab content end -->  
                
            </div><!-- tabs top end-->

    
    </div><!-- row seals tabs desktop only end -->
    
    <!-- row seals only mobile -->
    <div class="row mobile-seals visible-xs-block">
            <div class="col-xs-12">
                <!-- tabs top -->
                 <div class="panel-group" id="accordion">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><p>Support Illinois' Campaign</p><br><img src="/wp-content/themes/bfp/img/petition/seals/IL_seal.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      	<div class="panel-body text-center">
                        
                        	<div class="campaigns">
                            	<a href="#">
                               		<div class="action call-rep">
                                     	<div class="action-title"><h5>Call your</h5> representative</div>                                   
                             		</div>
                                 </a>
                            </div>
                   			<div class="campaigns">
                            	<a href="#">
                               		<div class="action dnld-fact">
                                     	<div class="action-title"><h5>Download</h5>Fact Sheet</div>                                   
                             		</div>
                                 </a>                     
                            </div>
                   			<div class="campaigns">                     
                            	<a href="#">
                               		<div class="action dnld-policy">
                                     	<div class="action-title"><h5>Download</h5>Policy</div>                                   
                             		</div>
                                 </a>
                            </div>
                   			<div class="campaigns">                     
                            	<a href="#">
                               		<div class="action dnld-poster">
                                     	<div class="action-title"><h5>Download</h5>Poster</div>                                   
                             		</div>
                                 </a>
                             </div>
                            
                            </div><!--panel-body-->

                      </div><!-- collapse -->
                    </div><!--panel-->
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><p>Support New York's Campaign</p><br><img src="/wp-content/themes/bfp/img/petition/seals/NY_seal_50.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">Victory!</div>
                      </div>
                    </div>
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><p>Support California's Campaign</p><br><img src="/wp-content/themes/bfp/img/petition/seals/CA_seal_50.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">Victory!</div>
                    </div>
                  </div>
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><p>Support Connecticut's Campaign</p><br><img src="/wp-content/themes/bfp/img/petition/seals/CT_seal_50.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">Victory!</div>
                    </div>
                  </div>
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><p>Support Minnesota's Campaign</p><img src="/wp-content/themes/bfp/img/petition/seals/MN_seal_50.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">Victory!</div>
                    </div>
                  </div>
                  <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><p>Support Nevada's Campaign</p><img src="/wp-content/themes/bfp/img/petition/seals/NV_seal_50.gif"></a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">Victory!</div>
                    </div>
                  </div>
                </div><!-- /tabs -->
                
          </div><!-- end col-xs-12 -->
        
    </div><!-- row seals only mobile end -->
    
</div> <!-- action container end  --> 


<!-- shop -->
<div class="container-fluid">
	<div class="row blue-bg section"> 
    	<h2 class="text-center">Stand out in a crowd and wear your politics on your shirt. <br>Perfect for Rallies.</h2>
        <img src="/wp-content/themes/bfp/img/petition/tshirt.jpg" class="img-responsive  center-block tshirt"/>    
    </div>
</div><!-- shop ends -->

<!-- fact sheet -->
<div class="container-fluid">
	<div class="row ltred-bg section "> 
        <div class="col-sm-10 col-sm-offset-1">
            <h2>WHAT THIS BILL DOES:</h2>
            <ul>
                <li>This bill simply asks that NY laboratories make a good faith effort
                at contacting relevant animal rescue organizations to do the adoption
                work. If those organizations cannot place the dog or cat, the research
                lab is free to euthanize them as they would have otherwise.</li>
                <li>This bill would allow New York to demonstrate that it sets a
                gold standard for research ethics and animal welfare.</li>
                <li>This bill helps bridge the differences between people over the
                controversial issue of animal testing in a very reasonable manner.</li>
                <li>This bill allows for the waiver of all liability from the research laboratory
                and offers them protection with complete confidentiality if they so choose.</li>
            </ul>
            <h2>WHAT THIS BILL DOES NOT DO:</h2>
            <ul>
                <li>This bill leaves the discretion to the veterinary professionals to
                determine if a dog or cats is healthy enough for post-research adoption.</li>
                <li>This bill does not interfere with the research process or grant requests.</li>
                <li>This bill does not require research labs to assume any extra cost,
                provide transportation, veterinary care, or financial assistance.</li>
                <li>This bill does not require any at capacity shelter or rescue group
                to assume responsibility for these animals; it only gives them the
                opportunity if they so choose.</li>
            </ul>
            
        </div>
    </div>
</div><!-- fact sheet ends -->


 
<?php get_footer(); ?>
