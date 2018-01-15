<?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable sr-only sr-only-focusable"><?php print $skip_link_text; ?></a>
    </p>
<?php endif; ?>
<header id="header" role="banner" class="clearfix">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a id="crest" class="navbar-brand" href="<?php print $front_page; ?>"
                   title="<?php print t('Home'); ?>"
                   rel="home"><?php print $site_name; ?></a>
                <div class="nav navbar-nav navbar-right">
                    <div id="topbar-search" role="search">
                      <?php print $search_box; ?>
                    </div>
                    <div class="topbar-contact">
                        <a href="#">Contact us</a>
                    </div>
                    <div id="nav-toggle">
                        <a href="javascript:null;" role="button">
                            <span class="sr-only">Toggle </span>
                            <span>Menu</span>
                            <i></i>
                            <i></i>
                            <i></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>