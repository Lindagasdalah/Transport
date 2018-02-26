/**
 * Created by PhpStorm.
 * User: sana
 * Date: 13/02/2018
 * Time: 14:45
 */
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('theme/dist/img/logo.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>




    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Routes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('routes.index') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
            <li><a href="{{ route('routes.create') }}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Agences</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('agences.index') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
            <li><a href="{{ route('agences.create') }}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Utilisateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Stations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('stops.index') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
            <li><a href="{{ route('stops.create') }}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Horaires</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('stops_time.index') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
            <li><a href="{{ route('stops_time.create') }}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
        </ul>
    </li>

</ul>
</section>
<!-- /.sidebar -->
</aside>