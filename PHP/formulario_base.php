<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="formulario_base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    
    <link rel="shortcut icon" href="IMG/LogoTP.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <a href="http://127.0.0.1:5500/inicio.html">Inicio</a>              
            <a href="http://127.0.0.1:5500/acerca.html">Acerca De</a>          
            <a href="contacto.html">Contactanos</a>
        </nav>
        <section class="textos-header">
            <h1>Formulario de Contacto</h1>
        </section>

        <div class="wave" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-1.12,8.41 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path>
            </svg>
        </div>
    </header>

    <main>
        <section class="contenedor">
            <h2 class="titulo">Envíanos tus datos</h2>

            <form action="registro.php" method="post" class="formulario">
                <div class="input-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="input-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>

                <div class="input-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="telephone" id="telefono" name="telefono" required>
                </div>

                <div class="input-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                </div>

                <div class="input-group">
                    <button type="submit" class="btn-enviar">Enviar</button>
                </div>
            </form>
        </section>
    </main>

    </section>
<main>
   <table class="table table bordered">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>   
          <th scope="col">Correo</th>
          <th scope="col">Telefono</th>
          <th scope="col">Mensaje</th>
        </tr>
      </thead>
      <tbody>
         <?php
          include('mostrar.php');
          while ($mostrar = mysqli_fetch_array($resultado)) { 
            ?>
          <tr>
            <th scope="row"><?php echo $mostrar['id']?></th>
            <th scope="row"><?php echo $mostrar['nombre']?></th>
            <th scope="row"><?php echo $mostrar['correo']?></th>
            <th scope="row"><?php echo $mostrar['telefono']?></th>
            <th scope="row"><?php echo $mostrar['mensaje']?></th>
            <td><a href="eliminar.php?id=<?php echo $mostrar['id']?>" class="btn btn-success" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a></td>
          </tr>
          <?php
          }
          ?>
    </table>
</main>
</body>
</html>
