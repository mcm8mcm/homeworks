
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Супер сайт</a>
        </div>

        <?php if(isset($_COOKIE['User'])) { ?>

            <ul class="nav navbar-nav">
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=articles">Articles</a></li>
                <li><a href="?page=products">Products</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav pull-right">
                <li><a href="?page=logout">Logout</a></li>
            </ul>

        <?php } ?>

    </div>
</nav>
