<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Accueil</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('students.index') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
         <i class="nav-icon fas fa-users"></i>
        <p>Etudiants</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('staffs.index') }}" class="nav-link {{ Request::is('staffs*') ? 'active' : '' }}">
         <i class="nav-icon fa-solid fa-user-tie"></i>
        <p>Staffs</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('campus.index') }}" class="nav-link {{ Request::is('campus*') ? 'active' : '' }}">
         <i class="nav-icon fa-solid fa-school"></i>
        <p>Campus</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-sitemap"></i>
        <p>Parcours</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('classes.index') }}" class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
         <i class="nav-icon fa-solid fa-user-tie"></i>
        <p>Classes</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('units.index') }}" class="nav-link {{ Request::is('units*') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-sitemap"></i>
        <p>UE</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('subjects.index') }}" class="nav-link {{ Request::is('subjects*') ? 'active' : '' }}">
         <i class="nav-icon fa-solid fa-list"></i>
        <p>Matières</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('notes.index') }}" class="nav-link {{ Request::is('notes*') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-list-ol"></i>
        <p>Notes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('assiduites.index') }}" class="nav-link {{ Request::is('assiduites*') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-calendar-check"></i>
        <p>Assiduité</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tickets.index') }}" class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
         <i class="nav-icon fa-solid fa-ticket"></i>
        <p>Tickets</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog"></i>
        <p>Utilisateurs</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('settings') }}" class="nav-link {{ Request::is('settings') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Reglages</p>
    </a>
</li>
