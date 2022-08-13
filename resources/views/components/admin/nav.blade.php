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


<li>
    <a href="{{ route('admin.history.users') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Users </div>
    </a>
</li>


<li>
    <a href="{{ route('admin.history.deposits') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Deposit </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.history.withdraws') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Withdraw </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.history.withdraws.pending') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Pending Withdraw </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.kyc.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Kyc Request </div>
    </a>
</li>

<li>
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="target"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
        Contest
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('admin.contest.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Contest </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.contest.create') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Add new Contest </div>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="{{ route('admin.history.rewards') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">Ranks & Reward </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.notification.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">All Notification </div>
    </a>
</li>

<li>
    <a href="{{ route('admin.notification.create') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">New Notification </div>
    </a>
</li>



<li>
    <a href="{{ route('admin.history.support') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Support Section </div>
    </a>
</li>


<li>
    <a href="{{ route('admin.setting.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="sliders"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Global Setting </div>
    </a>
</li>
