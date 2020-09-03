 @extends('layouts.app')

@section('content')
<div class="container">
    {{-- Lion: important part here: it is part how to send the data through the request --}}
    <form action="/mailinglist" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">

            <div class="row"><h2>Choose to enter in a mailing list</h2></div>
            {{--Lion: here we will have a foreach for existing mailing lists too--}}
            <div class="form-group row pl-4 pt-4 d-inline">
                <div class="pr-2">Available mailing lists:</div>

                <input type="radio" id="A" name="address" value="A" class="pr-2 form-check d-inline" required>
                <label for="A" class="pr-2"> List A</label>
                <br>
                <input type="radio" id="B" name="address" value="B" class="pr-2 form-check d-inline" required>
                <label for="B" class="pr-2"> List B</label>
                <br>
                <input type="radio" id="C" name="address" value="C" class="pr-2 form-check d-inline" required>
                <label for="C" class="pr-2"> List C</label>

                @error('address')

                <strong>{{ $message }}</strong>

                @enderror
            </div>

            <div class="row pt-3">
                <h2>Or you can ask to create one:</h2>
                <div class="form-group d-inline">

                    <label for="name" class="col-form-label">New Mailing list:</label>

                    <input
                        id="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        value="{{ old('name') }}"
                        required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="form-group row pt-4">
                <button class="btn btn-primary">Ask to enter in the new mailing list</button>
            </div>
        </div>
    </form>
</div>
@endsection
