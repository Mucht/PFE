@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ Auth::user()->photo ? Auth::user()->photo : "/img/default-profil/profilAvatar_50.jpg" }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <!-- fa-glass, fa-music, fa-search, fa-search-plus, fa-search-minus fa-envelope-o, fa-heart, fa-star, fa-star-o, fa-user, fa-film, fa-th-large, fa-th, fa-th-list, fa-check, fa-remove, fa-close, fa-times, fa-power-off, fa-signal, fa-gear, fa-cog, fa-trash-o, fa-home, fa-file-o, fa-clock-o, fa-road, fa-download, fa-arrow-circle-o-down, fa-inbox, fa-play-circle-o, fa-rotate-right, fa-repeat, fa-list-alt, fa-lock, fa-flag, fa-headphones, fa-volume-off, fa-volume-down, fa-volume-up, fa-qrcode, fa-barcode, fa-tag, fa-tags, fa-book, fa-bookmark, fa-print, fa-camera, fa-list, ...  -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dribbble"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          @if ( Auth::user()->hasRole('Web Developer') || Auth::user()->hasRole('Web Master') )
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Membres</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
                <li><a href="{{ url('admin/family') }}"><i class="fa fa-group"></i> <span>Familles</span></a></li>
                <li><a href="{{ url('admin/role') }}"><i class="fa fa-tags"></i> <span>Roles</span></a></li>
              </ul>
            </li>
            <li><a href="{{ url('admin/team') }}"><i class="fa fa-group"></i> <span>Équipes</span></a></li>
            <li><a href="{{ url('admin/practice') }}"><i class="fa fa-clock-o"></i> <span>Entrainements</span></a></li>
            <li><a href="{{ url('admin/game') }}"><i class="fa fa-calendar"></i> <span>Matchs</span></a></li>
          @endif
          @if ( Auth::user()->hasRole('Web Developer') || Auth::user()->hasRole('Web Master') || Auth::user()->hasRole('Web Communication') )
            <li><a href="{{ url('admin/event') }}"><i class="fa fa-newspaper-o"></i> <span>Événements</span></a></li>
            <li><a href="{{ url('admin/activity') }}"><i class="fa fa-th-large"></i> <span>Activités</span></a></li>
            <li><a href="{{ url('admin/album') }}"><i class="fa fa-image"></i> <span>Albums</span></a></li>
          @endif
          @if ( Auth::user()->hasRole('Web Developer') || Auth::user()->hasRole('Web Master') )
            <li><a href="{{ url('admin/sponsor') }}"><i class="fa fa-briefcase"></i> <span>Partenaires</span></a></li>
            <li><a href="{{ url('admin/coaching') }}"><i class="fa fa-clipboard"></i> <span>Fichiers coaching</span></a></li>
            <li><a href="{{ url('admin/download') }}"><i class="fa fa-download"></i> <span>Téléchargements</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-file-text-o"></i> <span>Pages</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/home') }}"><i class="fa fa-file-text-o"></i> <span>Accueil</span></a></li>
                <li><a href="{{ url('admin/coachingpage') }}"><i class="fa fa-file-text-o"></i> <span>Coaching</span></a></li>
                <li><a href="{{ url('admin/complexe') }}"><i class="fa fa-file-text-o"></i> <span>Complexe</span></a></li>
                <li><a href="{{ url('admin/comity') }}"><i class="fa fa-file-text-o"></i> <span>Conseil d'administration</span></a></li>
                <li><a href="{{ url('admin/contact') }}"><i class="fa fa-file-text-o"></i> <span>Contact</span></a></li>
                <li><a href="{{ url('admin/trainer') }}"><i class="fa fa-file-text-o"></i> <span>Entraineurs</span></a></li>
                <li><a href="{{ url('admin/rule') }}"><i class="fa fa-file-text-o"></i> <span>Règlement</span></a></li>
                <li><a href="{{ url('admin/downloadpage') }}"><i class="fa fa-file-text-o"></i> <span>Téléchargements</span></a></li>
              </ul>
            </li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-folder"></i> <span>Gestion de fichiers</span></a></li>
            <li><a href="{{ url('admin/setting') }}"><i class="fa fa-info-circle"></i> <span>Informations générales</span></a></li>
          @endif
          @if ( Auth::user()->hasRole('Web Developer') )
            <li class="header">OPTIONS AVANCÉES</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
          @endif
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
