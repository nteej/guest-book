<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuestController extends Controller
{
    //
    public function index()
    {
        $guests = Guest::where('status','ACCEPTED')->orderBy('id','DESC')->paginate(15);
        return view('user.index', compact('guests'));
    }

    public function add()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'guest_name' => 'required|min:3',
            'guest_email' => 'required|email',
            'guest_message' => 'required|min:5'
        ], [
            'guest_name.required' => 'Your Name is required',
            'guest_email.required' => 'Email is required to contact you further'
        ]);
        if ($validatedData) {
            $data = $request->all();
            $guest = Guest::create($data);
            echo json_encode($guest);
        }
        return Redirect::to("/")->withSuccess('Great! Form successfully submit with validation.');
    }
}
