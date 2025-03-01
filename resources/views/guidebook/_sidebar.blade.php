<ul>
    <li class="sidebar-header"><a href="{{ url('guidebook') }}" class="card-link">Guidebook</a></li>
    <li class="sidebar-section">
        <div class="sidebar-section-header">Overview</div>
        <div class="sidebar-item"><a href="{{ url('guidebook/about') }}" class="{{ set_active('guidebook/about*') }}">About</a></div>
    </li>

    <li class="sidebar-section">
        <div class="sidebar-section-header">Design guide</div>
        <div class="sidebar-item"><a href="{{ url('guidebook/traits-overview') }}" class="{{ set_active('guidebook/traits-overview*') }}">Traits</a></div>
    </li>
</ul>
