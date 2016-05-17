<?php include ("./include/config.inc.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dr. Vetéssy Géza cserkészcsapat</title>
        <?php includeCSS($page) ?>
    </head>
<body>
    <header>
        <h1>Vetéssy - <?php echo getTitle($page); ?></h1>
    </header>
    <nav>
        <ul>
            <?php createMenu($page); ?>
        </ul>
    </nav>
    <section>
        <?php include(getContent($page)); ?>
    </section>
    <footer>
        
    </footer>
</body>
</html>