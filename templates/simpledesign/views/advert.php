<?php if($this->countModules('advert1') or $this->countModules('advert2') or $this->countModules('advert3') or $this->countModules('advert4') or $this->countModules('advert5')) : ?>
<div id="advert-line" class="clr">
<div id="advert-structure" class="<?php echo $advert_width; ?>">
<div id="advert-bg">
<?php if($this->countModules('advert1')) : ?>
<div class="advert one">
<jdoc:include type="modules" name="advert1" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert2')) : ?>
<div class="advert two">
<jdoc:include type="modules" name="advert2" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert3')) : ?>
<div class="advert three">
<jdoc:include type="modules" name="advert3" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert4')) : ?>
<div class="advert four">
<jdoc:include type="modules" name="advert4" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert5')) : ?>
<div class="advert five">
<jdoc:include type="modules" name="advert5" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>