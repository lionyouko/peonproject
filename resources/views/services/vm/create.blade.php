 @extends('layouts.app')

@section('content')
<div class="container">
    {{-- Lion: important part here: it is part how to send the data through the request --}}
    <form action="/vm" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">

            <div class="row"><h2>Ask a new Virtual Machine</h2></div>

            <div class="form-group d-inline">

                <label for="name" class="col-md-4 col-form-label">Machine {{ __('Name') }}:</label>

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
            {{-- ram, hdd, os--}}
            <div class="form-group row pl-4 pt-4 d-inline">
                <div class="pr-2">Ram quantity:</div>

                <input type="radio" id="2" name="ram" value="2" class="pr-2" required>
                <label for="2" class="pr-2"> 2 GB</label>

                <input type="radio" id="4" name="ram" value="4" class="pr-2" required>
                <label for="4" class="pr-2"> 4 GB</label>

                <input type="radio" id="8" name="ram" value="8" class="pr-2" required>
                <label for="8" class="pr-2"> 8 GB</label>

                <input type="radio" id="16" name="ram" value="16" class="pr-2" required>
                <label for="16" class="pr-2"> 16 GB</label>

                <input type="radio" id="32" name="ram" value="32" class="pr-2" required>
                <label for="32" class="pr-2"> 32 GB</label>


                @error('ram')

                    <strong>{{ $message }}</strong>

                @enderror
            </div>

            <div class="form-group row pl-4 pt-4 d-inline">
                <div class="pr-2">HDD quantity:</div>

                <input type="radio" id="32" name="hdd" value="32" class="pr-2" required>
                <label for="32" class="pr-2"> 32 GB</label>

                <input type="radio" id="40" name="hdd" value="40" class="pr-2" required>
                <label for="40" class="pr-2"> 40 GB</label>

                <input type="radio" id="60" name="hdd" value="60" class="pr-2" required>
                <label for="60" class="pr-2"> 60 GB</label>

                <input type="radio" id="80" name="hdd" value="80" class="pr-2" required>
                <label for="80" class="pr-2"> 80 GB</label>

                <input type="radio" id="120" name="hdd" value="120" class="pr-2" required>
                <label for="120" class="pr-2"> 120 GB</label>



                @error('ram')

                <strong>{{ $message }}</strong>

                @enderror
            </div>

            <div class="form-group row pl-4 pt-4 d-inline">
                <div class="pr-2">Operating System:</div>

                <input type="radio" id="linux" name="os" value="linux" class="pr-2" required>
                <label for="linux" class="pr-2"> linux OS</label>

                <input type="radio" id="windows" name="os" value="windows" class="pr-2" required>
                <label for="windows" class="pr-2"> windows OS</label>


                @error('ram')

                <strong>{{ $message }}</strong>

                @enderror
            </div>

            <div class="form-group row pt-4">
                <button class="btn btn-primary">Ask the new VM</button>
            </div>
        </div>
    </form>
</div>
@endsection
