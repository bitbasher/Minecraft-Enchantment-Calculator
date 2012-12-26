<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> ../80DC340E-E976-4C12-A039-0E456D6361BC/main.css        <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minecraft Enchantment Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=800, initial-scale=1">
        <meta name="description" content="Minecraft Enchantment Calculator calculates the probabilities of getting particular enchants at certain levels for certain items.  It can also tell you the best level to get a certain enchant." />
		<meta name="author" content="Minecraft Enchantment Calculator" />
		<meta name="google" content="notranslate" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic+Slab">
        <script src="js/cufon-yui.js"></script>
        <script src="js/antic_slab_400.font.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        
        <div id="title">
        	<img src="img/logo.png" alt="" id="logo" />Minecraft Enchantment Calculator <span id="version">v2.0 (Books coming soon!)</span>
        </div>
        <div id="main_window">
        	<div id="normal_calc">
		        What enchants can I get on a
		        <select id="material">
					<option value="chain">Chain</option>
					<option value="diamond" selected="yes">Diamond</option>
					<option value="gold">Gold</option>
					<option value="iron">Iron</option>
					<option value="leather">Leather</option>
					<option value="stone">Stone</option>
					<option value="wood">Wood</option>
		        </select>
		        <select id="tool">
					<option value="axe">Axe</option>
					<option value="boots">Boots</option>
					<option value="bow">Bow</option>
					<option value="chestplate">Chest Plate</option>
					<option value="helmet">Helmet</option>
					<option value="leggings">Leggings</option>
					<option value="pickaxe" selected="yes">Pickaxe</option>
					<option value="shovel">Shovel</option>
					<option value="sword">Sword</option>
		        </select>
		        <br />
		        at level
		        <input type="text" id="level" maxlength="2" value="30" />
		        ?
		        <input type="button" id="calc" value="Calculate..." />
        	</div>
        	<div id="or">
        		- Or -
        	</div>
        	<div id="reverse_calc">
        		What is the best level to get
        		<select id="enchant">
        			<option value="protection">Protection</option>
        			<option value="fireprotection">Fire Protection</option>
        			<option value="blastprotection">Blast Protection</option>
        			<option value="projectileprotection">Projectile Protection</option>
        			<option value="aquaaffinity">Aqua Affinity</option>
        			<option value="respiration">Respiration</option>
        			<option value="featherfalling">Feather Falling</option>
        			<option value="smite">Smite</option>
        			<option value="sharpness" selected="yes">Sharpness</option>
        			<option value="boa">Bane of Arthropods</option>
        			<option value="knockback">Knockback</option>
        			<option value="fireaspect">Fire Aspect</option>
        			<option value="looting">Looting</option>
        			<option value="efficiency">Efficiency</option>
        			<option value="silktouch">Silk Touch</option>
        			<option value="unbreaking">Unbreaking</option>
        			<option value="fortune">Fortune</option>
        			<option value="power">Power</option>
        			<option value="punch">Punch</option>
        			<option value="flame">Flame</option>
        			<option value="infinity">Infinity</option>
        		</select>
        		<select id="enchlevel">
        			<option value="1">I</option>
        			<option value="2">II</option>
        			<option value="3">III</option>
        			<option value="4" selected="yes">IV</option>
        			<option value="5">V</option>
        		</select>
        		<br />
        		on a
        		<select id="revmaterial">
					<option value="chain">Chain</option>
					<option value="diamond" selected="yes">Diamond</option>
					<option value="gold">Gold</option>
					<option value="iron">Iron</option>
					<option value="leather">Leather</option>
					<option value="stone">Stone</option>
					<option value="wood">Wood</option>
		        </select>
		        <select id="revtool">
					<option value="axe">Axe</option>
					<option value="boots">Boots</option>
					<option value="bow">Bow</option>
					<option value="chestplate">Chest Plate</option>
					<option value="helmet">Helmet</option>
					<option value="leggings">Leggings</option>
					<option value="pickaxe">Pickaxe</option>
					<option value="shovel">Shovel</option>
					<option value="sword" selected="yes">Sword</option>
		        </select>
		        ?
		        <input type="button" id="revcalc" value="Calculate..." />
        	</div>
        </div>
        <div id="result">
    	</div>
    	<div id="otherstuff">
    		<div id="contact">Have a feature request?  <a href="http://www.twitter.com/ProtoMowsh">Tweet @ProtoMowsh</a></div>
    		<div id="gplus">
	    		<!-- Google Plus -->
				<g:plusone size="medium"></g:plusone>
    		</div>
    		<div id="twitter">
				<!-- Twitter -->
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="ProtoMowsh">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    		</div>
    		<div id="facebook">
			<!-- Facebook -->
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=239673636079825";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div class="fb-like" data-href="http://www.minecraftenchantmentcalculator.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
    		</div>
		<a href="https://twitter.com/ProtoMowsh" class="twitter-follow-button" data-show-count="false">Follow @ProtoMowsh</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    	</div>
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-27652939-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
