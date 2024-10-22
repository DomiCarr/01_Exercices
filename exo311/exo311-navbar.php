    <nav>
        <h1>Menu</h1>
        <ul>
            <li>Accueil</li>
            <li>Services</li>
            <li>Contact</li>
            <?php if(!isset($_SESSION["user"])): ?>
            <li><a href="./exo311-connection_user.php">Connection</a></li>
            <li><a href="./exo311-inscription_user.php">Inscription</a></li>
            <?php else: ?>
            <li>Bonjour <?= $_SESSION["user"]["username"] ?></li>
            <li><a href="./exo311-deconnection_user.php">Deconnection</a></li>
            <?php endif; ?>
        </ul>
    </nav>