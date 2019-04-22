<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>
<!-- contenido -->

<!-- assets/img/header-1.jpeg -->
<div class="section section-header">
        <div class="parallax filter filter-color-red">
            <div class="image"
                style="background-image: url('<?=base_url?>assets/img/UESMain.jpg')"> 
                
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <h1 class="title-modern">Candidatas UES</h1>
                        <?php if(!isset($_SESSION['identity'])):?>
                        <h3>Inicia sesion para votar por la mas guapa 🌚</h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="<?=base_url?>alumno/index" class="btn btn-white btn-fill btn-lg ">
                                Iniciar Sesion
                        </a>
                    </div>
                        <?php else: ?>
                        <h3>Bienvenido <?= $_SESSION['identity']->apellidoPaterno?></h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="<?=base_url?>candidata/listadoCandidatas" class="btn btn-white btn-fill btn-lg ">
                        ¡Votar!
                        </a>
                    </div>
                        <?php endif; ?>

                </div>

            </div>
        </div>
    </div>


    <div class="section">
    <!-- Seccion para administradores -->
    <?php if(isset($_SESSION['admin'])):?>
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Servicios de Administrador</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique rem quibusdam earum odio hic ex quod labore, debitis, repellendus facere ad ipsam consequatur laudantium quae iusto non corporis tenetur impedit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?=base_url?>candidata/agregarCandidata">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-add-user"></i> 
                        </div>
                        <h3>Agregar Candidata</h3>
                        <p class="description">We make our design perfect for you. Our adjustment turn our clothes into your clothes.</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                <a href="#">
                    <div class="info-icon">
                        <div class="icon text-danger">
                        
                            <i class="pe-7s-delete-user"></i>
                        </div>
                        <h3>Eliminar Candidata</h3>
                        <p class="description">We create a persona regarding the multiple wardrobe accessories that we provide..</p>
                    </div>
                </a>
                </div>
                <div class="col-md-4">
                <a href="#">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-note"></i>
                        </div>
                        <h3>Editar Candidata</h3>
                        <p class="description">We like to present the world with our work, so we make sure we spread the word regarding our clothes.</p>
                    </div>
    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>

    <div class="section section-our-team-freebie" id="candidatas">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?=base_url?>assets/img/khaleesi.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Candidatas</h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">En el siguiente apartado se enciuentras las mas sabrosas de la escuela  ahi para que waches la que mas te gusta carnal .</p>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                <?php while($can = $candidatas->fetch_object()): ?>
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?=base_url?>uploads/images/<?=$can->imagen?>"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title"><?=$can->Nombre;?></h3>
                                                    <p class="small-text"><?=$can->NombreCarrera;?></p>
                                                    <p class="description"><?=$can->descripcion?></p>
                                                    <!-- Verifica si el usuario a iniciado sesion -->
                                                    <?php if(isset($_SESSION['identity'])):?>
                                                       
                                                        <input type="submit" value="Votar" name="<?=$can->CandidataID?>" class="btn btn-danger btn-fill">
                                                      
                                                        <!-- Modal para votar -->
                                                        <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                            Launch demo modal
                                                            </button>

                                                           

                                                    <!-- Si no ha iniciado session desactiva el boton -->
                                                    <?php elseif(!isset($_SESSION['identity'])):?>
                                                    <a href="<?=base_url?>alumno/index" class="btn btn-danger btn-fill" disabled>Votar</a>
                                                    <?php endif;?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                                    
                                        <!-- Fin carta -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray">Estos son los</h5>
                <h2>Jueces</h2>
                <div class="separator separator-danger">∎</div>
            </div>

            <ul class="nav nav-text" role="tablist">
                <li class="active">
                    <a href="#testimonial1" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?=base_url?>assets\img\rupaul-400x400.jpg"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial2" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?=base_url?>assets\img\michellevisage.jpg"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial3" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?=base_url?>assets/img/faces/face_2.jpg"/>
                        </div>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">
                    <p class="description">
                        And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                    </p>
                </div>
                <div class="tab-pane" id="testimonial2">
                    <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                    </p>
                </div>
                <div class="tab-pane" id="testimonial3">
                    <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                    </p>
                </div>

            </div>

        </div>
    </div>


    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?=base_url?>assets/img/queen.png')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">¿Quieres participar como candidata?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">Solo tienes que ser estudiante de la UES, muy gay o puta!</p>
                </div>

                <div class="button-get-started">
                    <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contacto</a>
                </div>
            </div>
        </div>
    </div>



    <!--   core js files    -->
<script src="<?=base_url?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url?>assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="<?=base_url?>assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="<?=base_url?>assets/js/gaia.js"></script>

<?php
    //footer
    require_once 'views/layout/footer.php';
?>
