<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $name = $validatedData['name'];
        $contactInfo = $validatedData['contact_info'];
        $subject = $validatedData['subject'];
        $message = $validatedData['message'];

        // Nomor WhatsApp Adm
        $adminWhatsapp = '+6281321514496'; // 

        // Buat link WhatsApp
        $whatsappLink = "https://api.whatsapp.com/send?phone=$adminWhatsapp&text=" . urlencode("Nama: $name\nKontak: $contactInfo\nSubject: $subject\nPesan: $message");

        return redirect($whatsappLink);
    }
}
