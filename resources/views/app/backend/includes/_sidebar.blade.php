

<!-- ########## START: LEFT PANEL ########## -->
<div class="container">
    <div class="br-logo"><a href="#"><span>[</span>jana <i>dash</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="#" class="br-menu-link active">
            <i class="material-icons">dashboard</i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="material-icons">photo</i>
            <span class="menu-item-label">Posts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('posts.create') }}" class="sub-link">Novo Post</a></li>
            <li class="sub-item"><a href="{{ route('posts.index') }}" class="sub-link">Todos os Posts</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="material-icons">class</i>
            <span class="menu-item-label">Categorias</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('categorias.create') }}" class="sub-link">Nova Categoria</a></li>
            <li class="sub-item"><a href="{{ route('categorias.index') }}" class="sub-link">Todas as Categorias</a></li>
          </ul>
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="material-icons">person</i>
            <span class="menu-item-label">Meu Perfil</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="#" class="sub-link">Morris Charts</a></li>
            <li class="sub-item"><a href="#" class="sub-link">Flot Charts</a></li>
          </ul>
        </li><!-- br-menu-item -->

      </ul><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
</div>
<!-- ########## END: LEFT PANEL ########## -->


