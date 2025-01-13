<!-- Vertical Navbar -->
<div class="navbar-vertical w-100 text-center h-100" style="background-color: rgb(207, 207, 207);">
    <img src="{{asset('asset/icons/avatar.png')}}" style="width: 150px" alt="Profile Picture" class="profile-pic">
    <ul class="nav flex-column mt-4">
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="{{route('dashboard_admin')}}">
        <i class="bi bi-house-door"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="{{route('galeri.index')}}">
        <i class="bi bi-person"></i> Add Image
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="{{route('proyek.index')}}">
        <i class="bi bi-gear"></i> Add Project
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="{{route('testimoni.index')}}">
        <i class="bi bi-gear"></i> View Testimoni
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="#">
        <i class="bi bi-box-arrow-right"></i> Order
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-2 px-3 text-dark" href="{{route('contact_us.index')}}">
        <i class="bi bi-box-arrow-right"></i> Suggestions Box
        </a>
    </li>
    </ul>
</div>