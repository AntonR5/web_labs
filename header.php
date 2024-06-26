<?php
$header = [
    'logo_name' => 'Escape.',
    'link_home_name' => 'HOME',
    'link_categories_name' => 'CATEGORIES',
    'link_about_name' => 'ABOUT',
    'link_contact_name' => 'CONTACT',
];
?>

<header class="header">
    <div class="container running-title">
        <a class="logo" href="/home"><?= $header['logo_name'] ?></a>
        <nav class="navigation">
            <div class="navigation__burger-button" id="burger-button">
                <span class="navigation__button-line" id="button-line"></span>
            </div>
            <ul class="navigation__list hide" id="list">                
                <li class="navigation__item"><a class="navigation__link" id="burger-link" href="/home"><?= $header['link_home_name'] ?></a></li>
                <li class="navigation__item"><a class="navigation__link" id="burger-link" href="/"><?= $header['link_categories_name'] ?></a></li>
                <li class="navigation__item"><a class="navigation__link" id="burger-link" href="/"><?= $header['link_about_name'] ?></a></li>
                <li class="navigation__item"><a class="navigation__link" id="burger-link" href="/"><?= $header['link_contact_name'] ?></a></li>
            </ul>
        </nav>             
    </div>
</header>
