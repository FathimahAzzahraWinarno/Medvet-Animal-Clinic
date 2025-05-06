<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback', ['feedbacks' => $feedbacks]);
    }

    public function createFeedback(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'pesan' => 'required|string',
        ]);

        $id_user = Auth::check() ? Auth::user()->id : 'guest';

        Feedback::create([
            'id_user' => $id_user,
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect()->back()->with('success', 'Terima Kasih atas feedbacknya!');
    }
}
