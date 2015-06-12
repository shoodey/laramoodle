<div class="row">
    <div class="col-md-10 col-md-offset-1">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>