<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:5|max:2000',
        ]);

        $validated['name'] = strip_tags($validated['name']);
        $validated['message'] = strip_tags($validated['message']);
        $validated['ip_address'] = $request->ip();

        $contact = Contact::create($validated);

        // Pre-build WhatsApp direct link for quick hand-off if user chooses to chat directly
        $waPhone = '628569052928';
        $waText = urlencode("Halo Alam Nuriansyah! Saya *{$contact->name}* ({$contact->email}).\n\nPesan: {$contact->message}");
        $waUrl = "https://wa.me/{$waPhone}?text={$waText}";

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil terkirim! Terima kasih telah menghubungi saya.',
                'wa_url' => $waUrl
            ]);
        }

        return back()->with('success', 'Pesan Anda berhasil terkirim! Saya akan segera menghubungi Anda kembali.');
    }
}
