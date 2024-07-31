<div class="vh-100">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sottotitolo</th>
                        <th scope="col">Gestisci</th>
                      </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                          <th scope="row"><?php echo e($article->id); ?></th>
                          <td><?php echo e($article->title); ?>k</td>
                          <td><?php echo e($article->subtitle); ?></td>
                          <td>
                            <a href="<?php echo e(route('articles.show', compact('article'))); ?>" class="btn btn-info">Mostra</a>
                            <a href="<?php echo e(route('articles.edit', compact('article'))); ?>" class="btn btn-warning">Modifica</a>
                            <button wire:click='destroy(<?php echo e($article); ?>)' class="btn btn-danger">Elimina</button>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\vivig\wa\laravel_db\livewire_02 prova_vincenzo_galione\resources\views/livewire/table-article.blade.php ENDPATH**/ ?>