<li>
    <a href="{{ route('user.dashboard.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="monitor"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Dashboard </div>
    </a>
</li>

<li>
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="sliders"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            Profile
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
    <a href="{{ route('user.deposit.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="shopping-bag"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Fund Deposit </div>
    </a>
</li>

<li>
    <a href="{{ route('user.plans.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="shopping-cart"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Buy Package </div>
    </a>
</li>

<li>
    <a href="{{ route('user.withdraw.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="dollar-sign"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Withdraw </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.tree',['user' => auth()->user()->id ]) }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Downline Tree </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.recent') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Recent Transaction </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.deposit') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Deposits </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.profit') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Daily Profit </div>
    </a>
</li>

<li>
    <a href="{{ route('user.history.withdraw') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Withdrawals </div>
    </a>
</li>

<li>
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="users"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            My Team
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.history.direct') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Direct Team </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.level1') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 1 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.level2') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 2 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.level3') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct Level 3 </div>
            </a>
        </li>

    </ul>
</li>

<li>
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="dollar-sign"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            Passive Income
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.history.passive.1') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Level 1 Income </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.2') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Level 2 Income </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.3') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Level 3 Income </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.4') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Level 4 Income </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.5') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Level 5 Income </div>
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="{{ route('user.kyc.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="lock"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> KYC </div>
    </a>
</li>

<li>
    <a href="{{ route('user.notification.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="help-circle"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Notifications </div>
    </a>
</li>

<li>
    <a href="{{ route('user.support.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="help-circle"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Help / Support </div>
    </a>
</li>
<li>
    <a href="{{ route('user.history.support') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="message-square"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Support Tickets </div>
    </a>
</li>
