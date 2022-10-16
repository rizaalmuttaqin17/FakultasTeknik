<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('fakultas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="fas fa-building"></i><span>Fakultas</span></a>
</li>

<li class="side-menus {{ Request::is('programStudis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programStudis.index') }}"><i class="fas fa-building"></i><span>Program Studis</span></a>
</li>

<li class="side-menus {{ Request::is('beritas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('beritas.index') }}"><i class="fas fa-building"></i><span>Beritas</span></a>
</li>

<li class="side-menus {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}"><i class="fas fa-building"></i><span>Kategoris</span></a>
</li>

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i>Settings</a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}"><span>Roles</span></a>
        </li>
        
        <li class="side-menus {{ Request::is('permissions*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permissions.index') }}"><span>Permissions</span></a>
        </li>
    </ul>
</li><li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
</li>

