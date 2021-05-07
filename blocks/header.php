<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        здарова парни
        </a>
        <ul class="container nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Играть</a></li>
        <li><a href="/forum.php" class="nav-link px-2 link-dark">Форум</a></li>
        </ul>
        <?php
            if($_COOKIE['user'] == ''):
        ?>
            <div class="col-md-3 text-end">
                <form action ="Registr.php" method="post">
                    <button type="submit" class="btn btn-primary">Регистрации</button>
                </form>
                <form action ="login.php" method="post">
                    <button type="submit" class="btn btn-primary">Вход</button>
                </form>
        <?php else:?>
                    <br><p>Привет <?=$_COOKIE['user']?></p><br>
                    <form action ="exit.php" method="post">
                    <button type="submit" class="btn btn-primary">Выход</button>
                    </form>
        <?php endif; ?>
            </div>
    </div>