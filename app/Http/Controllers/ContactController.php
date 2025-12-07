<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Save to file as backup (since email might not be configured)
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now()->toDateTimeString(),
        ];

        $filePath = storage_path('app/contact_submissions.json');
        $submissions = [];
        
        if (file_exists($filePath)) {
            $submissions = json_decode(file_get_contents($filePath), true) ?? [];
        }
        
        $submissions[] = $data;
        file_put_contents($filePath, json_encode($submissions, JSON_PRETTY_PRINT));

        // Try to send email if configured
        try {
            $recipientEmail = config('mail.from.address');
            
            if (!$recipientEmail) {
                \Log::warning('Email not sent: MAIL_FROM_ADDRESS is not configured');
            } else {
                \Log::info('Attempting to send email to: ' . $recipientEmail);
                
                Mail::to($recipientEmail)->send(
                    new ContactFormMail(
                        $request->name,
                        $request->email,
                        $request->message,
                        $data['created_at']
                    )
                );
                
                \Log::info('Email sent successfully to: ' . $recipientEmail);
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Email sending failed: ' . $e->getMessage());
            \Log::error('Email error trace: ' . $e->getTraceAsString());
        }

        return back()->with('success', 'Thank you for your message! I\'ll get back to you soon.');
    }
}

