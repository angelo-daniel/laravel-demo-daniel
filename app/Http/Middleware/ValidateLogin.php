<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isMethod('post')){
            $validatedData = $request->only('username', 'password');

            $username = "admin";
            $password = "admin";

            if($validatedData['username'] === $username && $validatedData['password'] === $password){
                // return redirect()->route('gotodashboard');
                // return redirect()->away('https://netflix.com'); //redirecting to other sites
                // return response()->json($data, 200, $headers);

                // return redirect()->route('gotodashboard')->with('confirm', 'LOGIN SUCCESSFULLY!');
                return response()->json("Successfully Login");
            }else{
                return redirect()->back()->withErrors([$username => 'username or password is incorrect!']);
            }
        }
        return $next($request);
    }
}
