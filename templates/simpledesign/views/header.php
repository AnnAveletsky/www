<div id="header-line" class="clr">
<div id="header-structure">
<div id="header-bg">
<div id="logo">
<img class="logo" src="<?php echo $this->baseurl ?>/<?php echo "$selectlogo"; ?>" />
</div>
<?php if($this->countModules('header')) : ?>
<div id="header">
<jdoc:include type="modules" name="header" style="none" />
</div>
<?php endif; ?>
</div>
</div>
</div>

<div id="menu-line" class="clr">
<div id="menu-structure">
<div id="menu-bg">
<div id="menu">
<jdoc:include type="modules" name="menu" style="none" />
</div>
<?php if($this->countModules('search')) : ?>
<div id="search">
<jdoc:include type="modules" name="search" style="none" />
</div>
<?php endif; ?>
</div>
</div>
</div>

<?php if($this->countModules('banner')) : ?>
<div id="banner-line" class="clr">
<div id="banner-structure">
<div id="banner-bg">
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
</div>
<?php endif; ?>