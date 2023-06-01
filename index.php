<?php 
$bodyClass = 'hotelesnew';
include "includes/head.php";?>
 <header id="new">
        <div class="top">
            <div class="container">
                <div class="links">
                    <a href="" class="uppercase ms700">MICE</a>
                    <a href="" class="uppercase ms700">profesionales</a>
                </div>
                <div class="right">
                    <ul class="languages">
                        <li class="uppercase ms500">
                            <img src="../img/flag_col.png" alt="es"> es
                            <ul>
                                <li><a href="javascript:changeLang('es');" class="uppercase ms500"><img
                                            src="../img/flag_col.png" alt="es">es</a></li>
                                <li><a href="javascript:changeLang('en');" class="uppercase ms500"><img
                                            src="../img/flag_en.svg" alt="en">en</a></li>
                                <li><a href="javascript:changeLang('pt');" class="uppercase ms500"><img
                                            src="../img/flag_pt.svg" alt="pt">pt</a></li>
                                <li><a href="javascript:changeLang('fr');" class="uppercase ms500"><img
                                            src="../img/flag_fr.svg" alt="fr">fr</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="es/buscador" id="search_form" class="search_form" autocomplete="off">
                        <span>
                            <input type="search" name="search" id="search">
                            <div class="op">
                                <img src="../img/lupa.svg" alt="lupa" />
                                <label for="search">Buscar</label>
                            </div>
                        </span>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <img src="../img/logoGray.svg" alt="BogotaDCTravel" class="logo">
                <nav>
                    <a href="" class="ms700">Inicio</a>
                    <a href="" class="ms700">Explora bogotá</a>
                    <a href="" class="ms700">Qué hacer</a>
                    <a href="" class="ms700">Dónde dormir</a>
                    <a href="" class="ms700">Dónde comer</a>
                    <a href="" class="ms700">Ofertas y planes</a>
                    <a href="" class="ms700">Información útil</a>
                </nav>
            </div>
        </div>
    </header>
<div class="card-list providers graybg font1">
    <div class="column flex w_100">
        <aside class="column w_25 filters graybg m_outter">
            <button class="fw500" id="resetfilters">Limpiar filtros</button>
            <h3 class="fw900">Encuentra restaurantes en Bogotá</h3>
            <div class="filtergroup checkboxes color open" data-filterid="test_zona">
                <h4 class="fw700"><span class="arrow"></span>Zona de la ciudad</h4>
                <div class="loader"></div>
                <div class="content">
                </div>
            </div>
            <div class="filtergroup checkboxes color open" data-filterid="categoria_restaurantes">
                <h4 class="fw700"><span class="arrow"></span>Categoría Restaurantes</h4>
                <div class="loader"></div>
                <div class="content">
                </div>
            </div>
        </aside>
        <section class="w_75 cards flex loading m_outter">
            <h1 class="fw700 uppercase center title">DÓNDE COMER EN BOGOTÁ</h1>
            <div class="loader big"></div>
            <div class="content flex"></div>

        </section>
    </div>
</div>
<footer id="new" style="background-image: url(img/homebanner.jpg);">
    <div class="container">
        <img src="img/logoWhite.svg" alt="logo">
        <nav>
            <h6 class="uppercase ms900">EXPLORA BOGOTÁ</h6>
            <a href="" class="ms700">Vida Nocturna</a>
            <a href="" class="ms700">Termales</a>
            <a href="" class="ms700">Música y Arte</a>
            <a href="" class="ms700">Compras</a>
            <a href="" class="ms700">Aviturismo</a>
            <a href="" class="ms700">Turismo Religioso</a>
            <a href="" class="ms700">Aventura</a>
            <a href="" class="ms700">Senderismo</a>
            <a href="" class="ms700">Biciturismo</a>
            <a href="" class="ms700">Museos</a>
        </nav>
        <nav>
            <h6 class="uppercase ms900">descubre la ciudad</h6>
            <a href="" class="ms700">Vida Nocturna</a>
            <a href="" class="ms700">Termales</a>
            <a href="" class="ms700">Música y Arte</a>
            <a href="" class="ms700">Compras</a>
        </nav>
        <div class="right">
            <nav>
                <h6 class="uppercase ms900">más de bogotá</h6>
                <a href="" class="ms700">Vida Nocturna</a>
                <a href="" class="ms700">Termales</a>
                <a href="" class="ms700">Música y Arte</a>
                <a href="" class="ms700">Compras</a>
                <a href="" class="ms700">Aviturismo</a>

            </nav>
            <nav>
                <h6 class="uppercase ms900">descubre la región</h6>
                <a href="" class="ms700">Vida Nocturna</a>
                <a href="" class="ms700">Termales</a>
                <a href="" class="ms700">Música y Arte</a>
            </nav>
            <div class="info">
                <ul>
                    <li>Línea de atención al ciudadano <a href="tel:(60+1)2170711 Ext. 101"> (60+1)2170711 Ext.
                            101</a>
                    </li>
                    <li>Línea de atención al turista <a href="tel:01 8000 127400"> 01 8000 127400</a></li>

                </ul>
                <form class="subscribe">
                    <label for="emailSub">Suscríbete para recibir reseñas y ofertas de Bogotá y nuestros
                        aliados.</label>
                    <input type="email">
                    <button type="button" class="uppercase" onclick="openSubForm()">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="politics">
        <a href="" class="ms900">Políticas de privacidad y términos de uso</a>
        <a href="" class="ms900">
            Resolución 239 del 5 de Noviembre de 2021
        </a>
    </div>
    <small>2023 - Bogotá Tourism Office</small>
</footer>

<? include 'includes/imports.php'?>