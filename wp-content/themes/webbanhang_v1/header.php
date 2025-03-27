<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <?php wp_head(); ?>
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/iconsax-font-icon@1.1.0/dist/icons.min.css"> -->
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="container-fluid d-flex shop-info-general">
                <div class="container d-flex align-items-center">
                    <!-- <div class="row"> -->
                        <span class="fs-16 color-text-default">Hệ thống cửa hàng</span>
                        <select class="form-select location-selected" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="ms-auto">
                            <span>Thời gian làm việc </span>
                            <span class="fs-16"> 8h - 19h30 </span>
                            <span> từ </span>
                            <span class="fs-16"> T2 - CN </span>
                            <span class="shop-info-general-phone ms-3 fs-16"> 0983923928 </span>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="container mt-2">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img class="img-fluid logo-shop me-auto" src="https://cdn1364.cdn-template-4s.com/media/logo/logo4s.png" alt="logo">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <input type="text" class="form-control input-search" placeholder="Bạn đang cần tìm mua gì?">
                        <button type="button" class="btn btn-search ms-2">Tìm kiếm</button>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <span>Đăng nhập</span>
                        <button type="button" class="btn btn-register ms-2">Đăng ký</button>
                        <span class="position-relative">
                            <img class="img-fluid ms-3" src="https://thucpham01.themeweb4s.com/templates/fashion02/assets/media/icon/icon-cart.png" alt="icon">
                            <span class="items-number-card position-absolute fs-11">0</span>
                        </span>
                        <span class="ms-2">Giỏ hàng</span>
                    </div>
                </div>
            </div>