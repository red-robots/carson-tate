<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/svo2src.css">
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script> 

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/site.webmanifest">

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '236370623380911');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=236370623380911&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<script>!function(e,t,n,s,a,c,p,i,o,u){e[a]||((i=e[a]=function(){i.process?i.process.apply(i,arguments):i.queue.push(arguments)}).queue=[],i.pixelId="cbd42ac9-c947-41a0-a340-cc2163106c8c",i.t=1*new Date,(o=t.createElement(n)).async=1,o.src="https://found.ee/dmp/pixel.js?t="+864e5*Math.ceil(new Date/864e5),(u=t.getElementsByTagName(n)[0]).parentNode.insertBefore(o,u))}(window,document,"script",0,"foundee");foundee('', 'Y');</script>               
<?php wp_head(); ?>
</head>

<body <?php body_class('loading'); ?>>
<div id="overlay"></div>
<div id="popup-content"></div>
<div id="loading">
  <div class="loading-bar"><div class="loading-bar-progress"></div></div>
</div>

<div id="page" class="site cf">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>	
  <header id="masthead" class="site-header" role="banner">
		<div class="wrapper header-flex">
      <?php
        $linkedin = get_field('linkedin_url', 'option');
        $email_address = get_field('email_address', 'option');

        if($linkedin || $email_address): ?>
          <div class="header-socials">
            <div class="header-socials-list">
              <?php if($linkedin): ?>
                <a href="<?php echo $linkedin; ?>" target="_blank" class="social-icon">
                  <span>
                    LI
                  </span>
                </a>
              <?php endif; ?>
              <?php if($email_address): ?>
                <a href="<?php echo anti_email_spam($email_address); ?>" target="_blank" class="social-icon">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                      <path d="M16.3923 1.3809C16.5011 1.38105 16.6078 1.41087 16.7008 1.46716C16.7939 1.52345 16.8699 1.60407 16.9206 1.70033C16.967 1.78576 16.991 1.88159 16.9902 1.97882V11.0213C16.9902 11.1799 16.9272 11.3319 16.8151 11.4441C16.7029 11.5562 16.5509 11.6192 16.3923 11.6192H1.20684C1.04827 11.6192 0.896183 11.5562 0.784052 11.4441C0.671921 11.3319 0.608926 11.1799 0.608926 11.0213V1.97882C0.608144 1.88159 0.632102 1.78576 0.678547 1.70033C0.729215 1.60407 0.805186 1.52345 0.898279 1.46716C0.991371 1.41087 1.09806 1.38105 1.20684 1.3809H16.3923ZM16.3923 0.766602H1.20684C0.885344 0.766602 0.577012 0.894317 0.349678 1.12165C0.122344 1.34899 -0.00537109 1.65732 -0.00537109 1.97882V11.0213C-0.00482967 11.3426 0.123059 11.6506 0.350276 11.8778C0.577493 12.1051 0.88551 12.2329 1.20684 12.2335H16.3923C16.7136 12.2329 17.0216 12.1051 17.2488 11.8778C17.4761 11.6506 17.604 11.3426 17.6045 11.0213V1.97882C17.6045 1.65732 17.4768 1.34899 17.2494 1.12165C17.0221 0.894317 16.7138 0.766602 16.3923 0.766602Z" fill="#2F3030"></path>
                      <path d="M16.3921 1.3809C16.4299 1.38117 16.4675 1.38459 16.5047 1.39114L9.63074 6.89115C9.39412 7.07936 9.1007 7.18182 8.79836 7.18182C8.49602 7.18182 8.20261 7.07936 7.96599 6.89115L1.09405 1.39114C1.13124 1.38459 1.16891 1.38117 1.20667 1.3809H16.3921ZM16.3921 0.766602H1.20667C0.986497 0.767121 0.770596 0.827392 0.581993 0.940987C0.393389 1.05458 0.239155 1.21724 0.135742 1.41161L7.58308 7.3703C7.92849 7.64609 8.35738 7.79631 8.79939 7.79631C9.2414 7.79631 9.67028 7.64609 10.0157 7.3703L17.463 1.41161C17.3596 1.21724 17.2054 1.05458 17.0168 0.940987C16.8282 0.827392 16.6123 0.767121 16.3921 0.766602Z" fill="#2F3030"></path>
                      <path d="M0.823915 12.1453C0.749244 12.1469 0.676509 12.1214 0.61915 12.0736C0.588039 12.0479 0.562332 12.0163 0.543516 11.9806C0.5247 11.9449 0.513149 11.9059 0.50953 11.8657C0.505912 11.8255 0.510299 11.785 0.522437 11.7465C0.534575 11.7081 0.554223 11.6724 0.580244 11.6415L5.6871 5.52109C5.71213 5.48778 5.74367 5.45991 5.7798 5.43918C5.81594 5.41844 5.85591 5.40528 5.89729 5.40048C5.93868 5.39568 5.9806 5.39935 6.02052 5.41127C6.06044 5.42319 6.09752 5.4431 6.1295 5.4698C6.16148 5.49649 6.1877 5.52942 6.20655 5.56657C6.22541 5.60371 6.23651 5.64431 6.23918 5.68588C6.24185 5.72746 6.23604 5.76914 6.2221 5.8084C6.20815 5.84765 6.18637 5.88366 6.15807 5.91424L1.0594 12.0285C1.03103 12.064 0.995258 12.0928 0.95458 12.113C0.913901 12.1331 0.869303 12.1442 0.823915 12.1453Z" fill="#2F3030"></path>
                      <path d="M16.7855 12.1453C16.7384 12.1457 16.6918 12.1354 16.6492 12.1152C16.6067 12.0949 16.5692 12.0653 16.5398 12.0285L11.4411 5.91424C11.4128 5.88366 11.391 5.84765 11.3771 5.8084C11.3631 5.76914 11.3573 5.72746 11.36 5.68588C11.3627 5.64431 11.3738 5.60371 11.3926 5.56657C11.4115 5.52942 11.4377 5.49649 11.4697 5.4698C11.5017 5.4431 11.5387 5.42319 11.5787 5.41127C11.6186 5.39935 11.6605 5.39568 11.7019 5.40048C11.7433 5.40528 11.7833 5.41844 11.8194 5.43918C11.8555 5.45991 11.8871 5.48778 11.9121 5.52109L17.0108 11.6415C17.0368 11.6724 17.0564 11.7081 17.0686 11.7465C17.0807 11.785 17.0851 11.8255 17.0815 11.8657C17.0779 11.9059 17.0663 11.9449 17.0475 11.9806C17.0287 12.0163 17.003 12.0479 16.9718 12.0736C16.9194 12.1174 16.8538 12.1426 16.7855 12.1453Z" fill="#2F3030"></path>
                    </svg>
                  </span>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      <div id="site-logo" class="logo logo-center">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.svg">
        </a>
      </div>
      <nav id="site-navigation" class="main-navigation desktop-navigation full-width-dropdown" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class'=>'primary-menu-wrap','link_before'=>'<span><b>','link_after'=>'</b></span>' ) ); ?>
      </nav>
		</div><!-- wrapper -->
	</header><!-- #masthead -->

  <span id="mobile-menu-toggle" class="main-menu"><span class="bar"><span></span></span></span>
  <div class="mobile-navigation navigation-forall">
    <?php
      $cta = get_field('call_to_action', 'option');
      $cta_text = (isset($cta['title']) && $cta['title']) ? $cta['title'] : '';
      $cta_link = (isset($cta['url']) && $cta['url']) ? $cta['url'] : '';
      $cta_target = (isset($cta['target']) && $cta['target']) ? $cta['target'] : '_self';

      if($cta && $cta_text && $cta_link) {
    ?>
      <a href="<?php echo $cta_link; ?>" class="menu-action" target="<?php echo $cta_target; ?>">
        <div class="text-wrapper">
          <div class="rotate-text">
            <div class="text-regular"><?php echo $cta_text; ?></div>
          </div>
          <div class="rotate-text bottom-text">
            <div class="text-regular text-color-linen"><?php echo $cta_text; ?></div>
          </div>
        </div>
        <div class="icon-wrapper">
          <div class="clip-content">
            <div class="rotate-icon left">
              <img src="https://cdn.prod.website-files.com/66b783bbd93570bf23d7b6d2/66b783bbd93570bf23d7b73b_Arrow%20Right%20Dark.svg" alt="" class="icon-tiny">
            </div>
            <div class="rotate-icon">
              <img src="https://cdn.prod.website-files.com/66b783bbd93570bf23d7b6d2/66b783bbd93570bf23d7b73b_Arrow%20Right%20Dark.svg" alt="" class="icon-tiny">
            </div>
          </div>
        </div>
      </a>
    <?php } ?>

  </div>

	<div id="content" class="site-content">
