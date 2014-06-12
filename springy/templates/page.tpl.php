<div id="page">
    <header>
        <div class="inner header-inner clearfix">
        <?php if ($logo): ?>
            <div id="logo">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>
        </div>
    </header>
    <nav>
        <div class="inner nav-inner clearfix">
            <?php print render($page['nav']); ?>
        </div>
    </nav>
    <section>
        <div class="inner section-inner clearfix">
            <div class="messages-area">
                <?php print $messages; ?>
            </div>
            <?php if($is_front): ?>
                <!-- Homepage regions -->
                <div id="front">
                    <article>
                        <?php print render($page['content']); ?>
                    </article>
                </div>
            <?php else: ?>
                <div id="no-front">
                    <?php if(!empty($page['aside'])): ?>
                        <article class="aside">
                            <h1><?php print $title; ?></h1>
                            <?php print render($page['content']); ?>
                        </article>
                        <aside>
                            <?php print render($page['aside']); ?>
                        </aside>
                    <?php else: ?>
                        <article>
                            <h1><?php print $title; ?></h1>
                            <?php print render($page['content']); ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <footer>
        <div class="inner footer-inner clearfix">
            <div id="footer-columns">
                <div class="footer-column footer-first"><?php print render($page['footer_first']); ?></div>
                <div class="footer-column footer-second"><?php print render($page['footer_second']); ?></div>
                <div class="footer-column footer-third"><?php print render($page['footer_third']); ?></div>
                <div class="footer-column footer-forth"><?php print render($page['footer_forth']); ?></div>
            </div>
            <div id="footer-bottom">
                <div id="credits">Drupal site by <a href="http://www.websitedevelopment.ltd.uk/" target="_blank">Website Development Ltd</a></div>
            </div>
        </div>
    </footer>
</div>