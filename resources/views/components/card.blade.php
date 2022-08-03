<div class="row gap-y-6 mt-5">
    <div class="intro-y col-12">
        <div class="intro-y box">
            <div class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                <h2 class="fw-medium fs-base me-auto">
                    {{ $title }}
                </h2>
            </div>
            <div id="vertical-bar-chart" class="p-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
