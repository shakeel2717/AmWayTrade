<a href="{{ route('user.history.tree', ['user' => $user->id]) }}">
    <div class="d-flex flex-column">
        <img src="{{ asset('assets/icons/user.png') }}" alt="Downline User" width="100">
        <div class="my-2">
            <p class="fs-lg">{{ $user->username }}</p>
            <p class="fs-lg">{{ env('APP_CURRENCY') }}{{ totalActiveInvest($user->id) }}</p>
        </div>
    </div>
</a>
