<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller;
use App\Models\Age;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function  showRegistrationForm()
    {
        // Fetch the list of tribes from the database
        // $gender = Genders::all(); // Adjust as per your table and model

        // Pass the list of Gener to the view
        return view('auth.register');
    }

    public function register(Request $request)
    {
        Log::info($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'password' => 'required|string|min:4',
        ]);
        Log::info($validatedData);

        // Create the user in the database
        $user = new User([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'password' => Hash::make($validatedData['password']),
        ]);
        $user->save();

         // AI-Based Redirection Logic
         if ($user->age < 18) {
            return redirect('/young');
        } elseif ($user->age >= 18 && $user->age <= 40) {
            return redirect('/adults');
        } else {
            return redirect('/seniors');
        }
    }

    public function create(array $data)
    {
        // Create a new user and hash the password
        $user = User::create([
            'name' => $data['name'],
            'age' => $data['age'],
            'password' => Hash::make($data['password']),
        ]);

        return $user; // Return the created user
    }
}
