<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contato</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-color: aliceblue;">
        <div>
            <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div style="display: flex; justify-content: center; align-text: center;">
            <a href="/contato/cadastro" class="btn btn-success" style="margin-top: 2em;">Quero cadastrar o meu contato.</a>
        </div>

        <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e(contato); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH C:\Users\Matheus\OneDrive\Área de Trabalho\Projects\trabalho_laravel\resources\views/contato.blade.php ENDPATH**/ ?>