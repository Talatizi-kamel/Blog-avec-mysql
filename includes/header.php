<header>
    <a href="/" class="logo">Dyma Blog</a>
    <ul class="header-menu">
        <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-register.php' ? 'active' : '' ?>>
            <a href="/auth-register.php">Inscription</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-login.php' ? 'active' : '' ?>>
            <a href="/auth-login.php">Connexion</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-logout.php' ? 'active' : '' ?>>
            <a href="/auth-logout.php">déconnexion</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/profile.php' ? 'active' : '' ?>>
            <a href="/profile.php">profile</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
            <a href="/form-article.php">Écrire un article</a>
            </li>

    </ul>
</header>