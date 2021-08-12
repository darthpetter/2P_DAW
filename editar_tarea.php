<?php include('objetos/header.php')?>
<main>
    <?php
        $query="SELECT * FROM tareas WHERE id=$_GET[ID];";
        $resultado=mysqli_fetch_array(mysqli_query($connexion,$query));
    ?> 
    <div id="contenedor_edicion">
        <div>
            <form action="update_tarea.php" method="POST">
                <div id="form__campos">
                    EDICIÓN DE DATOS | TAREA ID° <?php echo $resultado['ID']?>
                    <input type="hidden" id="ID" name="ID" value="<?php echo $resultado['ID']?>">
                    <input type="text" id="titulo" name="titulo" value="<?php echo $resultado['titulo']?>"/>
                    <textarea id="descripcion" name="descripcion" value="<?php echo $resultado['descripcion']?>" rows="10" cols="50" placeholder="Descripción"></textarea>
                    <button type="submit">Actualizar Tarea</button>
                </div>
            </form>
        </div>
    </div> 
</main>
<?php include('objetos/footer.php');?>