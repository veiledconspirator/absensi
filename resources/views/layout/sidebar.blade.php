<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li>
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li>
            <a href="{{ route('siswas.index') }}" class="nav-link {{ request()->routeIs('siswas.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Siswa
                </p>
            </a>
        </li>

        <li>
            <a href="{{ route('teachers.index') }}"
                class="nav-link {{ request()->routeIs('teachers.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Guru
                </p>
            </a>
        </li>

        <li>
            <a href="{{ route('rooms.index') }}" class="nav-link {{ request()->routeIs('rooms.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Kelas
                </p>
            </a>
        </li>

        <li>
            <a href="{{ route('absences.index') }}"
                class="nav-link {{ request()->routeIs('absences.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Absensi
            </p>
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Rekap
            </p>
            </a>
        </li>

        {{-- misal kamu di suruh tambah menu yaa langkah pertama sekarang tambah sidebar dulu bosa/route dulu bisa  --}}
</nav>
