<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <h3>Bootstrap Sidebar</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="active">
            <a href="#activitiesMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actividades</a>
            <ul class="collapse list-unstyled" id="activitiesMenu">
                <li>
                    <a href="{{route('activities.index')}}">Actividades</a>
                </li>
                <li>
                    <a href="{{route('activities.create')}}">Crear</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#teamsMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Equipos</a>
            <ul class="collapse list-unstyled" id="teamsMenu">
                <li>
                    <a href="{{route('teams.index')}}">Equipos</a>
                </li>
                <li>
                    <a href="{{route('teams.create')}}">Crear</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>