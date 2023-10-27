<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::where("user_id", auth()->user()->getAuthIdentifier())->orderBy('created_at', 'desc')->paginate(3);
        return view('profile.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $rules = [
            'avatar' => 'image',
            'email' => 'required|email',
            'name' => 'required|string'
        ];

        $request->validate($rules);

        $user = User::findOrfail($id);

        if ($request->hasFile('image')) {
           $user->avatar_url = $request->file('avatar')->store('public/avatars');
        }
        
        $user->update($request->only('email', 'name'));

        return back()->with('success', 'Perfil actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function index(string $id)
    {
        //
    }

}
