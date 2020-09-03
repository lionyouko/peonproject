 @extends('layouts.app')

@section('content')
<div class="container">
    {{-- Lion: important part here: it is part how to send the data through the request --}}
    <form action="/subdomainaccess" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">

            <div class="row text-left"><h2>Choose one subdomain to have access:</h2></div>
            <h5 class="text-justify">You will be able to choose more at once soon</h5>
            <div class="form-group row pl-4 pt-4 d-inline">
                <div class="pr-2">Online subdomains</div>
                {{--Lion: we will search db to the subdomains and make a foreach here
                puting the description and the name too--}}
                <input type="radio" id="admin.di.fc.ul.pt" name="address" value="admin.di.fc.ul.pt" class="pr-2 form-check d-inline" required>
                <label for="admin.di.fc.ul.pt" class="pr-2"> http://admin.di.fc.ul.pt</label>
                <br>
                <input type="radio" id="http://fenix.ciencias.ulisboa.pt" name="address" value="http://fenix.ciencias.ulisboa.pt" class="pr-2 form-check d-inline" required>
                <label for="http://fenix.ciencias.ulisboa.pt" class="pr-2"> http://fenix.ciencias.ulisboa.pt</label>
                <br>
                <input type="radio" id="http://listas.di.ciencias.ulisboa.pt/sympa/home" name="address" value="http://listas.di.ciencias.ulisboa.pt/sympa/home" class="pr-2 form-check d-inline" required>
                <label for="http://listas.di.ciencias.ulisboa.pt/sympa/home" class="pr-2 "> http://listas.di.ciencias.ulisboa.pt/sympa/home</label>

                @error('address')

                <strong>{{ $message }}</strong>

                @enderror
            </div>

            <div class="form-group row pt-4">
                <button class="btn btn-primary">Ask to enter in the new list</button>
            </div>
        </div>
    </form>
</div>
@endsection
