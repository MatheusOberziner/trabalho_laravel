<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Filmes Favoritos</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-color: aliceblue;">
        <div>
            <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="container" style="margin-top: 3em;">
        <table class="table table-striped">
            <thead class="thead-dark" style="color: white; background-color: black;">
                <tr style="font-size: 20px;">
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Direcao</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($filme['codigo']); ?></th>
                        <td><?php echo e($filme['titulo']); ?></td>
                        <td><?php echo e($filme['genero']); ?></td>
                        <td><?php echo e($filme['direcao']); ?></td>
                        <td><img src="<?php echo e($filme['imagem']); ?>" alt="Imagem" style="height: 80px; width: 80px;" /></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </body>
</html><?php /**PATH C:\Users\Matheus\OneDrive\Área de Trabalho\Projects\trabalho_laravel\resources\views/home.blade.php ENDPATH**/ ?>