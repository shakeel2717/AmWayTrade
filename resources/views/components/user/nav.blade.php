<li>
    <a href="{{ route('user.dashboard.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Dashboard </div>
    </a>
</li>

<li>
    <a href="{{ route('user.deposit.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Add Balance </div>
    </a>
</li>

<li>
    <a href="{{ route('user.plans.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Plan Activate </div>
    </a>
</li>

<li>
    <a href="{{ route('user.withdraw.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Withdraw </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.deposit') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Deposits </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.withdraw') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Withdrawals </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.direct') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Direct Team </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.level1') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 1 </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.level2') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 2 </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.level3') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 3 </div>
    </a>
</li>

<li>
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="sliders"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            My Account
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.profile.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> My Profile </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.profile.change.password') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Change Password </div>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="{{ route('user.support.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="airplay"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Help / Support </div>
    </a>
</li>
