<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <!--[if BLOCK]><![endif]--><?php if(session('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <form class="shadow p-5 mt-5 rounded-5 bg-body-secondary" enctype="multipart/form-data" wire:submit="store">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Articolo</label>
                      <input wire:model.blur="title" type="text" class="form-control" id="title">
                      <div class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]--></div>
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Sottotitolo</label>
                      <input wire:model.blur="subtitle" type="text" class="form-control" id="title">
                      <div class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]--></div>
                    </div>
                    <div class="mb-3">
                      <label for="body" class="form-label">Corpo Articolo</label>
                      <textarea wire:model.blur="body" class="form-control" cols="20" rows="7" id="body"></textarea>
                      <div class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]--></div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input wire:model.blur='image'  type="file" class="form-control  me-2" id="img">       
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php /**PATH C:\Users\vivig\wa\laravel_db\livewire_02 prova_vincenzo_galione\resources\views/livewire/create-article.blade.php ENDPATH**/ ?>