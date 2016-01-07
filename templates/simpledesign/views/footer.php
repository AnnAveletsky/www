<?php if($this->countModules('footer1') or $this->countModules('footer2') or $this->countModules('footer3') or $this->countModules('footer4') or $this->countModules('footer5')) : ?>
<div id="footer-line" class="clr">
<div id="footer-structure" class="<?php echo $footer_width; ?>">
<div id="footer-bg">
<?php if($this->countModules('footer1')) : ?>
<div class="footer one">
<jdoc:include type="modules" name="footer1" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="footer two">
<jdoc:include type="modules" name="footer2" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer3')) : ?>
<div class="footer three">
<jdoc:include type="modules" name="footer3" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer4')) : ?>
<div class="footer four">
<jdoc:include type="modules" name="footer4" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer5')) : ?>
<div class="footer five">
<jdoc:include type="modules" name="footer5" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>