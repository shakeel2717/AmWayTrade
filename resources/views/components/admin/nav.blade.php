<li>
    <a href="{{ route('admin.dashboard.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Dashboard </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.finance.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Add Balance </div>
    </a>
</li>

