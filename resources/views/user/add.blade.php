@extends('app')

@section('content')
<div class="row">
    <div class="col-md-9 col-lg-9 col-xl-8">
        <form method="POST" action="{{route('guest.store')}}">
            @csrf
            <div class="form-group required control-label">
                <label for="guest_name">Name</label>
                <input type="text" name="guest_name" class="form-control" value="{{ old('guest_name') }}" id="guest_name" required aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Please type your name for further communication.</small>
                @error('guest_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group required control-label">
                <label for="guest_email">Email address</label>
                <input type="email" class="form-control" id="guest_email" name="guest_email" value="{{ old('guest_email') }}" required="required" aria-describedby="emailHelp" >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                @error('guest_email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="guest_message">Message</label>
                <textarea name="guest_message" id="guest_message" class="form-control" rows="5"></textarea>
                <small id="emailHelp" class="form-text text-muted">We are awaiting to converse with you further</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection
