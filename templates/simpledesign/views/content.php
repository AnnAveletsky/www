<div id="content-line" class="clr">
<div id="content-structure">
<div id="content-bg">
<div id="content<?php echo $selectcolumns; ?>-bg">
<?php if($this->countModules('left')) : ?>
<div id="left<?php echo $selectcolumns; ?>">
<jdoc:include type="modules" name="left" style="webtag" />
</div>
<?php endif; ?>
<div id="content<?php echo $selectcolumns; ?>">
<?php if ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
<div id="user<?php echo $selectcolumns; ?>" class="clr">
<div class="<?php echo $user_width; ?>">
<?php if($this->countModules('user1')) : ?>
<div class="user one">
<jdoc:include type="modules" name="user1" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
<div class="user two">
<jdoc:include type="modules" name="user2" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user3')) : ?>
<div class="user three">
<jdoc:include type="modules" name="user3" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
<div id="user<?php echo $selectcolumns; ?>" class="clr">
<div class="<?php echo $user2_width; ?>">
<?php if($this->countModules('user4')) : ?>
<div class="user one">
<jdoc:include type="modules" name="user4" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user5')) : ?>
<div class="user two">
<jdoc:include type="modules" name="user5" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
<div class="user three">
<jdoc:include type="modules" name="user6" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="content" class="clr">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
<div id="user<?php echo $selectcolumns; ?>" class="clr">
<div class="<?php echo $user3_width; ?>">
<?php if($this->countModules('user7')) : ?>
<div class="user one">
<jdoc:include type="modules" name="user7" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user8')) : ?>
<div class="user two">
<jdoc:include type="modules" name="user8" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('user9')) : ?>
<div class="user three">
<jdoc:include type="modules" name="user9" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('right')) : ?>
<div id="right<?php echo $selectcolumns; ?>">
<jdoc:include type="modules" name="right" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>