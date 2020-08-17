@extends('app')

@section('content')

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($guests as $guest)
            <tr>
                <th scope="row">{{$guest->id}}</th>
                <td>{{$guest->guest_name}}</td>
                <td>{{$guest->guest_email}}</td>
                <td style="max-width: 80%">{{$guest->guest_message}}</td>
                <td>{{$guest->status}}</td>
                <td><a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLink.com&display=popup">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-share" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.724 3.947l-7 3.5-.448-.894 7-3.5.448.894zm-.448 9l-7-3.5.448-.894 7 3.5-.448.894z"/>
                        <path fill-rule="evenodd" d="M13.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-6.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg> </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$guests->links()}}
@endsection