<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;

class EmailController extends Controller
{
    public function showEmailForm()
{
    // جلب جميع الإيميلات من قاعدة البيانات
    $emails = Email::all();

    // تمرير الإيميلات إلى الـ View
    return view('dashboard.pages.plans.sendspecial', compact('emails'));
}
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $input = [
            'name' => 'User', 
            'email' => $request->email,
            'title' => $request->title,
            'body' => $request->body,
        ];

        Mail::to($input['email'])->send(new TestMail($input));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
