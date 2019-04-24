<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>

<div class="section section-small section-get-started">
    <div class="parallax filter">
        <div class="image" style="background-image: url('<?=base_url?>assets/img/queen.png')">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">¿De verdad quieres votar por esta candidata?</h2>
                <div class="separator line-separator">♦</div>
                <p class="description"><?=$candidataData->Nombre?></p>
            </div>

            <div class="button-get-started">
                <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Votar</a>
            </div>
        </div>
    </div>
</div>
<?php
    //footer
    require_once 'views/layout/footer.php';
?>