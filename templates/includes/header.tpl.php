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
                <div class="col-lg-6">
                    <a id="crest" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <img src="/<?php print path_to_theme();?>/img/nca-logo.svg" />
                    </a>
                </div>
                <div class="col-lg-6">

                        <div class="row">
                            <div id="topbar-search" role="search" class="col-lg-6">
                              <?php print $search_box; ?>
                            </div>
                            <div id="topbar-contact" class="col-lg-3">
                                <a href="/contact-us"><i class="icon-phone"></i> Contact us</a>
                            </div>
                            <div id="topbar-menu" class="col-lg-3">
                                <a href="javascript:null;" role="button">
                                    <span id="nav-toggle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </span>
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