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
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="shopping-bag"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
        Fund Deposit
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.deposit.index') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Fund Deposit </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.deposit') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> All Deposits </div>
            </a>
        </li>
    </ul>
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
    <a href="javascript:;" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="dollar-sign"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            My Tree
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.history.tree',['user' => auth()->user()->id]) }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> My Tree </div>
            </a>
        </li>

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
    <a href="{{ route('user.history.recent') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="list"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Recent Transaction </div>
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
        <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="dollar-sign"></i> </div>
        <div class="{{ $mode == true ? 'side-' : '' }}menu__title">
            Earning
            <div class="{{ $mode == true ? 'side-' : '' }}menu__sub-icon"> <i data-feather="chevron-down"></i>
            </div>
        </div>
    </a>
    <ul class="{{ $mode == true ? 'side-' : '' }}menu__sub">
        <li>
            <a href="{{ route('user.history.profit') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Daily Income </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.direct.commission') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Direct Commission </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.indirect.commission.level1') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct 1 Commission </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.indirect.commission.level2') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct 2 Commission </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.indirect.commission.level3') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> In-Direct 3 Commission </div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.history.passive.1') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Uni-Level 1 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.2') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Uni-Level 2 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.3') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Uni-Level 3 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.4') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Uni-Level 4 </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.history.passive.5') }}" class="{{ $mode == true ? 'side-' : '' }}menu">
                <div class="{{ $mode == true ? 'side-' : '' }}menu__icon"> <i data-feather="corner-down-right"></i>
                </div>
                <div class="{{ $mode == true ? 'side-' : '' }}menu__title"> Uni-Level 5 </div>
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
