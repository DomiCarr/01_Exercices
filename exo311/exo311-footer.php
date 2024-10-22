    <footer>


        <p>&copy; 2021</p>

        <?php if(isset($_SESSION["user"])): ?>
        <p>Username: <?=$_SESSION["user"]["username"] ?> Connecté</p>
        <?php endif; ?>

    </footer>

    </body>

    </html>