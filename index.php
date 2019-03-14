<?php include("header.php"); ?>
<div class="container">
    <h1>Accueil</h1>
    <pre>
        <?php
        echo basename($_SERVER['REQUEST_URI']);
        ?>
    </pre>
</div>
<?php include("footer.php"); ?>
