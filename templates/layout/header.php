<div class="header">
    <div class="header-bottom">
        <div class="wrap-content-custom">
            <a class="logo-header shiner" href="">
                <?= $func->getImage(['sizes' => '250x50x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a> 
            <div class="header__bottom__right">
                <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
            </div>
        </div>
    </div>
</div>