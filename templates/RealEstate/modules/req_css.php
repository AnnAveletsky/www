<!-- Needed for Slideshow -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/assets/refineslide.css" type="text/css" />	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/assets/css/refineslide-theme-dark.css" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/assets/js/modernizr.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/assets/js/jquery.js"></script>

    <script>
        jQuery(function () {
            var $upper = $('#upper');

            jQuery('#images').refineSlide({
                transition : 'fade',
                onInit : function () {
                    var slider = this.slider,
                       $triggers = $('.translist').find('> li > a');

                    $triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

                    $triggers.on('click', function (e) {
                       e.preventDefault();

                        if (!$(this).find('.unsupported').length) {
                            $triggers.removeClass('active');
                            $(this).addClass('active');
                            slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                        }
                    });

                    function support(result, bobble) {
                        var phrase = '';

                        if (!result) {
                            phrase = ' not';
                            $upper.find('div.bobble-'+ bobble).addClass('unsupported');
                            $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                        }
                    }

                    support(this.slider.cssTransforms3d, '3d');
                    support(this.slider.cssTransitions, 'css');
                }
            });
        });
    </script>  		
<!-- END -->

	<script>
		jQuery(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			jQuery(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			jQuery(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>

<jdoc:include type="head" />

 <!--[if lte IE 9]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
<![endif]-->


<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style2.css" type="text/css" charset="utf-8" />	
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
<?php if ($this->params->get( 'analyticsdisable' )) : ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/analytics.js"></script><?php endif; ?>
<?php if ($this->params->get( 'jcopyright' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jcopyright.js"></script><?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/html/com_content/archive/jscript.js"></script>	
<?php if ($this->params->get( 'jscroll' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jscroll.js"></script><?php endif; ?>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">