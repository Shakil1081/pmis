<div>
    @if (session()->has('message'))
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
            </div>
        </div>
    @endif

    @if (session()->has('status'))
        <div class="alert alert-border-success alert-dismissible fade show bg-white">
            <div class="d-flex align-items-center">
                <div class="font-35 text-success"><span class="material-icons-outlined fs-2">check_circle</span></div>
                <div class="ms-3">
                    <h6 class="text-success mb-0">Success !!</h6>
                    <div class="">{{ session('status') }}</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
