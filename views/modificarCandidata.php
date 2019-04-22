<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>
    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray">Eliminar</h5>
                <h2>Candidatas</h2>
                <div class="separator separator-danger">∎</div>
                <?php if(isset($_SESSION['candidataEliminada']) && $_SESSION['candidataEliminada'] == "complete"):?>
                <!-- Cambiar esto a verde -->
                     <p class="description">
                       Candidata eliminada correctamente.
                    </p> <br>
                <?php elseif(isset($_SESSION['candidataEliminada']) && $_SESSION['candidataEliminada'] != "complete"):?>
                    <!-- Cambiar esto a rojo -->
                    
                    <p class="description">
                        ERROR: La candidata no se ha eliminado.
                    </p> <br>
                <?php endif;?>
                <?= Utils::deleteSession('candidataEliminada');?>
            </div>
           
            


                  <ul class="nav nav-text" role="tablist">
                            <li class="active">
                                <a href="#testimonial1" role="tab" data-toggle="tab">
   <!-- Saca todas las candidatas       -->
   <?php while($can = $candidatas->fetch_object()):?>
                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?=base_url?>uploads/images/<?=$can->imagen?>"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title"><?=$can->Nombre;?></h3>
                                                    <!-- Mostrar la carrera -->
                                                    <p class="small-text"><?=$can->NombreCarrera;?></p>
                                                    <p class="description"><?=$can->descripcion?></p>
                                                    <form action="<?=base_url?>candidata/eliminarCandidata2" method="POST">
                                                        <!-- pasa el id de la candidata -->
                                                        <input type="text" value="<?=$can->CandidataID?>" name="candidataID" style="display:none;">
                                                        
                                                        <input type="submit" value="Modificar" name="candidata" class="btn btn-black btn-fill">
                                                    </form>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php endwhile;?>
            </div>

                    </a>
                    
                </li>
            </ul>

<?php
    //footer
    require_once 'views/layout/footer.php'
?>
