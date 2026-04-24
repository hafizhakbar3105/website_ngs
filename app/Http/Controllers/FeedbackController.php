<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menyimpan Feedback dari Publik
    public function storePublic(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create([
            'rating' => $request->rating,
            'name' => $request->name,
            'company' => $request->company,
            'message' => $request->message,
            // Secara default, is_featured adalah false. Admin harus menyetujuinya dulu.
            'is_featured' => false, 
        ]);

        // Gunakan sweetalert/alert session di Blade nanti untuk menangkap ini
        return back()->with('success', 'Terima kasih! Feedback Anda telah berhasil dikirim.');
    }

    // Toggle status tampil/tidak di home publik (Admin Action)
    public function toggleFeatured($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->is_featured = !$feedback->is_featured;
        $feedback->save();

        return back();
    }

    // Menghapus feedback (Admin Action)
    public function destroy($id)
    {
        Feedback::findOrFail($id)->delete();
        return back()->with('success', 'Ulasan berhasil dihapus.');
    }
}
