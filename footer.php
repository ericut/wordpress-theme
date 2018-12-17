		<?php 
			wp_footer(); 
			$wp_theme_url = get_template_directory_uri();
			$wp_theme_logic = get_template_directory();
		?>

		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/popper.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/mdb.min.js"></script>
		
		<script type="text/javascript">new WOW().init();</script>
		
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/typed.min.js"></script>

		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/particles/particles.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/particles/particlesjson.min.js"></script>

		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/custom.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/mouseparallax.min.js"></script>
		
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/scrollmagic/lib/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/scrollmagic/ScrollMagic.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/scrollmagic/plugins/animation.gsap.min.js"></script>
		<script type="text/javascript" src="<?= $wp_theme_url; ?>/js/parallax.min.js"></script>

		<script>
			(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
				w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
				m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://mkt.gsgroup.com.br/mtc.js','mt');
			mt('send', 'pageview');
		</script>
		
	</body>

</html>