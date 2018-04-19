<?php include('_head.php');?>
<?php include('_header.php');?>

    <div id="container">
        <h2>Se connecter</h2>

        <form action="index.php?action=authentification" method="post">
            <input type="text" name="login"/>
            <input type="password" name="password"/>
            <input type="submit" value="valider"/>
        </form>
    </div>

<?php include('_footer.php');?>