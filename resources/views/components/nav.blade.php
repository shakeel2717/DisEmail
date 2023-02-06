<ul class="nk-menu">
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Overview</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.dashboard.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-inbox-in-fill"></em></span>
            <span class="nk-menu-text">Inbox</span>
        </a>
    </li>
    <h6 class="overline-title text-primary-alt mt-4">Domain Manager</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.domain.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-at"></em></span>
            <span class="nk-menu-text">Manage Domain</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Exit</h6>
    </li>
    <li class="nk-menu-item">
        <a href="javascript:void(0);" onclick="document.getElementById('logout').submit();" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-arrow-left-fill-c"></em></span>
            <span class="nk-menu-text">Logout</span>
        </a>
    </li>
</ul>