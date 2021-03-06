<?php include('objetos/header.php')?>
    <main>
        <div id="contenedor">
            <div id="formulario">
                <form action="guardar_tarea.php" method="POST">
                    <div id="form__campos">
                        <input type="text" id="titulo" name="titulo" placeholder="Titulo"/>
                        <textarea id="descripcion" name="descripcion" rows="10" cols="50" placeholder="Descripción"></textarea>
                        <button type="submit">Almacenar Tarea</button>
                    </div>
                </form>
            </div>
            <div>
                <div id="contenedor_tabla">
                    <table>
                        <thead>
                            <tr>
                                <td>Título</td>
                                <td>Descripción</td>
                                <td>Creado</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query="SELECT * FROM tareas;";
                                $result=mysqli_query($connexion,$query);
                                //$data=mysqli_fetch_assoc($result);
                                while ($fila = mysqli_fetch_assoc($result)){
                            ?>   
                            <tr>
                                <td><?php echo $fila['titulo'];?></td>
                                <td><?php echo $fila['descripcion'];?></td>
                                <td><?php echo date('d-m-Y H:i:s', strtotime($fila['created_at']));?></td>
                                <td>
                                    <div class="div_botones">
                                            <a class="acciones editar" href="editar_tarea.php?ID=<?php echo $fila['ID'];?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="1.2rem" width="1.2rem" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a onclick="return confirma()" class="acciones eliminar" href="eliminar_tarea.php?ID=<?php echo $fila['ID'];?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" width="1.2rem" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    </main>
<?php include('objetos/footer.php');?>