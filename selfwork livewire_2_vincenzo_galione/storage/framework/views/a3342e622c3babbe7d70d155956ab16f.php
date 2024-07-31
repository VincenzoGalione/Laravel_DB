<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="<?php echo e(route('homepage')); ?>">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('articles.create')); ?>">Crea Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('articles.index')); ?>">I miei Articoli</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\Users\vivig\wa\laravel_db\livewire_02 prova_vincenzo_galione\resources\views/components/navbar.blade.php ENDPATH**/ ?>