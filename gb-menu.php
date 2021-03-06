<!-- Meganizr HTML -->

<!-- .mzr-slide - for slide transition -->

<!-- .mzr-fade - for fade transition -->

<!-- .mzr-responsive - for responsive menu -->
<link href="app/webroot/css/meganizr.css" rel="stylesheet" type="text/css" />


<ul class="meganizr mzr-slide mzr-responsive">
	
	<!-- Home --> 
	
	<!-- .mzr-home-dark - for dark home icon --> 
	
	<!-- .mzr-home-light - for light home icon -->
	
	<li><?php echo $this->Html->link('Home', array('controller' => 'sites', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
	<!-- end Home --> 
	
	<!-- Links -->
	
	<li class="mzr-drop"> <a href="#">Links</a>
		<div class="mzr-content drop-four-columns">
			<div class="one-col">
				<h3>Envato</h3>
				<ul class="mzr-links">
					<li><a href="#">CodeCanyon</a></li>
					<li><a href="#">ThemeForest</a></li>
					<li><a href="#">GraphicRiver</a></li>
					<li><a href="#">ActiveDen</a></li>
					<li><a href="#">PhotoDune</a></li>
				</ul>
			</div>
			<div class="one-col">
				<h3>Tuts+ Premium</h3>
				<ul class="mzr-links">
					<li><a href="#">CodeCanyon</a></li>
					<li><a href="#">ThemeForest</a></li>
					<li><a href="#">GraphicRiver</a></li>
					<li><a href="#">ActiveDen</a></li>
					<li><a href="#">PhotoDune</a></li>
				</ul>
			</div>
			<div class="one-col">
				<h3>Marketplaces</h3>
				<ul class="mzr-links">
					<li><a href="#">CodeCanyon</a></li>
					<li><a href="#">ThemeForest</a></li>
					<li><a href="#">GraphicRiver</a></li>
					<li><a href="#">ActiveDen</a></li>
					<li><a href="#">PhotoDune</a></li>
				</ul>
			</div>
			
			<div class="one-col">
				<h3>PhotoDune</h3>
				<ul class="mzr-links">
					<li><a href="#">CodeCanyon</a></li>
					<li><a href="#">ThemeForest</a></li>
					<li><a href="#">GraphicRiver</a></li>
					<li><a href="#">ActiveDen</a></li>
					<li><a href="#">PhotoDune</a></li>
				</ul>
			</div>
		</div>
	</li>
	
	<!-- end Links --> 
	
	<!-- Portfolio -->
	
	<li class="mzr-drop"> <a href="#">Portfolio</a>
		<div class="mzr-content drop-four-columns">
			<div class="one-col">
				<h3>iNav Menu</h3>
				<img src="img/content/inav.png" alt=""> <a href="#" class="button block">Purchase $4</a> </div>
			<div class="one-col">
				<h3>Metro Menu</h3>
				<img src="img/content/metro.png" alt=""> <a href="#" class="button block">Purchase $3</a> </div>
			<div class="one-col">
				<h3>iNav Menu</h3>
				<img src="img/content/inav.png" alt=""> <a href="#" class="button block">Preview</a> </div>
			<div class="one-col">
				<h3>Metro Menu</h3>
				<img src="img/content/metro.png" alt=""> <a href="#" class="button block">Purchase $3</a> </div>
		</div>
	</li>
	
	<!-- end Portfolio --> 
	
	<!-- Blog -->
	
	<li class="mzr-drop"> <a href="#">Blog</a>
		<div class="mzr-content drop-four-columns">
			<div class="two-col">
				<h3>CodeCanyon Marketplace</h3>
				<img src="img/content/codecanyon.png" alt="codecanyon">
				<p><a href="#">CodeCanyon</a> is an <a href="#">Envato Marketplace</a>. At CodeCanyon, you can purchase and sell scripts and components for a variety of languages and frameworks, currently including JavaScript, PHP, ASP.NET ...</p>
				<a href="#" class="button">read more</a> </div>
			<div class="two-col">
				<h3>GraphicRiver Marketplace</h3>
				<img src="img/content/graphicriver.png" alt="graphicriver">
				<p><a href="#">GraphicRiver</a> is an <a href="#">Envato Marketplace</a>. At GraphicRiver you can buy and sell royalty-free, layered Photoshop files, vectors, icon packs, Adobe add-ons and design templates for just a few dollars ...</p>
				<a href="#" class="button">read more</a> </div>
		</div>
	</li>
	
	<!-- end Blog --> 
	
	<!-- DropDown -->
	
	<li class="mzr-drop mzr-levels"> <a href="#">DropDown</a> 
		
		<!-- Fisrt Level -->
		
		<ul>
			<li><a href="#">CodeCanyon</a></li>
			<li class="mzr-drop"> <a href="#">ThemeForest</a> 
				
				<!-- Second Level -->
				
				<ul>
					<li><a href="#">CodeCanyon</a></li>
					<li><a href="#">ThemeForest</a></li>
					<li><a href="#">GraphicRiver</a></li>
					<li class="mzr-drop"> <a href="#">ActiveDen</a> 
						
						<!-- Third Level -->
						
						<ul>
							<li><a href="#">CodeCanyon</a></li>
							<li><a href="#">ThemeForest</a></li>
							<li><a href="#">GraphicRiver</a></li>
							<li><a href="#">ActiveDen</a></li>
							<li><a href="#">PhotoDune</a></li>
						</ul>
					</li>
					<li><a href="#">PhotoDune</a></li>
				</ul>
			</li>
			<li><a href="#">GraphicRiver</a></li>
			<li><a href="#">ActiveDen</a></li>
			<li><a href="#">PhotoDune</a></li>
		</ul>
	</li>
	
	<!-- end DropDown --> 
	
	<!-- Supporte (no-drop-item) -->
	
	<li><a href="#">Supporte</a></li>
	
	<!-- end Supporte --> 
	
	<!-- Search Form -->
	
	<li class="mzr-search mzr-align-right">
		<form action="#">
			<input type="text" id="search-form" name="search-form" value="Search" onfocus="if(this.value=='Search')this.value='';" onblur="if(this.value=='')this.value='Search';">
			<input type="submit" value="">
		</form>
	</li>
	
	<!-- end Search Form --> 
	
	<!-- Contact Form (styled only) -->
	
	<li class="mzr-drop mzr-align-right mzr-contact"> <a href="#">Contact</a>
		<div class="mzr-content drop-two-columns">
			<div class="two-col">
				<form action="#" method="#" id="mzr-contact-form">
					<input type="text" name="name" id="name" placeholder="Name">
					<input type="email" name="email" id="email" placeholder="email@email.com">
					<textarea name="message" id="message" placeholder="Message"></textarea>
					<input type="submit" value="Send Message">
				</form>
			</div>
		</div>
	</li>
	
	<!-- end Contact Form -->
	
</ul>

<!-- end Meganizr HTML --> 
