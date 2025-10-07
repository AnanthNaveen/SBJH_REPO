<style>
    .drname {
        color: #000;
        font-weight: 500;
    }

    .positions {
        font-size: 14px;
        color: #444;
    }

    /* Mobile view adjustments */
    @media (max-width: 768px) {
        .drname {
            font-weight: 100;
            font-size: smaller;
        }

        .positions {
            font-size: 12px;
        }

        .navbar-brand img {
            width: 160px;
            /* shrink logo */
            height: auto;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark mx-auto" style="max-height:100px; overflow: hidden;max-width:95%;">
    <!-- Logo on the left -->
    <a class="navbar-brand d-flex align-items-center py-1" href="#">
        <img src="{{ asset('Image/logo.png') }}" alt="Logo" width="300px" height="80px" class="img-fluid">
    </a>

    <!-- Right-aligned profile section -->
    <div class="ms-auto d-flex align-items-center">
        <div class="text-end me-3">
            <div class="drname">Dr.SIVAMURUGAN</div>
            <div class="positions">Senior Consultant</div>
        </div>
        <i class="fas fa-user-circle" style="font-size:36px;color:#126328;"></i>
    </div>

    <!-- Mobile Menu Toggle Button -->
    <div class="d-flex justify-content-between align-items-center mob_tabheader d-lg-none p-2 border-bottom">
        <button class="btn btn-outline-success menu-toggle" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu">
            ☰
        </button>
    </div>
</nav>
