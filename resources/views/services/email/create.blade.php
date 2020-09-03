@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Lion: important part here: it is part how to send the data through the request --}}
        {{-- Lion: fazer validation de ser email no validator--}}
        <form action="/mailinglist" enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-8 offset-2">

                <div class="row"><h2>Choose a subdomain to a new email:</h2></div>
                {{--Lion: here we will have a foreach for existing mailing lists too--}}
                <div class="form-group row pl-4 pt-4 d-inline">
                    <div class="pr-2">Available subdomains:</div>

                    <input type="radio" id="A" name="subdomain" value="A" class="pr-2 form-check d-inline" required>
                    <label for="A" class="pr-2"> @ciencias.fc.ul.pt</label>
                    <br>
                    <input type="radio" id="B" name="subdomain" value="B" class="pr-2 form-check d-inline" required>
                    <label for="B" class="pr-2"> @di.fc.ul.pt</label>
                    <br>
                    <input type="radio" id="C" name="subdomain" value="C" class="pr-2 form-check d-inline" required>
                    <label for="C" class="pr-2"> @navigators.fc.ul.pt</label>

                    @error('address')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>


                <div class="row pt-3">
                    <h2>Or you can ask to create an new alias:</h2>
                    <div class="form-group d-inline">

                        <label for="name" class="col-form-label">Add your new alias email:</label>

                        <input
                            id="name"
                            type="email"
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

                <div class="row pt-3">
                    <h2>And you can add a description for the alias:</h2>
                    <div class="form-group d-inline">

                        <label for="description" class="col-form-label">Description for this alias (optional):</label>

                        <input
                            id="description"
                            type="email"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            value="{{ old('name') }}"
                            required autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group row pt-4">
                    <button class="btn btn-primary">Ask a new alias</button>
                </div>
            </div>
        </form>
    </div>
@endsection
