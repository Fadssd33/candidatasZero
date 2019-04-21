<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>
    <!-- Contenido -->
    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h2>Agregar Candidata</h2>
                <div class="separator separator-danger">∎</div>
            </div>

            
           

            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">

                <form action="<?=base_url?>candidata/guardarCandidata" method="POST">
                    <label for="nombre">Nombre:     </label> <input type="text" name="nombre"/><br>
                    <label for="apellidoMaterno">Apellido Materno:     </label> <input type="text" name="apellidoMaterno"/>
                    <label for="apellidoPaterno">Apellido Paterno:     </label> <input type="text" name="apellidoPaterno"/><br>
                    <label for="correo">Correo:     </label> <input type="text" name="correo"/><br>
                    <label for="carrera">carrera:</label>   
                    <?php $carreras = Utils::showCarreras();?>  
                    <select name="carrera">
                        <?php while($carrera = $carreras->fetch_object()): ?>
                                <option value="<?=$carrera->CarreraID?>"> 
                                    <?=$carrera->NombreCarrera?>
                                </option>
                        
                        <?php endwhile;?>
                    </select><br>
                    <label for="sexo">Sexo</label> 
                    <!-- Sexo femenino -->
                    <input type="radio" id="sexo" name="sexo" value="1">
                    <label for="femenino">Femenino</label>
                    <!-- Sexo masculino -->
                    <input type="radio" id="sexo" name="sexo" value="2">
                    <label for="masculino">Masculino</label><br>
                    <label for="descripcion">Descripcion: </label><br>
                    <textarea name="descripcion" id="" cols="30" rows="10" maxlength="300"></textarea>
                      <p class="description">
                       Maximo 300 caracteres
                    </p> <br>

                    <!-- Subir imagen -->

                    <label for="imagen">Imagen: </label>
                    <input type="file" name="imagen">
                    <input type="submit" value="Guardar" class="btn btn-danger btn-fill"/>
                </form>
                    
                </div>
                

            </div>

        </div>
    </div>


<?php
    // Footer
    require_once 'views/layout/footer.php'
?>