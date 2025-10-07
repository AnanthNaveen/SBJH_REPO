<style>
    /* ---------------------------
   Sidebar Button Styles Only
---------------------------- */

.sidenavbar .nav-link {
    display: flex;
    align-items: center;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 500;
    color: white;              /* dark text for white bg */
    background: #1e7d42;
    transition: all 0.3s ease;
}

.sidenavbar .nav-link i {
    font-size: 1rem;
    margin-right: 8px;
    color: white;              /* subtle gray for icons */
}

/* Hover effect */
.sidenavbar .nav-link:hover {
    background: #FCAC01;      /* very light green tint */
    color: white;
    transform: scale(1.05);
}

/* Active link */
.sidenavbar .nav-link.active {
    background: #FCAC01;      /* solid green highlight */
    color: #fff;
    font-weight: 600;
    border-left: 4px solid #14532d;
}

.sidenavbar .nav-link.active i {
    color: #fff;
}

/* RedFlash special button */
.sidenavbar .nav-link.redflash {
    background: #1e7d42;
    color: #fff;
}
.sidenavbar .nav-link.redflash:hover {
    background: #DC3545;
}
</style>
{{-- <div class="container flex-grow-1 p-2 sub-content bg-light d-flex flex-column ">
    <ul class="nav d-grid gap-4 flex-column mt-5">
        <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'doctpanel.indexopd' ? 'active' : '' }}" href="{{ url('/doctpanel/opd_pages.indexopd') }}">
                <i class="fas fa-user-md me-2"></i> OPD
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexipd') }}"><i class="fas fa-clinic-medical me-2"></i>IPD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexschedule') }}"><i class="fas fa-tasks me-2"></i>SCHEDULE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexmis') }}"><i class="fas fa-folder-open me-2"></i>MIS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link redflash" href="{{ url('/doctpanel/indexredflash') }}" ><i class="fas fa-bolt me-2"></i></a>
        </li>
    </ul>
</div> --}}

<div class="container flex-grow-1 p-2 sub-content bg-light d-flex flex-column ">
    <ul class="nav d-grid gap-4 flex-column mt-5">
        <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'doctpanel.indexopd' ? 'active' : '' }}" href="{{ url('/doctpanel/opd_pages.indexopd') }}">
                <i class="fas fa-user-md me-2"></i> OPD
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexipd') }}"><i class="fas fa-clinic-medical me-2"></i>IPD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexschedule') }}"><i class="fas fa-tasks me-2"></i>SCHEDULE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctpanel/indexmis') }}"><i class="fas fa-folder-open me-2"></i>MIS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link redflash" href="{{ url('/doctpanel/indexredflash') }}" ><i class="fas fa-bolt me-2"></i>RED FLAG</a>
        </li>
    </ul>
</div>