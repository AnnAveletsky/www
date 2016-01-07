<?php     
 $slide1	=	htmlspecialchars($this->params->get('slide1')); 
 $slide2	=	htmlspecialchars($this->params->get('slide2')); 
 $slide3	=	htmlspecialchars($this->params->get('slide3'));  
 $slide4	=	htmlspecialchars($this->params->get('slide4')); 
 $slide5	=	htmlspecialchars($this->params->get('slide5')); 
 $slide6	=	htmlspecialchars($this->params->get('slide6')); 
 $slide7	=	htmlspecialchars($this->params->get('slide7'));  
 $slide8	=	htmlspecialchars($this->params->get('slide8'));
 
 $NumberOfSlides	=	htmlspecialchars($this->params->get('NumberOfSlides'));
?> 

<center>
 <div class="topline"></div>
    <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
            <div class="section-2 group">
				<ul id="images" class="rs-slider">
				
				  
		<?php if ($slide1 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide1); ?>" alt="1" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc1); ?></p></div></li>
		<?php else : ?><li class="group"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/1.jpg" alt="1" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc1); ?></p></div></li><?php endif; ?>

		<?php if ($slide2 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide2); ?>" alt="2" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc2); ?></p></div></li>
		<?php else : ?><li class="group"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/2.jpg" alt="2" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc2); ?></p></div></li><?php endif; ?>

		<?php if ($slide3 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide3); ?>" alt="3" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc3); ?></p></div></li>
		<?php else : ?><li class="group"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/3.jpg" alt="3" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc3); ?></p></div></li><?php endif; ?>

		<?php if ($slide4 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide4); ?>" alt="4" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc4); ?></p></div></li>
		<?php else : ?><li class="group"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/4.jpg" alt="4" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc4); ?></p></div></li><?php endif; ?>		
			
		<?php if ($NumberOfSlides >= 5 ) : ?><?php if ($slide5 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide5); ?>" alt="5" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc5); ?></p></div></li><?php endif; ?><?php endif; ?>
		<?php if ($NumberOfSlides >= 6 ) : ?><?php if ($slide6 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide6); ?>" alt="6" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc6); ?></p></div></li><?php endif; ?><?php endif; ?>
		<?php if ($NumberOfSlides >= 7 ) : ?><?php if ($slide7 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide7); ?>" alt="7" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc7); ?></p></div></li><?php endif; ?><?php endif; ?>
		<?php if ($NumberOfSlides >= 8 ) : ?><?php if ($slide8 != null ) : ?><li class="group"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide8); ?>" alt="8" /><div class="rs-caption rs-bottom"><p><?php echo ($slidedesc8); ?></p></div></li><?php endif; ?><?php endif; ?>
			
				</ul>
            </div> <!-- /.section-2 -->
        </div> <!-- /.wrap -->
    </div> <!-- /#upper -->
</center>
