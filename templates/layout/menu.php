<div class="menu">
    <div class="wrap-content">
        <ul class="menu-main">
            <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><i class="fa-solid fa-house"></i></a></li>
            <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
            <li>
                <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham" title="<?= sanpham ?>"><?= sanpham ?></a>
                <?=$func->formenu('product','san-pham');?>
            </li>
            <li>
                <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?= tintuc ?>"><?= tintuc ?></a>
                <?php // echo $func->formenu('news','tin-tuc');?>
            </li>
            <li><a class="<?php if ($com == 'tuyen-dung') echo 'active'; ?> transition" href="tuyen-dung" title="<?= tuyendung ?>"><?= tuyendung ?></a></li>
            <li><a class="<?php if ($com == 'thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh" title="<?= thuvienanh ?>"><?= thuvienanh ?></a></li>
            <li><a class="<?php if ($com == 'video') echo 'active'; ?> transition" href="video" title="Video">Video</a></li>
            <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
        </ul>
    </div>
</div>