 @extends('layouts.app')

@section('content')
<div class="container">
    {{-- Lion: important part here: it is part how to send the data through the request --}}
    <form action="/vpn" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">

            <div class="row"><h3>Ask new VPN</h3></div>
            <div><h5>You can insert an description for your new VPN.</h5>
                <p>For example: "Access to the faculty staff intranet"</p>
                <p>If you don't add a description, a default description will
                be created as < username>_vpn_< creation-date></p>
                <p>All available VPNs will be displayed in a link withing your dashboard</p>
            </div>
            <div class="form-group row d-inline">

                <label for="description" class="col-md-4 col-form-label text-md-left">VPN {{ __('Description') }}:</label>

                <input
                    id="description"
                    type="text"
                    class="form-control @error('description') is-invalid @enderror"
                    name="caption"
                    value="{{ old('description') }}"
                    required autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group row pt-4">
                <button class="btn btn-primary">Ask new VPN</button>
            </div>
        </div>
    </form>
</div>
@endsection
