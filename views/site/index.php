<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Asosiy saxifa';
?>

<div class="header-device-mobile">
        <div class="wapper">
            <div class="item mobile-logo">
                <div class="logo">
                    <a href="#">
                        <img src="assets2/images/logo.png" alt="img">
                    </a>
                </div>
            </div>
            <div class="item item mobile-search-box has-sub">
                <a href="#">
                        <span class="icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                </a>
                <div class="block-sub">
                    <a href="#" class="close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <div class="header-searchform-box">
                        <form class="header-searchform">
                            <div class="searchform-wrap">
                                <input type="text" class="search-input" placeholder="Enter keywords to search...">
                                <input type="submit" class="submit button" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item mobile-settings-box has-sub">
                <a href="#">
                        <span class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </span>
                </a>
                <div class="block-sub">
                    <a href="#" class="close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <div class="block-sub-item">
                        <h5 class="block-item-title">Currency</h5>
                        <form class="currency-form vereesa-language">
                            <ul class="vereesa-language-wrap">
                                <li class="active">
                                    <a href="#">
                                            <span>
                                                English (USD)
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <span>
                                                French (EUR)
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                            <span>
                                                Japanese (JPY)
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item menu-bar">
                <a class=" mobile-navigation  menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content main-content-product no-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="trail-item trail-end active">
                                Grid Products
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">
                            Grid Products
                        </h3>
                        
                        <ul class="row list-products auto-clear equal-container product-grid">
                    <? foreach ($models as $model) {?>
                            <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                <div class="product-inner equal-element">
                                    <div class="product-top">
                                        <div class="flash">
                                            <span class="onnew">
                                                <span class="text">
                                                    new
                                                </span>
                                            </span>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="<?=Url::to(['site/page','id' => $model->id])?>">
                                                <img src="<?=$model->img?>" alt="img" height='200'>

                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="<?=Url::to(['site/page','id' => $model->id])?>"><?=$model->name?></a>
                                        </h5>
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star">
                                                    (<?=$model->soni?>)
                                                </div>
                                            </div>
                                            <div class="price">
                                                <? if (empty($model->skidka)) {?>
                                                    <ins>
                                                    <?=$model->narx?> $
                                                    </ins>
                                                    <?}else{?>
                                                        <del>
                                                    <?=$model->narx?> $
                                                    </del>
                                                    <ins>
                                                    <?=$model->skidka?> $
                                                    </ins>
                                                    <?}?>
                                                
                                            </div>
                                        </div>
                                        <div class="single_variation_wrap">
                                            <br>
                                            
                                            <a href="<?=Url::to(['site/page','id' => $model->id])?>"><button class="single_add_to_cart_button button">Sobibolish</button></a>
                                        </div>
                                    </div>
                                    <!-- forma -->
                                    <div class="loop-form-add-to-cart">
                                                
                                                <a href="<?=Url::to(['site/page','id' => $model->id])?>" class="single_add_to_cart_button button">Sotibolish</a>
                                            </div>
                                    <!-- forma -->
                                </div>
                            </li>


                         <? } ?>
                        </ul>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>




