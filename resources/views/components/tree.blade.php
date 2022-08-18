<a href="{{ route('user.history.tree', ['user' => $user->id]) }}">
    <div class="d-flex flex-column w-40">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/profile/'.$user->profile) }}" alt="Downline User" width="50">
        </div>
        <div class="my-2">
            <p class="fs-lg">{{ $user->username }}</p>
            <p class="fs-lg">{{ env('APP_CURRENCY') }}{{ totalActiveInvest($user->id) }}</p>
        </div>
    </div>
</a>