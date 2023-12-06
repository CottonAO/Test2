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
    {{-- <script defer src="./js/index.js"></script> --}}
    <title>Личный кабинет</title>
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
                
<div class="my-profile-page">
    <h4 class="h4">
        Мой профиль
    </h4>
    <div class="profile-wrapper d-flex">
        <div class="profile-info">
            <div class="profile-info-item">
                <div class="small-text text-slate-400">
                    ФИО
                </div>
                <h5 class="h5">
                    Иванов Иван Иванович                </h5>
            </div>
            <div class="profile-info-item">
                <div class="small-text text-slate-400 mb-1">
                    Должность
                </div>
                <p>
                    Менеджер                </p>
            </div>
            <div class="profile-info-item">
                <div class="small-text text-slate-400 mb-1">E-mail</div>
                <p>
                    name@mail.ru                </p>
            </div>
        </div>
        <div class="profile-settings flex-column">
            <h5 class="h5">
                Сменить пароль
            </h5>
            <!-- Форма смены пароля -->
            <form class="form change-password-form" id="changePasswordForm" novalidate>
    <div class="form-group mb-2-5">
        <label for="changePassword small-text text-primary-color letter-spacing-0.2">
            Новый пароль
        </label>
        <input
            type="password"
            class="form-control"
            id="changePassword"
            placeholder="Новый пароль"
            autocomplete="on"
            required
        >
    </div>
    <div class="form-group">
        <label for="changePasswordConfirm" class="position-relative small-text text-primary-color letter-spacing-0.2">
            Повторите новый пароль
            <span class="show-password" id="showPasswordConfirm">
                <img class="show-password-icon" src="images/show-pass-icon.svg" alt="show password">
            </span>
        </label>
        <input
            type="password"
            class="form-control"
            id="changePasswordConfirm"
            placeholder="Новый пароль"
            autocomplete="on"
            required
        >
        <div class="error-message error-empty text-slate-600">
            <img src="./images/error-input-icon.svg" alt="Error input icon" class="mr-1">
            <span class="validation-text">
                Укажите пароль
            </span>
        </div>
    </div>
    <button
        type="submit"
        class="btn btn-outline-primary btn-sm"
    >
        Сохранить
    </button>
</form>
        </div>
        <div class="change-password-group flex-column">
            <button
                class="btn btn-outline-primary"
                data-toggle="modal"
                data-target="#dialogForm"
                id="changePasswordBtn"
            >
                <img class="mr-1" src="images/lock-icon.svg" alt="Change password">
                Сменить пароль
            </button>
            <button class="btn btn-outline-dark">
                Выйти
            </button>
            <div
    class="modal fade"
    id="dialogForm"
    data-backdrop="static"
    data-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
        <!--  Модалка формы из личного кабинета для смены пароля -->
        <div class="modal-content p-6" style="max-width: 320px;">
            <div class="modal-header d-flex flex-column border-0 p-0 mb-6">
                <button
                    type="button"
                    class="close p-0"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="h5 mb-6">
                    Сменить пароль
                </h5>
            </div>
            <form class="form" id="dialogChangePasswordForm" novalidate>
                <div class="form-group mb-2-5">
                    <label for="changePasswordField small-text text-primary-color mb-2">
                        Новый пароль
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        id="changePasswordField"
                        placeholder="Новый пароль"
                        autocomplete="on"
                        required
                    >
                </div>
                <div class="form-group mb-6">
                    <label for="confirmPasswordField" class="position-relative small-text text-primary-color mb-2">
                        Повторите новый пароль
                        <span class="show-password" id="showPasswordConfirm">
                            <img class="show-password-icon" src="./images/show-pass-icon.svg" alt="show password">
                        </span>
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        id="confirmPasswordField"
                        placeholder="Новый пароль"
                        autocomplete="on"
                        required
                    >
                    <div class="error-message error-empty text-slate-600">
                        <img src="images/error-input-icon.svg" alt="Error input icon" class="mr-1">
                        <span class="validation-text">
                            Укажите пароль
                        </span>
                    </div>
                </div>
                <button
                    type="submit"
                    class="btn outlined-btn outlined-blue normal-btn w-100"
                >
                    Сохранить
                </button>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>