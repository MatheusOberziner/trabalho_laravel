<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Contato</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body style="background-color: aliceblue;">
        <div>
            <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="container" style=" display: flex; text-align: center; justify-content: center; margin-top: 5em;">
            <?php if(session('success')): ?>
                <div><?php echo e(session('success')); ?></div>
            <?php endif; ?>    
            <form method="GET" style="border: 2px solid #1a69c9; border-radius: 1em; width: 50em; padding-left: 5em; padding-bottom: 1em; background-color: #1a69c9">
                <div class="form-group">
                    <h1 style="margin-right: 1em; margin-top: 0.5em;">Cadastro para contato:</h1>

                    <div class="col-md-10" style="margin-bottom: 1em; margin: 2em;">
                        <input type="text" placeholder="Nome" class="form-control" id="nome" name="nome" required />
                    </div>
                    <div class="col-md-10" style="margin-bottom: 1em; margin: 2em;">
                        <input type="email" placeholder="E-Mail" class="form-control" id="email" name="email" required /> 
                    </div>
                    <div class="col-md-10" style="margin: 2em;">
                        <input type="tel" placeholder="Telefone" class="form-control" id="telefone" name="telefone" required />
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Confirmar</button>
                <a href="/contato" class="btn btn-danger" style="margin-right: 28em;">Cancelar</button>
            </form>

            <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e(contato); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\Matheus\OneDrive\Área de Trabalho\Projects\trabalho_laravel\resources\views/cadastro.blade.php ENDPATH**/ ?>