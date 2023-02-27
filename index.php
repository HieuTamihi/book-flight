<?php
require "./models/db.php";
require "./models/header.php";
require "./models/footer.php";
require "./models/section1.php";
require "./models/section2.php";
require "./models/section3.php";
require "./models/section4.php";
require "./models/section5.php";
require "./models/section6.php";
require "./models/section7.php";
require "./models/section8.php";
require "./models/section9.php";
require "./models/section10.php";
require "./models/contact_order.php";
require "./models/modal.php";
require "./models/card.php";
require "config.php";
$header = new Header;
$footer = new Footer;
$section1 = new Section1;
$section2 = new Section2;
$section3 = new Section3;
$section4 = new Section4;
$section5 = new Section5;
$section6 = new Section6;
$section7 = new Section7;
$section8 = new Section8;
$section9 = new Section9;
$section10 = new Section10;
$contact_order = new Contact_Order;
$modal = new Modal;
$card = new Card;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'tc') {
        echo "<script> alert('Đặt Mua thành công ! Sẽ có nhân viên liên hệ cho quý khách để xác nhận.'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $getTitle = $card->getTitle();
    foreach ($getTitle as $value) :
    ?>
        <<?php echo $value['type_card'] ?>><?php echo $value['content_name'] ?></<?php echo $value['type_card'] ?>>
    <?php endforeach; ?>

    <!--Meta SEO-->
    <?php $getAllCard = $card->getAllCard();
    foreach ($getAllCard as $value) :
    ?>
        <<?php echo $value['type_card'] ?> <?php echo $value['name_card_1'] ?>="<?php echo $value['content_name'] ?>" <?php echo $value['name_card_2'] ?>="<?php echo $value['content_name_2'] ?>" <?php echo $value['name_card_3'] ?>="<?php echo $value['content_name_3'] ?>" <?php echo $value['name_card_4'] ?>="<?php echo $value['content_name_4'] ?>" />
    <?php endforeach; ?>

    <!-- Libary -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./public/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/animation.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
</head>

<body>
    <div class="main-booking">
        <header>
            <div class="header-menu">
                <div class="container">
                    <nav class="nav-menu">
                        <div class="logo-header">
                            <a class="a-logo-header" href="index.php">
                                <?php
                                $getLogoHeader = $header->getLogoHeader();
                                foreach ($getLogoHeader as $value) : ?>
                                    <img src="./public/image/<?php echo $value['image_logo'] ?>" alt="">
                            </a>
                        <?php endforeach ?>
                        </div>
                        <ul class="ul-menu">
                            <?php
                            $getMenuHeader = $header->getMenuHeader();
                            foreach ($getMenuHeader as $value) : ?>
                                <li class="li-menu" style="padding: 10px 0; margin-right: 0px;"><a class="a-menu" style="padding: 10px 12px;" href="#<?php echo $value['move'] ?>"><?php echo $value['menu'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <div id="header" class="mobile-header">
            <div class="main-header-bar">
                <div class="container">
                    <div class="mobile-menu-buttons">
                        <div class="button-wrap">
                            <a href="javascript:void(0)" class="menu-toggle" rel="main-menu">
                                <img src="./public/image/menu.png" alt="menu">
                            </a>
                        </div>
                    </div>
                    <div class="header-logo">
                        <?php
                        $getLogoHeader = $header->getLogoHeader();
                        foreach ($getLogoHeader as $value) : ?>
                            <a href="index.php" class="custom-mobile-logo-link" rel="home" itemprop="url">
                                <img src="./public/image/<?php echo $value['logo_mb'] ?>" style="height:36px; width:auto" class="mobile-header-logo" alt="logo-winerp">
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="menu-header-item">
            <div class="menu-container">
                <div class="header-logo">
                    <?php
                    $getLogoHeader = $header->getLogoHeader();
                    foreach ($getLogoHeader as $value) : ?>
                        <a href="index.php" class="custom-mobile-logo-link" rel="home" itemprop="url">
                            <img src="./public/image/<?php echo $value['logo_mb'] ?>" style="height:36px; width:auto" class="mobile-header-logo" alt="logo-winerp">
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="mobile-menu-buttons1">
                    <div class="button-wrap">
                        <a href="javascript:void(0)" class="menu-toggle" rel="main-menu">
                            x
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <ul class="ul-menu-item">
                    <?php
                    $count = 1;
                    $getAllHeader = $header->getMenuHeader();
                    foreach ($getAllHeader as $value) : ?>
                        <li class="li-menu-item"><a id="a-menu-item<?php echo $count++ ?>" class="a-menu-item" href="#<?php echo $value['move'] ?>">
                                <h4><?php echo $value['menu'] ?></h4>
                            </a></li>
                    <?php endforeach ?>
                </ul>
                <div class="text-menu-item">
                    <?php
                    $getLogoHeader = $header->getLogoHeader();
                    foreach ($getLogoHeader as $value) : ?>
                        <p>
                            <?php echo str_replace(" . ", "<br>", $value['address']) ?>
                        </p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <main id="mains" class="site-main">
            <article class="home-page">
                <div class="entry-content clear">
                    <?php
                    $getAllSection1 = $section1->getAllSection1();
                    foreach ($getAllSection1 as $value) : ?>
                        <section id="Solution" class="section-slider" style="background: url('public/image/<?php echo $value['image'] ?>') no-repeat 100% 50%;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 wow bounceInRight">
                                        <div class="text-slider">
                                            <h1><?php echo $value['title'] ?></h1>
                                            <h2><?php echo $value['des'] ?></h2>
                                        </div>
                                        <div class="buttom">
                                            <a href="#Description">
                                                <h4><?php echo $value['btn_sec'] ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
                    <?php
                    $getAllSection2 = $section2->getAllSection2();
                    foreach ($getAllSection2 as $value) : ?>
                        <section id="Description" class="section-description">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4" style="background-image: url('./public/image/<?php echo $value['sub_img'] ?>') no-repeat 50%;">
                                        <img src="./public/image/<?php echo $value['image'] ?>" alt="">
                                        <h2><?php echo $value['title'] ?></h2>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4><?php echo $value['des'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
                    <?php
                    $getAllSection3 = $section3->getAllSection3();
                    foreach ($getAllSection3 as $value) : ?>
                        <section id="Personal" class="section-personal">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 aligncenter">
                                        <h3><?php echo $value['main_title'] ?></h3>
                                        <div class="hr"></div>
                                        <h5><?php echo $value['sub_title'] ?></h5>
                                        <p class="sub-title"><?php echo $value['des'] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="image">
                                            <img src="./public/image/<?php echo $value['img_col_1'] ?>" alt="">
                                        </p>
                                        <h5 class="title"><?php echo $value['title_col_1'] ?></h5>
                                        <p class="description">
                                            <?php echo $value['des_col_1'] ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="image">
                                            <img src="./public/image/<?php echo $value['img_col_2'] ?>" alt="">
                                        </p>
                                        <h5 class="title"><?php echo $value['title_col_2'] ?></h5>
                                        <p class="description">
                                            <?php echo str_replace(" . ", "<br><br>", $value['des_col_2']) ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="image">
                                            <img src="./public/image/<?php echo $value['img_col_3'] ?>" alt="">
                                        </p>
                                        <h5 class="title"><?php echo $value['title_col_3'] ?></h5>
                                        <p class="description">
                                            <?php echo str_replace(" . ", "<br><br>", $value['des_col_3']) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>

                    <section id="Feature" class="section-feature">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $getAllSection4 = $section4->getAllSection4();
                                    foreach ($getAllSection4 as $value) : ?>
                                        <h3><?php echo $value['title'] ?></h3>
                                    <?php endforeach ?>
                                    <div class="hr"></div>
                                </div>
                                <?php
                                $count = 1;
                                $getAllSection4 = $section4->getAllSection4();
                                foreach ($getAllSection4 as $value) : ?>
                                    <div class="col-sm-4">
                                        <div class="desc">
                                            <p class="image">
                                                <span>
                                                    <?php if (strlen($count) > 1) {
                                                        echo $count++;
                                                    } else {
                                                        echo "0" . $count++;
                                                    }
                                                    ?>
                                                </span>
                                            </p>
                                            <h5 class="title"><?php echo $value['sub_title'] ?></h5>
                                            <ul class="description">
                                                <?php echo str_replace(" . ", "<br><li>", $value['content']) ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </section>
                    <?php
                    $getAllSection5 = $section5->getAllSection5();
                    foreach ($getAllSection5 as $value) : ?>
                        <section id="Vision" class="section-vision">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3><?php echo $value['title'] ?></h3>
                                        <div class="hr"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="image"><img src="./public/image/<?php echo $value['image'] ?>" alt="All In One"></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content">
                                            <ul class="list-icon">
                                                <?php echo str_replace(" . ", "<br><li>", $value['content']) ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>

                    <section id="Gift" class="section-gift">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $getSection6 = $section6->getSection6();
                                    foreach ($getSection6 as $value) : ?>
                                        <h3><?php echo $value['main_title'] ?></h3>
                                        <div class="hr"></div>
                                        <h4><?php echo str_replace(" . ", "<br>", $value['des']) ?></h4>
                                    <?php endforeach ?>
                                </div>
                                <?php
                                $getAllSection6 = $section6->getAllSection6();
                                foreach ($getAllSection6 as $value) : ?>
                                    <div class="col-sm-6">
                                        <div id="AllInOne" class="box-product">
                                            <p class="image"><img src="./public/image/<?php echo $value['main_img'] ?>" alt="All In One"></p>
                                            <div class="icon"><img src="./public/image/<?php echo $value['sub_img'] ?>" alt="Đa kênh"></div>
                                            <h5 class="title"><span><?php echo $value['sub_title'] ?></span></h5>
                                            <ul>
                                                <?php echo str_replace(" . ", "<br><li>", $value['content']) ?>
                                            </ul>
                                            <p></p>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </section>

                    <section id="Price" class="section-price">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $getAllSection7 = $section7->getAllSection7();
                                    foreach ($getAllSection7 as $value) : ?>
                                        <h3><?php echo $value['main_title'] ?></h3>
                                    <?php endforeach ?>
                                    <div class="hr"></div>
                                    <?php
                                    $getAllSection7 = $section7->getAllSection7();
                                    foreach ($getAllSection7 as $value) : ?>
                                        <h4>
                                            <?php echo str_replace(" . ", "<br>", $value['des']) ?>
                                        </h4>
                                    <?php endforeach ?>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="desc long">
                                        <?php
                                        $getSec7Col1 = $section7->getSec7Col1();
                                        foreach ($getSec7Col1 as $value) : ?>
                                            <div class="title"><span><?php echo $value['sub_title'] ?></span></div>
                                            <div class="price">
                                                <h1><?php echo $value['sub_des'] ?></h1>
                                            </div>
                                            <div class="feature">
                                                <ul>
                                                    <?php echo str_replace(" . ", '<br><li><svg width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                        </svg>', $value['content']) ?>
                                                </ul>
                                            </div>
                                            <div class="action"><a class="btn btn-light" href="javascript:void(0)" data-toggle="modal" data-target="#LeadForm" style="font-weight: bold"><?php echo $value['btn_sec'] ?></a></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="desc short">
                                        <?php
                                        $getSec7Col2 = $section7->getSec7Col2();
                                        foreach ($getSec7Col2 as $value) : ?>
                                            <div class="title"><?php echo $value['sub_title'] ?></div>
                                            <div class="price">
                                                <h1><?php echo $value['sub_des'] ?></h1>
                                            </div>
                                            <div class="feature">
                                                <ul>
                                                    <?php echo str_replace(" . ", '<br><li><svg width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                        </svg>', $value['content']) ?>
                                                </ul>
                                            </div>
                                            <div class="action"><a class="btn btn-second" href="javascript:void(0)" data-toggle="modal" data-target="#LeadForm" style="font-weight: bold"><?php echo $value['btn_sec'] ?></a></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </div>
                    </section>
                    <section id="Documents" class="section-documents">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    $getAllSection8 = $section8->getAllSection8();
                                    foreach ($getAllSection8 as $value) : ?>
                                        <h3><?php echo $value['main_title'] ?></h3>
                                    <?php endforeach ?>
                                    <div class="hr"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video">
                                        <iframe width="100%" height="315" <?php
                                                                            $getAllSection8 = $section8->getAllSection8();
                                                                            foreach ($getAllSection8 as $value) : ?> src="<?php echo $value['embed_link'] ?>" <?php endforeach ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $count = 1;
                                        $id = 1;
                                        $getAllSection8 = $section8->getAllSection8();
                                        foreach ($getAllSection8 as $value) : ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a id="a-collapse<?php echo $id++ ?>" class="a-collapse"><?php echo $value['sub_title'] ?></a>
                                                    </h6>
                                                </div>
                                                <div id="collapse<?php echo $count++ ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p><?php echo $value['content'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                    $getAllSection9 = $section9->getAllSection9();
                    foreach ($getAllSection9 as $value) : ?>
                        <section id="ActionWhy" class="section-action" style="background: url(public/image/<?php echo $value['background'] ?>);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="title"><?php echo $value['title'] ?></h1>
                                        <h4 class="description"><?php echo $value['des'] ?></h4>
                                        <p class="livechat"><a href="<?php echo $value['link_btn'] ?>" target="_blank" class="btn btn-main">
                                                <img src="./public/image/chat.png" alt="livechat"><?php echo $value['btn_sec'] ?></a></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
                    <?php
                    $getAllSection10 = $section10->getAllSection10();
                    foreach ($getAllSection10 as $value) : ?>
                        <section id="Commitment" class="section-commitment">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2>
                                            <?php echo $value['main_title'] ?>
                                        </h2>
                                        <h1 style="font-weight: bold; color: #1c1b55;">
                                            <?php echo $value['sub_title'] ?>
                                        </h1>
                                        <div class="hr"></div>
                                        <h4>
                                            <?php echo str_replace(" . ", "<br>", $value['des']) ?>
                                        </h4>
                                    </div>
                                    <div style="text-align: center;">
                                        <img src="./public/image/<?php echo $value['image'] ?>" alt="">
                                    </div>
                                    <div class="description" style="text-align: center;">
                                        <ul style="list-style-type: none;">
                                            <?php echo str_replace(" . ", '<br><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                                    </path>
                                                </svg>', $value['content']) ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
                </div>
            </article>
        </main>
        <div class="box_fixRight">
            <div class="box_content">
                <?php
                $count = 1;
                $getContact1 = $contact_order->getContact1();
                foreach ($getContact1 as $value) : ?>
                    <a href="<?php echo $value['link'] ?>" target="_blank" class="item item_<?php $count++ ?>" style="background: url(public/image/<?php echo $value['image'] ?>) no-repeat right;"><?php echo $value['content'] ?></a>
                <?php endforeach ?>
            </div>
        </div>
        <div class="btn-formcrm">
            <div class="image"></div>
            <?php
            $getOrder = $contact_order->getOrder();
            foreach ($getOrder as $value) : ?>
                <div class="image1"><img src="./public/image/<?php echo $value['image'] ?>" alt=""></div>
                <a href="<?php echo $value['link'] ?>"><?php echo $value['content'] ?></a>
            <?php endforeach ?>
        </div>
        <div class="phones">
            <?php
            $count = "";
            $image = "";
            $getContact = $contact_order->getContact();
            foreach ($getContact as $value) : ?>
                <div class="phone<?php echo $count++ ?>">
                    <div class="image<?php echo $image++ ?>"><img src="./public/image/<?php echo $value['image'] ?>" alt=""></div>
                    <a href="<?php echo $value['link'] ?>">
                        <span class="text-hotline"><?php echo $value['content'] ?></span>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <div class="modal" id="FormModalATP" role="dialog" aria-hidden="false">
            <div class="modal-dialog">
                <?php
                $getModal = $modal->getModal();
                foreach ($getModal as $value) : ?>
                    <form id="FormCRMATP" action="controllers/addOrderUser.php" method="POST">
                        <div style="height: 410px;border-radius: 20px;" class="modal-content">
                            <div class="formLeft">
                                <!--<img style="width: 192px;padding: 0px;margin-left: 10%;margin-top: 21%;" src="wp-content/themes/jnews-child/img/logo-atpsoftware-white.png">-->
                                <img style="width: 192px;padding: 0px;margin-left: 10%;margin-top: 21%;" src="./public/image/<?php echo $value['logo'] ?>">
                                <img style="width: 176px;margin-left: 13%;margin-top: 6%;" src="./public/image/<?php echo $value['image'] ?>">
                            </div>
                            <div class="formRight">
                                <button type="button" class="close-modal close-crm-modal"><span aria-hidden="true">×</span></button>
                                <h4><?php echo $value['title'] ?></h4>
                                <p class="formatphone" style="font-size: 11px;margin-left: 20px;"><?php echo $value['des'] ?></p>
                                <div class="formContactNow">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-address-book"></i></span>
                                        <input class="inputContact" required="" pattern="^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+){1,}$" placeholder="<?php echo $value['input_1'] ?>" name="fullname" type="text">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-phone-alt"></i></span>
                                        <input class="inputContact" required="" pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b" placeholder="<?php echo $value['input_2'] ?>" name="phone" type="text" maxlength="10" minlength="10">
                                    </div>
                                    <div style="text-align: center; margin-top: 20px" class="form-group">
                                        <input type="hidden" id="FormCRM_nonce_field" name="FormCRM_nonce_field" value="ef7623b265"><input type="hidden" name="_wp_http_referer" value="/simple-facebook"> <input type="hidden" name="href" value="simple-facebook.html">
                                        <input type="hidden" name="ip_server" value="171.241.35.154">
                                        <input type="hidden" name="nameproduct" id="formnameproduct" value="/simple-facebook">
                                        <input type="hidden" name="idproduct" id="idproduct" value="">
                                        <input type="hidden" name="action" value="ProcessCRMATP">
                                        <button style="border-radius: 20px;background: #fa6018;border-color: #fa6018;" name="submit" type="submit" id="SubmitFormATP" class="btn btn-primary"><?php echo $value['btn_form'] ?></button>
                                    </div>
                                </div>
                                <p class="copyrightform" style="font-size: 14px;"><?php echo $value['note'] ?></p>
                            </div>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>

        <footer class="site-footer wow fadeInUp">
            <div class="footer-info hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            $getFTCol1 = $footer->getFTCol1();
                            foreach ($getFTCol1 as $value) : ?>
                                <h6 class="title"><?php echo $value['title'] ?></h6>
                                <ul style="list-style-type: none;">
                                    <li><img src="./public/image/<?php echo $value['image'] ?>" alt="" alt="local"><?php echo $value['content'] ?></li>
                                </ul>
                            <?php endforeach ?>
                        </div>
                        <div class="col-md-6">
                            <h3 class="title">&nbsp;</h3>
                            <?php
                            $getFTCol2 = $footer->getFTCol2();
                            foreach ($getFTCol2 as $value) : ?>
                                <ul style="list-style-type: none;">
                                    <li><img src="./public/image/<?php echo $value['image'] ?>" alt="website"><?php echo $value['content'] ?></li>
                                </ul>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <script src="./public/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./public/js/js.js"></script>
</body>

</html>