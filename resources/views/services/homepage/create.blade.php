 @extends('layouts.app')

@section('content')
<div class="container">
    {{-- Lion: important part here: it is part how to send the data through the request --}}
    <form action="/homepage" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-8 offset-2">

            <div class="row"><h3>Add New Post</h3></div>
            <div class="row text-body">
                Your new homepage will have the following convention name:
                <br>
                <br>
                When ready, It will be available at:
                <br>
                <br>
                You will be able to consult all your available homepages from your dashboard.
            </div>

            <div class="form-group row pt-4">
                <button class="btn btn-primary">Ask to create a new homepage</button>
            </div>
        </div>
    </form>
</div>
@endsection
