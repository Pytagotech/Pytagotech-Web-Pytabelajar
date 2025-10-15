<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonyController extends Controller
{
    // Tampilkan semua testimoni (halaman utama)
    public function index()
    {
        // Data testimoni tetap ditampilkan
        $testimonies = Testimony::with('user')->latest()->get();

        // Ambil juga services biar ga error
        $services = \App\Models\Service::all();

        return view('pages.index', compact('testimonies', 'services'));
    }

    // Form tambah testimoni
    public function create()
    {
        return view('pages.testimonies.create');
    }

    // Simpan testimoni baru
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        Testimony::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'rating' => $request->rating ?? 5,
        ]);

        // Setelah berhasil, balik ke halaman utama (home) supaya service tetap tampil
        return redirect()->route('home')->with('success', 'Testimoni berhasil dikirim!');
    }

    // Edit testimoni
    public function edit(Testimony $testimony)
    {
        $this->authorize('update', $testimony);
        return view('pages.testimonies.edit', compact('testimony'));
    }

    // Update testimoni
    public function update(Request $request, Testimony $testimony)
    {
        $this->authorize('update', $testimony);

        $request->validate([
            'message' => 'required|string|max:500',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $testimony->update([
            'message' => $request->message,
            'rating' => $request->rating ?? 5,
        ]);

        return redirect()->route('home')->with('success', 'Testimoni berhasil diperbarui!');
    }

    // Hapus testimoni
    public function destroy(Testimony $testimony)
    {
        $this->authorize('delete', $testimony);
        $testimony->delete();

        return redirect()->route('home')->with('success', 'Testimoni berhasil dihapus!');
    }
}
