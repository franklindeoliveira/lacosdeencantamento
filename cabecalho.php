<?php include_once("analyticstracking.php") ?>
<header>
    <h1><img class="logo logoHeader" src="img/logo.png" alt="Laços de Encantamento: Brincadeiras de Bebê"></h1>
    <nav class="menu-opcoes">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php if (!is_null($inicio)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="index">
                    <button itemprop="name" class="amarelo">Início</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="index">
                    <button class="amarelo">Início</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($oficinas)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="oficinas">
                    <button itemprop="name" class="laranja">Oficinas e Cursos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="oficinas.php">
                    <button class="laranja">Oficinas e Cursos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($sobre)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="sobre">
                    <button itemprop="name" class="verde">Sobre</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="sobre">
                    <button class="verde">Sobre</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($brincadeiras)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="brincadeiras">
                    <button itemprop="name" class="roxo">Brincadeiras</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="brincadeiras">
                    <button class="roxo">Brincadeiras</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($contato)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="contato">
                    <button itemprop="name" class="laranja">Contato</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="contato">
                    <button class="laranja">Contato</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($fotos)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="galeria-fotos">
                    <button itemprop="name" class="amarelo">Galeria de Fotos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="galeria-fotos">
                    <button class="amarelo">Galeria de Fotos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($depoimentos)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="depoimentos">
                    <button itemprop="name" class="verde">Depoimentos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="depoimentos">
                    <button class="verde">Depoimentos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($leituras)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="leituras">
                    <button itemprop="name" class="roxo">Leituras</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="leituras">
                    <button class="roxo">Leituras</button>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</header>