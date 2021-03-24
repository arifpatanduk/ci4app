<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/" class="list-group-item list-group-item-action py-2 ripple <?= ($active === 'home') ? 'active' : ''; ?>" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Home</span>
            </a>
            <a href="/pages/about" class="list-group-item list-group-item-action py-2 ripple <?= ($active === 'about') ? 'active' : ''; ?>">
                <i class=" fas fa-chart-area fa-fw me-3"></i><span>About</span>
            </a>
            <a href="/pages/contact" class="list-group-item list-group-item-action py-2 ripple <?= ($active === 'contact') ? 'active' : ''; ?>"><i class="fas fa-lock fa-fw me-3"></i><span>Contact</span></a>
            <a href="/komik" class="list-group-item list-group-item-action py-2 ripple <?= ($active === 'komik') ? 'active' : ''; ?>"><i class="fas fa-chart-line fa-fw me-3"></i><span>Komik</span></a>
        </div>
    </div>
</nav>
<!-- Sidebar -->