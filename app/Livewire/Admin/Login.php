<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $username = "";
    public string $password = "";

    public function auth()
    {
        if (User::where('username', $this->username)->get()->count() == 0)
            return redirect(route('login'))->with('error', "User tdk ada");
        if (auth()->attempt([
            'username' => $this->username,
            'password' => $this->password
        ])) return redirect(route('dashboard'))->with('status', "Berhasil login");
        return redirect(route('login'))->with('error', "Gagal Login");
    }

    #[Layout('layouts.admin.base')]
    public function render(): View
    {
        return view('livewire.admin.login');
    }
}
