@extends('layouts.dashboard')
@section('title', 'Add Balance')
@section('content')
<div class="row mt-5">
    <div class="intro-y col-md-8 mx-auto">
        <div class="intro-y box">
            <div class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                <h2 class="fw-medium fs-base me-auto">
                    @yield('title')
                </h2>
            </div>
            <div class="card-body">
                @livewire("user.add-balance")
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    function copyFunction() {
        var copyText = document.getElementById("link");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        navigator.clipboard.writeText(copyText.value);
    }
</script>
@endsection