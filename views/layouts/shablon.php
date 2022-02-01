<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\FrontAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use app\models\Category;
use yii\helpers\Url;
FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets2/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <?php $this->head() ?>
</head>
<style type="text/css">
    
/*123*/
.alert .close {
        margin-top: 38px;
     background: none;
     height: 4px !important;
     top: 10
     border-radius:10;
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert-dismissable, .alert-dismissible {
    padding-right: 35px;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-success {
    color: #f6fdf8;
    background-color: #3fb93b;
    border-color: #c3e6cb;
}
.alert-dismissible {
    padding-right: 4rem;
}
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-top: 13px;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.alert-dismissible .close {
    position: absolute;
    top: 10;
    right: 10;
    z-index: 2;
    padding: 27px 40px 0.90rem 1.25rem !important;
    color: #222;
}
</style>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                
                <ul class="header-user-links">
                    <li>
                        <a href="<?=Url::to(['site/reg'])?>">Login or Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="<?=Url::to(['site/index'])?>">
                            <img src="assets/logo.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
      
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select"
                                            tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Chairs</option>
                                        <option value="Afghanistan">Tables</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Storage</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart vereesa-mini-cart block-header vereesa-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-vereesa="vereesa-dropdown">
                                Cart
                                <span class="count">
                                    0
                                    </span>
                            </a>
                            <div class="no-product vereesa-submenu">
                                <p class="text">
                                    You have
                                    <span>
                                             0 item(s)
                                        </span>
                                    in your bag
                                </p>
                            </div>
                        </div>
                        <div class="block-account block-header vereesa-dropdown">
                            <a href="<?=Url::to(['kabinet/index'])?>" title='Login'>
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </a>
                            
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
                        <span class="icon-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="text">Hamma Bo'limlar</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="vereesa-nav-vertical vertical-menu vereesa-clone-mobile-menu">
                            
                            <?
                            $models = Category::find()->all();
                            foreach ($models as $model) {?>
                            
                            <li class="menu-item">
                                <a href="<?=Url::to(['site/category', 'id' => $model->id])?>" class="vereesa-menu-item-title" title="New Arrivals"><?=$model->name?>
                                    (<?=count($model->tovar)?>)
                                </a>
                            </li>
                               
                            <? } ?>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="vereesa-clone-mobile-menu vereesa-nav main-menu " id="menu-main-menu">
                            <li class="menu-item ">
                                <a href="<?=Url::to(['site/index'])?>" class="vereesa-menu-item-title" title="Home">Home</a>
                                
                            </li>
                            
                            <li class="menu-item">
                                <a href="<?=Url::to(['site/about'])?>" class="vereesa-menu-item-title" title="About">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer style7">
        <div class="container">
            <div class="container-wapper">
                <div class="row">
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="widget-box">
                            <div class="single-img">
                                <a href="<?=Url::to(['site/index'])?>"><img src="assets/logo.png" alt="img"></a>
                            </div>
                            <div class="text-content-elememnt">
                                <p>
                                    Shop the latest products right from
                                    your home .
                                </p>
                                <p>We have furniture supplies & accessories from top brands.</p>
                            </div>
                        </div>
                        <div class="vereesa-socials">
                            <ul class="socials">
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="vereesa-custommenu default">
                            <h2 class="widgettitle">Links</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Lighting</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Lighting</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Gift Vouchers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="vereesa-custommenu default">
                            <h2 class="widgettitle">Information</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#">FAQs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Track Order</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Delivery</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Return</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="vereesa-newsletter style1">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                            </div>
                            <div class="newsletter-form-wrap">
                                <div class="list">
                                    Get notified of new products, limited releases, and more.
                                </div>
                                <input type="email" class="input-text email email-newsletter"
                                       placeholder="Your email letter">
                                <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 border-custom">
                        <span></span>
                    </div>
                </div>
                <div class="footer-end">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="coppyright">
                                Copyright © 2019
                                <a href="#">Vereesa</a>
                                . All rights reserved
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="vereesa-payment">
                                <img src="assets/logo.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
