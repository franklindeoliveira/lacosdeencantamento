<?php include_once("analyticstracking.php") ?>
<header>
    <h1><img class="logo logoHeader" src="img/logo.png" alt="Laços de Encantamento: Brincadeiras de Bebê"></h1>
    <nav class="menu-opcoes">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php if (!is_null($inicio)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="index.php">
                    <button itemprop="name" class="amarelo">Início</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="index.php">
                    <button class="amarelo">Início</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($sobre)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="sobre.php">
                    <button itemprop="name" class="verde">Sobre</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="sobre.php">
                    <button class="verde">Sobre</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($brincadeiras)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="brincadeiras.php">
                    <button itemprop="name" class="roxo">Brincadeiras</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="brincadeiras.php">
                    <button class="roxo">Brincadeiras</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($contato)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="contato.php">
                    <button itemprop="name" class="laranja">Contato</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="contato.php">
                    <button class="laranja">Contato</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($fotos)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="galeria-fotos.php">
                    <button itemprop="name" class="amarelo">Galeria de Fotos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="galeria-fotos.php">
                    <button class="amarelo">Galeria de Fotos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($depoimentos)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="depoimentos.php">
                    <button itemprop="name" class="verde">Depoimentos</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="depoimentos.php">
                    <button class="verde">Depoimentos</button>
                </a>
            </li>
            <?php } ?>
            <?php if (!is_null($leituras)) { ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="leia.php">
                    <button itemprop="name" class="roxo">Leituras</button>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="leituras.php">
                    <button class="roxo">Leituras</button>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</header>