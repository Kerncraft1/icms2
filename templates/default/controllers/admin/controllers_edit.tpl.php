<h1>
    <?php echo LANG_CP_SECTION_CONTROLLERS; ?>:
    <span>
        <?php echo $controller_title; ?>
        <?php if($ctype){ ?>
            @ <a href="<?php echo $this->href_to('ctypes', array('edit', $ctype['id'])); ?>"><?php echo $ctype['title']; ?></a>
        <?php } ?>
        <?php if ($this->hasPageH1()){ ?>
            / <?php $this->pageH1(); ?>
        <?php } ?>
    </span>
</h1>

<?php if (!$is_backend){ ?>
    <p><?php echo sprintf(LANG_CP_ERR_BACKEND_NOT_FOUND, $controller_title); ?></p>
<?php } ?>

<?php if ($is_backend){ ?>

    <?php if (isset($this->menus['backend'])){ ?>
        <div class="pills-menu">
            <?php $this->menu('backend'); ?>
        </div>
    <?php } ?>

    <?php echo $html; ?>

<?php }
