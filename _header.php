<header>
    <nav>
        <div class="nav-item">
            <a href="#">
                <i class="material-icons">camera_alt</i>
                <h1>Devinettes</h1>
            </a>
            <h1 style="line-height: 1em"></h1>
        </div>
        <div class="nav-item">
            <input id="input-search" type="text" placeholder="Rechercher"/>
        </div>
        <div class="nav-item end-row">
            <?php if($role == "ADMIN"):?>
                 hello <?= $username;?>
                <button>
                    <a href="index.php?action=edit">
                        Ajouter une devinette
                    </a>
                </button>
            <?php else:?>
                <a href="index.php?action=login">login</a>
            <?php endif;?>
            <a href="#">
                <i class="material-icons">star_border</i>
            </a>
            <a href="#">
                <i class="material-icons">person_outline</i>
            </a>
        </div>
    </nav>
</header>