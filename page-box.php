<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>

<div class="row conf-header">
	<div class="col-sm-8 col-sm-offset-2">
		<img class="conf-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/box.jpg" alt="" />
		<h1 class="box-header text-center"><?php echo $l->t('Introducing the Nextcloud Box');?></h1>
	</div>
</div>
<!-- Exit main: -->
</div>
</div>

<div class="featurerow">
	<div class="wrap container featuregroup">
	<div class="row conf-info">
		<div class="col-sm-5">
			<h1 class="text-center"><?php echo $l->t('<i class="icon-hdd-o"></i></br> Bring your data home');?></h1>
			<p><?php echo $l->t('The Nextcloud Box is your private cloud. It stores your data and enables you to sync between your devices and share with others.');?></p>
			<img class="conf-img img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/features/serverwebui.png" alt="Web UI" />
			<div class="text-center morebuttondiv">
					<a href="/features"target="_blank"><?php echo $l->t('Learn more about Nextcloud!');?></a>
			</div>
		</div>
		<div class="col-sm-5 col-sm-offset-2">
			<h1 class="text-center"><?php echo $l->t('<i class="icon-code-fork"></i></br> Technology');?></h1>
			<p><?php echo $l->t('The Nextcloud box consists of the following parts:');?></p>
			<ul>
				<li><?php echo $l->t('1 TB USB3 hard drive from WDLabs');?></li>
				<li><?php echo $l->t('Nextcloud case with room for the drive and a compute board');?></li>
				<li><?php echo $l->t('microUSB charger, cables and adapters, a screw driver and screws');?></li>
				<li><?php echo $l->t('microSD card with <a href="https://developer.ubuntu.com/en/snappy/" target="_blank">Snappy Ubuntu Core</a> as OS');?></li>
				<li><?php echo $l->t('Apache, MySQL and the latest Nextcloud 10 pre-installed and ready to go');?></li>
			</ul>
			<p><?php echo $l->t('The Box is compatible with the Raspberry Pi 2, <strong>(not included)</strong>. The Box can also fit the Raspberry Pi 3 and the oDroid C2. These will be supported by the software in a future release.');?></p>
			<img class="conf-img img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/pidrive/box-open.jpg" alt="contents" />
		</div>
	</div>
	</div>
</div>
<div class="wrap container">
<div class="boxinfo">
	<div class="row">
	<h1 class="text-center"><?php echo $l->t('Get the Box');?></h1>
	<div class="col-md-6">
		<img class="conf-img img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/pidrive/wrap.jpg" alt="contents" />
		<p><?php echo $l->t('Currently you can only purchase the Nextcloud Box in Europe and the USA. We\'re working on bringing the box to other regions!');?></p>
		<div class="btn-group">
			<button type="button" data-toggle="dropdown" class="btn btn-primary buybutton dropdown-toggle"><?php echo $l->t('Select your country');?> &nbsp;<span class="caret"></span></button>
			<ul role="menu" class="dropdown-menu">
				<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823500" target="_blank">Buy in the USA </a>');?></li>
				<li><?php echo $l->t('<a href=" http://shop.wdc.com/promo/4828823600" target="_blank">Buy in the UK </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823700" target="_blank">Buy in Germany </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823800" target="_blank">Buy in Spain </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823900" target="_blank">Buy in France </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824000" target="_blank">Buy in Italy </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824100" target="_blank">Buy in the Netherlands </a>');?></li>
			<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824200" target="_blank">Buy in rest of Europe </a>');?></li>
			</ul>
	 	</div>
	</div>
	<div class="col-md-6">
	<p><br /><a href="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/accessoires.jpg"><img class="conf-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/accessoires.jpg" alt="" /></a></p>
	</div>
	</div>
</div>

<div class="row boxinfo">
		<h1 class="text-center"><?php echo $l->t('How to Box');?></h1>
	<div class="col-lg-6 col-sm-12">
		<p><a href="<?php echo get_template_directory_uri(); ?>/assets/files/Box-Assembly-Guide.pdf"><img class="conf-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/guide.png" alt="" /></a></p>
		<p><a href="<?php echo get_template_directory_uri(); ?>/assets/files/Box-Assembly-Guide.pdf" class="btn btn-default">download <i class="icon-file-pdf-o"></i></a></p>
	</div>
	<div class="col-lg-6 col-sm-12">
		<h2><?php echo $l->t('Nextcloud Box Wiki and Forums');?></h2>
		<p><?php echo $l->t('You can find a lot of information, tips and tricks on configuring your Nextcloud Box on <a href="https://github.com/nextcloud/nextcloud-snap/wiki">our wiki</a>; discuss the Box and ask questions on <a href="https://help.nextcloud.com/t/the-great-nextcloud-box-topic/3510">our forums.</a>');?></p>
		<div class="text-center morebuttondiv">
			<a href="https://help.nextcloud.com/t/the-great-nextcloud-box-topic/3510" class="btn btn-primary morebutton" target="_blank">Help on our forums <i class="icon-arrow-circle-o-right icon"></i></a>
			<br/><br/>
			<a href="https://github.com/nextcloud/nextcloud-snap/wiki" class="btn btn-primary morebutton" target="_blank">Manuals on our wiki <i class="icon-arrow-circle-o-right icon"></i></a>
		</div>
		<p><?php echo $l->t('If you are interested in contributing to the software of the Box, you can <a href="https://github.com/nextcloud/nextcloud-snap">find the Nextcloud Snap here</a> - we look forward to your pull request. Find us on IRC in <a href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextloud development IRC chat channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat</a>');?></p>
	</div>
</div>
<div class="boxinfo">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 ">
			<h2><?php echo $l->t('Partners');?></h2>
			<p><?php echo $l->t(' The Nextcloud Box was developed in a partnership with WDLabs and Canonical and is one of <a href="https://nextcloud.com/devices">multiple devices from Nextcloud partners.</a> It is a reference device, meant to inspire and invite anyone to build their own. <a href="/contact">Get in contact</a> if you\'re interested in building a Nextcloud Box like device!');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3">
			<a target="_blank" href="https://developer.ubuntu.com/en/snappy/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/ubuntu-core_black-orange_st_hex.png" alt="Snappy Ubuntu Core" /></a>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3">
			<a target="_blank" href="http://wdlabs.wd.com/products/wd-pidrive-1tb-kit/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/pidrive/wdlabs.png" alt="Visit lwn.net" /></a>
		</div>
	</div>
		
</div>
</div>
