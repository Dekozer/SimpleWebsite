<div class="uk-container uk-container-center">
    <nav class="uk-navbar uk-margin-bottom">
                    <a class="uk-navbar-brand uk-hidden-small" href="<?php echo DIR ?>"><?php echo SITETITLE ?></a>
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li class="<?php if ( $data['title'] == core\language::show('welcome_title', 'welcome')) { echo 'uk-active'; } ?>">
                            <a href="<?php echo DIR ?>"><?php echo core\language::show('welcome_title', 'welcome') ?></a>
                        </li>
                        <li class="<?php if ( $data['title'] == core\language::show('subpage_title', 'welcome')) { echo 'uk-active'; } ?>">
                            <a href="<?php echo DIR ?>subpage"><?php echo core\language::show('subpage_title', 'welcome') ?></a>
                        </li>
                    </ul>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><small><?php echo SITETITLE ?></small></div>
    </nav>

    <div id="offcanvas" class="uk-offcanvas">
                <div class="uk-offcanvas-bar">
                    <ul class="uk-nav uk-nav-offcanvas">
                        <li class="<?php if ( $data['title'] == core\language::show('welcome_title', 'welcome')) { echo 'uk-active'; } ?>">
                            <a href="<?php echo DIR ?>"><?php echo core\language::show('welcome_title', 'welcome') ?></a>
                        </li>
                        <li class="<?php if ( $data['title'] == core\language::show('subpage_title', 'welcome')) { echo 'uk-active'; } ?>">
                            <a href="<?php echo DIR ?>subpage"><?php echo core\language::show('subpage_title', 'welcome') ?></a>
                        </li>
                    </ul>
                </div>
    </div>


        <?php if (isset($success)){ echo \core\success::display($success); } ?>
        <?php if (isset($error)){ echo \core\error::display($error); } ?>
  
</div>
