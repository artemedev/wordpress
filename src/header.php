<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__menu-top">
                <div class="header__menu-top-left">
                    <div class="header__basket">
                        <!-- <picture><source srcset="image/icon-basket.svg" type="image/webp"><img class="header__basket-img" src="image/icon-basket.svg" alt=""></picture> -->
                        <a href="#" class="header__basket-img">
                            <svg style="width:20px;height:19px">
                                <use xlink:href="image/asas.svg#icon-basket">
                                </use>
                            </svg>
                        </a>
                    </div>
                    <div class="header__search">
                        <input class="header__search-input" type="search" placeholder="Поиск"
                            src="image/icon-search.svg">
                    </div>
                </div>
                <a class="header__phone" href="callto:380999471923">
                    <p class="header__phone-text">
                        +38 099 947 19 23
                    </p>
                </a>
            </div>
        </div>
        <nav class="menu">
            <ul class="header__list header__menu-bg">
                <li class="header__list-item">
                    <a href="#" class="header__list-link">Категории</a>
                </li>
                <li class="header__list-item">
                    <a href="#" class="header__list-link">Продукция</a>
                </li>
                <li class="header__list-item">
                    <a href="#" class="header__list-link">Контакты</a>
                </li>
                <li class="header__list-item">
                    <a href="#" class="header__list-link">Доставка</a>
                </li>
            </ul>
        </nav>
        <div class="header__info">
            <a class="logo" href="#">
                <picture>
                    <source srcset="./image/logo.webp" type="image/webp"><img class="logo-img" src="./image/logo.png"
                        alt="">
                </picture>
            </a>
            <div class="menu__group">
                <button class="menu__search">
                    <picture>
                        <source srcset="./image/icon-search.svg" type="image/webp"><img src="./image/icon-search.svg"
                            alt="">
                    </picture>
                </button>
                <button class="menu__btn">
                    <span class="menu__btn-line"></span>
                </button>
            </div>
        </div>
    </header>