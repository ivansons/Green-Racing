<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">
    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="mobile">
        <a href=""><img class="mobile-logo" src="<?php print base_path() . path_to_theme(); ?>/images/green-racing-logo.png" width="252" height="109" alt="green racing sustainable eco friendly technology" /></a>
        <div id="st-trigger-effects" class="column st-pusher">
            <button data-effect="st-effect-3"><img src="<?php print base_path() . path_to_theme(); ?>/images/nav-menu-btn.png" width="35" height="42" alt="green eco-friendly racing engines" /></button>
        </div>
    </div>
    <div id="st-container" class="st-container st-effect-3 main-wrap clearfix">
        <header class="header" id="header" role="banner">
            <nav id="main-menu" class="main-wrap" role="navigation" tabindex="-1">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
            <?php endif; ?>
          
            
                  <?php
                  // This code snippet is hard to modify. We recommend turning off the
                  // "Main menu" on your sub-theme's settings form, deleting this PHP
                  // code block, and, instead, using the "Menu block" module.
                  // @see https://drupal.org/project/menu_block
                  print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                      'class' => array('nav-links', 'clearfix'),
                    )
                  )); ?>
            </nav>
        </header>
        <div class="st-pusher">
            <div id="main">
    
                <div id="content" class="column" role="main">
                  <?php print render($page['highlighted']); ?>
                  <a id="main-content"></a>
                  <?php print render($title_prefix); ?>
                  <?php if ($title): ?>
                    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                  <?php endif; ?>
                  <?php print render($title_suffix); ?>
                  <?php print $messages; ?>
                  <?php print render($tabs); ?>
                  <?php print render($page['help']); ?>
                  <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                  <?php endif; ?>
                  <?php print render($page['content']); ?>
                  <?php print $feed_icons; ?>
                </div>
            
                <?php
                  // Render the sidebars to see if there's anything in them.
                  $sidebar_first  = render($page['sidebar_first']);
                  $sidebar_second = render($page['sidebar_second']);
                ?>
            
                <?php if ($sidebar_first || $sidebar_second): ?>
                  <aside class="sidebars">
                    <?php print $sidebar_first; ?>
                    <?php print $sidebar_second; ?>
                  </aside>
                <?php endif; ?>
            
              </div>
            
              <?php print render($page['footer']); ?>
            
            </div>
            
            <?php print render($page['bottom']); ?>
            
 