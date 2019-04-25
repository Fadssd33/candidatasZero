<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
    require_once 'helpers/utils.php';
?>

    
           

    <!-- Contenido -->
    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h2>Agregar Candidata</h2>
                <div class="separator separator-danger">∎</div>
                <img tex-align ="center" width="200" height="150" src="https://media.giphy.com/media/82kHKjsdPB9wQ/giphy.gif">
               <?php if(isset($_SESSION['candidataGuardada']) && $_SESSION['candidataGuardada'] == "complete"):?>
                <!-- Cambiar esto a verde -->
                     <p class="description">
                       Candidata Agregada correctamente.
                    </p> <br>
                <?php elseif(isset($_SESSION['candidataGuardada']) && $_SESSION['candidataGuardada'] != "complete"):?>
                    <!-- Cambiar esto a rojo -->
                    
                    <p class="description">
                        ERROR: La candidata no se ha agregado.
                    </p> <br>
                <?php endif;?>
                <?= Utils::deleteSession('candidataGuardada');?>
                
            </div>

            
           

            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">

                <form action="<?=base_url?>candidata/guardarCandidata" method="POST" enctype="multipart/form-data">
                    <br>

                    <h3 class="display-2" for="nombre">Nombre:       </h3> <input type="text" class="form-control" name="nombre" />  
                    <br>
                    <h3 for="apellidoMaterno">Apellido Materno:     </h3>  <input type="text" class="form-control" name="apellidoMaterno"/>
                    <br>
                    <h3 for="apellidoPaterno">Apellido Paterno:     </h3> <input type="text" class="form-control" name="apellidoPaterno"/>
                    <br>

                    
                    <h3 for="correo">Correo:     </h3> <input type="text"  class="form-control" name="correo" placeholder="email@example.com">
                    <br>
                    <h3 for="carrera">carrera:</h3>   
                    <?php $carreras = Utils::showCarreras();?>  
                    <select  class="form-control form-control-lg" name="carrera">
                        <?php while($carrera = $carreras->fetch_object()): ?>
                                <option value="<?=$carrera->CarreraID?>"> 
                                    <?=$carrera->NombreCarrera?>
                                </option>
                        
                        <?php endwhile;?>
                    </select><br>
                    <h3 for="sexo">Sexo</h3> 
                    <!-- Sexo femenino -->
                    <!--  <input type="radio" id="sexo" name="sexo" value="1"> -->
                    <!--  <label for="femenino">Femenino</label>-->
                    <!-- Sexo masculino -->
                    <!--  <input type="radio" id="sexo" name="sexo" value="2">-->
                   <!--   <label for="masculino">Masculino</label><br>-->
                   <!--   <div class="form-row align-items-center">-->

            
              <h3 class="mr-sm-2 sr-only" for="sexo">Preference</h3>
                 <select class="custom-select" id="sexo" name="sexo" required>
                 <option selected>Sexo...</option>
                  <option id="sexo" value="1">Femenino</option>
                  <option id="sexo" value="2">Masculino</option>
                  <option id="sexo" value="3">indistinto</option>
                  </select>
                 </div>
             
                    <!-- Edad -->
                    <h3 for="edad">Edad: </h3>
                    <input type="number" name="edad" id="edad">

                    
                    <br>
                    <h3 for="descripcion">Descripcion: </h3>
                    <br>
                    <textarea class="form-control" name="descripcion" id="" cols="30" rows="10" maxlength="300"></textarea>
                    <br>
                      <p class="description">
                       Maximo 300 caracteres
                    </p> <br>

                    <!-- Subir imagen -->

                    <h3 for="imagen">Imagen: </h3>
                    <input type="file" class="form-control-file" name="imagen">
                    <br>
                    <input type="submit" value="Guardar" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#exampleModal"/>

                   
                </form>
                   
               

                </div>
                
            </div>

        </div>
    </div>
 
<?php
    // Footer
    require_once 'views/layout/footer.php'
?>



