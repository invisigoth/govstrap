<?php if ($skip_link_text && $skip_link_anchor): ?>
    <div id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable sr-only sr-only-focusable"><?php print $skip_link_text; ?></a>
    </div>
<?php endif; ?>
<header id="header" role="banner" class="clearfix">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header row">
                <div class="col-sm-4 col-xs-8">
                    <a id="crest" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <img src="/<?php print path_to_theme();?>/img/nca-logo.svg" />
                    </a>
                </div>
                <div class="col-sm-8 col-xs-4">

                        <div class="row">
                            <div id="topbar-search" role="search" class="col-sm-6 hidden-xs">
                              <?php print $search_box; ?>
                            </div>
                            <div id="topbar-contact" class="col-sm-3 col-xs-6">
                                <a href="/contact-us"><i class="icon-phone"></i> Contact</a>
                            </div>
                            <div id="topbar-menu" class="col-sm-3 col-xs-6">
                                <a id="nav-toggle" role="button" href="#">
                                    <i class="icon-menu"></i>
                                    <span class="sr-only">Toggle </span>
                                    <span>Menu</span>
                                </a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </nav>
</header>