<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $user = User::find(1);

        // $user = User::query()->create([
        //     'name'     => 'Stephanie Paiva',
        //     'email'    => 'stephanie@gmail.com',
        //     'password' => 'jeremias',

        // ]);
        
        // $user->email_verified_at = now();

        // $user->save();

        // $user->update(['email_verified_at' => now()]);

        // $user->email_verified_at = now();
        // $user->save();
        // $user->update(['email_verified_at' => now()->subMonths(10)]);
        // dd($user->email_verified_at->diffForHumans());

        // return WelcomeController::class;
        return view('welcome');
        //
    }
}
