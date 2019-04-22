<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>
<!-- <div class="card card-blog">
     <a href="#gaia" class="header">
         <img src="../assets/img/header-6.jpeg" class="image-header">
     </a>
     <div class="content">
         <h6 class="card-date">Feb 17</h6>
         <a href="#gaia" class="card-title">
             <h3>Nature &amp; The Catch of the Day</h3>
         </a>
         <div class="line-divider line-danger"></div>
         <h6 class="card-category">Nature</h6>
     </div>
 </div> -->

 <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray">Eliminar</h5>
                <h2>Candidatas</h2>
                <div class="separator separator-danger">∎</div>
                
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
