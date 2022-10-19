<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('beritas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('beritas.index') }}"><i class="fas fa-building"></i><span>Berita</span></a>
</li>

<li class="side-menus {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}"><i class="fas fa-building"></i><span>Kategori</span></a>
</li>

<li class="side-menus {{ Request::is('fakultas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="fas fa-building"></i><span>Fakultas</span></a>
</li>

<li class="side-menus {{ Request::is('programStudis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programStudis.index') }}"><i class="fas fa-building"></i><span>Program Studi</span></a>
</li>

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i>Settings</a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('permissions*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permissions.index') }}"><span>Permissions</span></a>
        </li>
        <li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}"><span>Roles</span></a>
        </li>
        <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}"><span>Pengguna</span></a>
        </li>
    </ul>
</li>

<li class="side-menus {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}"><i class="fas fa-building"></i><span>Tags</span></a>
</li>

<li class="side-menus {{ Request::is('beritaTags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('beritaTags.index') }}"><i class="fas fa-building"></i><span>Berita Tags</span></a>
</li>

