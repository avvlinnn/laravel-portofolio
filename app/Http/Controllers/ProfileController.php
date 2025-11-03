<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "Awalin Nisa'ul M.✨";
        $nim = "2023150016";
        $tagline = "Code. Coffee. Repeat. 🚀";
        $bio = "Mahasiswi TI yang lagi survive di dunia koding, tapi tetep nyempetin healing lewat film & buku. Motto hidup: jangan panik, itu cuma error 😎";
        $fav_tools = ["ChatGPT", "Gemini", "Claude", "Copilot"];
        $github = "github.com/avvlinnn";

        return view('profile.index', compact('nama', 'nim', 'tagline', 'bio', 'fav_tools', 'github'));
    }
}
