<?php defined('_JEXEC') or die;
// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/framework.php'; 
?>
<!DOCTYPE html>
<!--[if IE 8]>
	<html class="no-js lt-ie9" lang="en" > 
<![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
	<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/siegeengine.css" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/custom.modernizr.js"></script>
      <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      	<?php if ($setWidth != $defaultWidth) : ?>
        <style>
            .row {
                max-width: <?php echo $setWidth ?>px;
            }
        </style>
    <?php endif; ?>
</head>
<body>

	<?php if ($this->countModules( 'top' )) : ?>
        <section class="row">
			<!--toprow-->
			<div class="large-12 columns">
                <jdoc:include type="modules" name="top" style="html5" />
			</div>
        </section>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'above' )) : ?>
        <section class="row">
            <!--aboverow-->
            <jdoc:include type="modules" name="above" style="html5" />
        </section>
    <?php endif; ?>
	
    <div class="row">
    	<!--mainrow-->
        <?php if ($this->countModules( 'left' )) : ?>
            <section class="<?php echo $leftWidth ?> columns sidebar">
                <!--left-row-->
                <jdoc:include type="modules" name="left" style="html5" />
            </section>
        <?php endif; ?>
        <div class="<?php echo $mainwidth ?> columns">
        	<!--mainrow-->
             <?php if ($this->countModules( 'above-content' )) : ?>
                <div class="above-content">
                    <!--above-content-->
                    <jdoc:include type="modules" name="above-content" style="html5" />
                </div>
            <?php endif; ?>            
			<?php if ($this->countModules( 'breadcrumbs' )) : ?>
				<div class="large-12">
					<jdoc:include type="modules" name="breadcrumbs" style="none" />
				</div>
			<?php endif; ?>   
    			<jdoc:include type="component" />
            <?php if ($this->countModules( 'below-content' )) : ?>
                <section class="below-content">
                    <!--below-content-->
                    <jdoc:include type="modules" name="below-content" style="html5" />
                </section>
            <?php endif; ?>
   		</div>
		<?php if ($this->countModules( 'right' )) : ?>
            <section class="<?php echo $rightWidth ?> columns sidebar">
                <!--right-row-->
                <jdoc:include type="modules" name="right" style="html5" />
            </section>
        <?php endif; ?>
    </div>
	
    <?php if ($this->countModules( 'below' )) : ?>
        <section class="row">
            <!--belowrow-->
                <jdoc:include type="modules" name="below" style="html5" />
        </section>
    <?php endif; ?>

    <?php if ($this->countModules( 'bottom' )) : ?>
        <section class="row">
            <!--bottomrow-->
            <jdoc:include type="modules" name="bottom" style="html5" />
        </section>
    <?php endif; ?>
	
    <?php if ($this->countModules( 'footer' )) : ?>
        <footer class="row">
            <!--footerrow-->
            <jdoc:include type="modules" name="footer" style="html5" />
        </footer>
    <?php endif; ?>

  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/zepto.js"></script>

  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.min.js"></script>
  <!--
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.dropdown.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.placeholder.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.forms.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.alerts.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.magellan.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.reveal.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.tooltips.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.clearing.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.cookie.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.joyride.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.orbit.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.section.js"></script>
  
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js//foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
