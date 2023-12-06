<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bundle.elements.css">
    <link rel="stylesheet" href="./css/media.css">
    <script defer src="./js/index.js"></script>
    <title>Архив тестов</title>
</head>
<body>
    <div class="account-layout">
        
<header class="header-mobile fixed-top bg-white border-0">
    <div class="container-fluid">
        <div class="header-mobile-content p-0 d-flex justify-content-between align-items-center">
            <div class="logo d-flex align-items-center">
                <div class="logo-img">
                    <img src="images/logo-icon.svg" alt="logo">
                </div>
                <h2 class="logo-label">
                    Test System
                </h2>
            </div>
            <button class="menu-button" id="mobileMenuButton">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
            </button>
        </div>
        <div class="menu" id="mobileMenuList">
            <nav class="navigation">
                <h4 class="navigation-title h4">
                    Меню
                </h4>
                <div class="navigation-list">
                                            <a
                            id="nav-link-1"
                            href="/my-profile.html"
                            class="btn p-0 text-reset nav-link mb-6"
                        >
                            <img
                                src="./images/nav-icon-profile.svg"
                                alt="profile navigation icon"
                            >
                            <span>
                                Мой профиль                            </span>
                        </a>
                                            <a
                            id="nav-link-2"
                            href="/my-tests.html"
                            class="btn p-0 text-reset nav-link mb-6"
                        >
                            <img
                                src="./images/nav-icon-tests.svg"
                                alt="test navigation icon"
                            >
                            <span>
                                Мои тесты                            </span>
                        </a>
                                            <a
                            id="nav-link-3"
                            href="/archive-tests.html"
                            class="btn p-0 text-reset nav-link mb-6"
                        >
                            <img
                                src="./images/nav-icon-archive.svg"
                                alt="archive navigation icon"
                            >
                            <span>
                                Архив теста                            </span>
                        </a>
                                    </div>
                <div class="navigation-footer">
                    <div class="support d-flex align-items-center justify-content-start w-100">
                        <div class="support-icon">
                            <img src="images/support-icon.svg" alt="support">
                        </div>
                        <div class="support-text small-text w-100">
                            Если у вас возникли вопросы, обратитесь в
                            <a href="#">
                                техподдержку
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
        <div class="container-fluid d-flex">
            
<div class="navigation-panel" id="navigationPanel">
    <div class="top">
        <div class="logo d-flex align-items-center">
            <div class="logo-img mr-2">
                <img src="images/logo-icon.svg" alt="logo">
            </div>
            <h2 class="logo-label">
                Test System
            </h2>
        </div>
        <nav class="nav d-flex flex-column justify-content-center align-items-start">
                        <a
                id="nav-link-1"
                href="/my-profile.html"
                class="btn p-0 text-reset nav-link"
            >
                <img
                    src="./images/nav-icon-profile.svg"
                    alt="profile navigation icon"
                >
                <span>
                    Мой профиль                </span>
            </a>
                        <a
                id="nav-link-2"
                href="/my-tests.html"
                class="btn p-0 text-reset nav-link"
            >
                <img
                    src="./images/nav-icon-tests.svg"
                    alt="test navigation icon"
                >
                <span>
                    Мои тесты                </span>
            </a>
                        <a
                id="nav-link-3"
                href="/archive-tests.html"
                class="btn p-0 text-reset nav-link"
            >
                <img
                    src="./images/nav-icon-archive.svg"
                    alt="archive navigation icon"
                >
                <span>
                    Архив теста                </span>
            </a>
                    </nav>
    </div>
    <div class="bottom">
        <div class="logout">
            <button class="btn logout-btn outlined-primary outlined-btn large-btn">
                Выйти
            </button>
        </div>
        <div class="support d-flex align-items-center justify-content-start w-100">
            <div class="support-icon">
                <img src="images/support-icon.svg" alt="support">
            </div>
            <div class="support-text small-text w-100 letter-spacing-0.2">
                Если у вас возникли вопросы, обратитесь в
                <a href="#">
                    техподдержку
                </a>
            </div>
        </div>
    </div>
</div>
            <div class="account-layout-content w-100 bg-white" id="contentSide">
                <button class="toggle-nav-btn bg-white" id="toggleMenuButton">
                    <img src="./images/nav-toggle-icon.svg" alt="toggle navigation button">
                </button>
                
<div class="archive-tests-page">
    <h4 class="h4">
        Архив теста
    </h4>
    <div class="archive-tests-list">
        <!-- Рендер карточки с информацией о тесте, внутри рендерится модальное с информацией о тесте -->
                                                                                                
<div class="test card d-flex flex-row align-items-center bg-blue-100 mr-auto">
    <div class="card-body d-flex justify-content-between">
        <div class="card-left d-flex flex-column justify-between">
            <div class="card-left__top d-flex align-items-top">
                <div class="text-orange-500 test-status">
                    <img src="./images/test-status-warning.svg" alt="Test status">
                    <span>
                        Тест не завершен
                    </span>
                </div>
                <div class="test-score text-slate-500">
                    3 балла.
                </div>
            </div>
            <div class="card-left__middle d-flex">
                <h5 class="h5 card-title">
                    Наименование теста 4                </h5>
                <span class="test-type card-text text-slate-500">
                    Тип теста                </span>
            </div>
            <div class="card-left__bottom  d-flex">
                <div class="test-period card-text text-slate-500 d-flex align-items-center">
                    <img src="images/test-period-date.svg"  alt="Period test">
                    <span class="card-text">
                     с 10.11.22  до 10.01.23
                </span>
                </div>
                <div class="test-timer card-text d-flex align-items-center text-slate-500">
                    <img src="images/test-time.svg" alt="Timer">
                    <span class="card-text">
                        15 мин.                    </span>
                </div>
            </div>
        </div>
        <div class="card-right d-flex">
            <h6 class="h6">
                1/3 попыток
            </h6>
            <button
                class="btn btn-primary btn-standart"
                data-toggle="modal"
                data-target="#infoDialog-4"
            >
                Продолжить
            </button>
        </div>
    </div>
</div>


<div
    id="infoDialog-4"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="answerDialogLabel"
    aria-hidden="true"
>
    <!-- Вариант модалки на начала тестирования -->
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
            <div class="modal-content start-test p-6">
                <div class="modal-header info d-flex flex-column border-0 p-0 mb-6">
                    <div class="info-top w-100 d-flex flex-column align-items-end justify-content-between">
                        <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="h4 modal-title w-100 text-black-color mb-2" id="staticBackdropLabel">
                             Наименование теста 4                        </h4>
                    </div>
                    <div class="info-bottom d-flex align-items-center justify-content-between text-slate-500">
                        <div class="info-timer d-flex align-items-center">
                            <img src="images/test-time.svg" alt="Timer icon" class="mr-2">
                            <span class="text-center">15 мин.</span>
                        </div>
                        <div class="info-question">
                            20 вопросов
                        </div>
                    </div>
                </div>
                <div class="modal-body large-text text-slate-500 p-0 mb-8">
                    4 Тест Холланда - крайне популярный тест на профориентацию от известного профессора из США. Широко известен и часто используется как в России, так и других странах. Определяет 6 профессионально-ориентированных типов личности. Подходит для школьников, выпускников и взрослых людей.                </div>
                <div class="modal-footer align-items-end justify-content-start border-0 p-0">
                    <a href="test-page.html?with-timer-test-4" type="button" class="btn btn-primary btn-md">
                        Пройти с таймером
                    </a>
                    <a href="test-page.html?without-timer-test-4" type="button" class="btn btn-primary btn-md">
                        Пройти без таймера
                    </a>
                </div>
            </div>
        </div>
    </div>                                                                    
<div class="test card d-flex flex-row align-items-center bg-blue-100 mr-auto">
    <div class="card-body d-flex justify-content-between">
        <div class="card-left d-flex flex-column justify-between">
            <div class="card-left__top d-flex align-items-top">
                <div class="text-green-500 test-status">
                    <img src="./images/test-status-success.svg" alt="Test status">
                    <span>
                        Тест пройден
                    </span>
                </div>
                <div class="test-score text-slate-500">
                    3 балла.
                </div>
            </div>
            <div class="card-left__middle d-flex">
                <h5 class="h5 card-title">
                    Наименование теста 6                </h5>
                <span class="test-type card-text text-slate-500">
                    Тип теста                </span>
            </div>
            <div class="card-left__bottom  d-flex">
                <div class="test-period card-text text-slate-500 d-flex align-items-center">
                    <img src="images/test-period-date.svg"  alt="Period test">
                    <span class="card-text">
                     с 10.11.22  до 10.01.23
                </span>
                </div>
                <div class="test-timer card-text d-flex align-items-center text-slate-500">
                    <img src="images/test-time.svg" alt="Timer">
                    <span class="card-text">
                        15 мин.                    </span>
                </div>
            </div>
        </div>
        <div class="card-right d-flex">
            <h6 class="h6">
                1/3 попыток
            </h6>
            <button
                class="btn btn-primary btn-standart"
                data-toggle="modal"
                data-target="#infoDialog-6"
            >
                Пройти повторно
            </button>
        </div>
    </div>
</div>


<div
    id="infoDialog-6"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="answerDialogLabel"
    aria-hidden="true"
>
    <!-- Вариант модалки на начала тестирования -->
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
            <div class="modal-content start-test p-6">
                <div class="modal-header info d-flex flex-column border-0 p-0 mb-6">
                    <div class="info-top w-100 d-flex flex-column align-items-end justify-content-between">
                        <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="h4 modal-title w-100 text-black-color mb-2" id="staticBackdropLabel">
                             Наименование теста 6                        </h4>
                    </div>
                    <div class="info-bottom d-flex align-items-center justify-content-between text-slate-500">
                        <div class="info-timer d-flex align-items-center">
                            <img src="images/test-time.svg" alt="Timer icon" class="mr-2">
                            <span class="text-center">15 мин.</span>
                        </div>
                        <div class="info-question">
                            20 вопросов
                        </div>
                    </div>
                </div>
                <div class="modal-body large-text text-slate-500 p-0 mb-8">
                    6 Тест Холланда - крайне популярный тест на профориентацию от известного профессора из США. Широко известен и часто используется как в России, так и других странах. Определяет 6 профессионально-ориентированных типов личности. Подходит для школьников, выпускников и взрослых людей.                </div>
                <div class="modal-footer align-items-end justify-content-start border-0 p-0">
                    <a href="test-page.html?with-timer-test-6" type="button" class="btn btn-primary btn-md">
                        Пройти с таймером
                    </a>
                    <a href="test-page.html?without-timer-test-6" type="button" class="btn btn-primary btn-md">
                        Пройти без таймера
                    </a>
                </div>
            </div>
        </div>
    </div>                                                
<div class="test card d-flex flex-row align-items-center bg-blue-100 mr-auto">
    <div class="card-body d-flex justify-content-between">
        <div class="card-left d-flex flex-column justify-between">
            <div class="card-left__top d-flex align-items-top">
                <div class="text-green-500 test-status">
                    <img src="./images/test-status-success.svg" alt="Test status">
                    <span>
                        Тест пройден
                    </span>
                </div>
                <div class="test-score text-slate-500">
                    3 балла.
                </div>
            </div>
            <div class="card-left__middle d-flex">
                <h5 class="h5 card-title">
                    Наименование теста 7                </h5>
                <span class="test-type card-text text-slate-500">
                    Тип теста                </span>
            </div>
            <div class="card-left__bottom  d-flex">
                <div class="test-period card-text text-slate-500 d-flex align-items-center">
                    <img src="images/test-period-date.svg"  alt="Period test">
                    <span class="card-text">
                     с 10.11.22  до 10.01.23
                </span>
                </div>
                <div class="test-timer card-text d-flex align-items-center text-slate-500">
                    <img src="images/test-time.svg" alt="Timer">
                    <span class="card-text">
                        15 мин.                    </span>
                </div>
            </div>
        </div>
        <div class="card-right d-flex">
            <h6 class="h6">
                1/3 попыток
            </h6>
            <button
                class="btn btn-primary btn-standart"
                data-toggle="modal"
                data-target="#infoDialog-7"
            >
                Пройти повторно
            </button>
        </div>
    </div>
</div>


<div
    id="infoDialog-7"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="answerDialogLabel"
    aria-hidden="true"
>
    <!-- Вариант модалки на начала тестирования -->
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
            <div class="modal-content start-test p-6">
                <div class="modal-header info d-flex flex-column border-0 p-0 mb-6">
                    <div class="info-top w-100 d-flex flex-column align-items-end justify-content-between">
                        <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="h4 modal-title w-100 text-black-color mb-2" id="staticBackdropLabel">
                             Наименование теста 7                        </h4>
                    </div>
                    <div class="info-bottom d-flex align-items-center justify-content-between text-slate-500">
                        <div class="info-timer d-flex align-items-center">
                            <img src="images/test-time.svg" alt="Timer icon" class="mr-2">
                            <span class="text-center">15 мин.</span>
                        </div>
                        <div class="info-question">
                            20 вопросов
                        </div>
                    </div>
                </div>
                <div class="modal-body large-text text-slate-500 p-0 mb-8">
                    7 Тест Холланда - крайне популярный тест на профориентацию от известного профессора из США. Широко известен и часто используется как в России, так и других странах. Определяет 6 профессионально-ориентированных типов личности. Подходит для школьников, выпускников и взрослых людей.                </div>
                <div class="modal-footer align-items-end justify-content-start border-0 p-0">
                    <a href="test-page.html?with-timer-test-7" type="button" class="btn btn-primary btn-md">
                        Пройти с таймером
                    </a>
                    <a href="test-page.html?without-timer-test-7" type="button" class="btn btn-primary btn-md">
                        Пройти без таймера
                    </a>
                </div>
            </div>
        </div>
    </div>                                                
<div class="test card d-flex flex-row align-items-center bg-blue-100 mr-auto">
    <div class="card-body d-flex justify-content-between">
        <div class="card-left d-flex flex-column justify-between">
            <div class="card-left__top d-flex align-items-top">
                <div class="text-light-red-500 test-status">
                    <img src="./images/test-status-error.svg" alt="Test status">
                    <span>
                        Тест не пройден
                    </span>
                </div>
                <div class="test-score text-slate-500">
                    3 балла.
                </div>
            </div>
            <div class="card-left__middle d-flex">
                <h5 class="h5 card-title">
                    Наименование теста 8                </h5>
                <span class="test-type card-text text-slate-500">
                    Тип теста                </span>
            </div>
            <div class="card-left__bottom  d-flex">
                <div class="test-period card-text text-slate-500 d-flex align-items-center">
                    <img src="images/test-period-date.svg"  alt="Period test">
                    <span class="card-text">
                     с 10.11.22  до 10.01.23
                </span>
                </div>
                <div class="test-timer card-text d-flex align-items-center text-slate-500">
                    <img src="images/test-time.svg" alt="Timer">
                    <span class="card-text">
                        15 мин.                    </span>
                </div>
            </div>
        </div>
        <div class="card-right d-flex">
            <h6 class="h6">
                1/3 попыток
            </h6>
            <button
                class="btn btn-primary btn-standart"
                data-toggle="modal"
                data-target="#infoDialog-8"
            >
                Пройти повторно
            </button>
        </div>
    </div>
</div>


<div
    id="infoDialog-8"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="answerDialogLabel"
    aria-hidden="true"
>
    <!-- Вариант модалки на начала тестирования -->
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
            <div class="modal-content start-test p-6">
                <div class="modal-header info d-flex flex-column border-0 p-0 mb-6">
                    <div class="info-top w-100 d-flex flex-column align-items-end justify-content-between">
                        <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="h4 modal-title w-100 text-black-color mb-2" id="staticBackdropLabel">
                             Наименование теста 8                        </h4>
                    </div>
                    <div class="info-bottom d-flex align-items-center justify-content-between text-slate-500">
                        <div class="info-timer d-flex align-items-center">
                            <img src="images/test-time.svg" alt="Timer icon" class="mr-2">
                            <span class="text-center">15 мин.</span>
                        </div>
                        <div class="info-question">
                            20 вопросов
                        </div>
                    </div>
                </div>
                <div class="modal-body large-text text-slate-500 p-0 mb-8">
                    8 Тест Холланда - крайне популярный тест на профориентацию от известного профессора из США. Широко известен и часто используется как в России, так и других странах. Определяет 6 профессионально-ориентированных типов личности. Подходит для школьников, выпускников и взрослых людей.                </div>
                <div class="modal-footer align-items-end justify-content-start border-0 p-0">
                    <a href="test-page.html?with-timer-test-8" type="button" class="btn btn-primary btn-md">
                        Пройти с таймером
                    </a>
                    <a href="test-page.html?without-timer-test-8" type="button" class="btn btn-primary btn-md">
                        Пройти без таймера
                    </a>
                </div>
            </div>
        </div>
    </div>                        </div>
</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>