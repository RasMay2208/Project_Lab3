<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.list', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only(['username', 'email']));
        return redirect()->route('users.index');
    }
    public function update1(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validate dữ liệu nhập vào
    $request->validate([
        'username' => 'required',
        'email' => 'required|email',
    ]);

    // Cập nhật thông tin user
    $user->update($request->only(['username', 'email']));

    return redirect()->route('users.show', $user->id)
                     ->with('success', 'Thông tin người dùng đã được cập nhật thành công!');
}

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index');
    }
}

