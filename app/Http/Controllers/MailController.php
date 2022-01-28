<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailController extends Controller
{

    public function index()
    {
        $mails = Mailbox::all();
        return view('admin.mail.main', compact('mails'));
    }


    public function store(Request $request)
    {
        request()->validate([
            "message" => ["required"],
            "name" => ["required"],
            "email" => ["required"],
            "subject" => ["required"],
        ]);

        $mail = new Mailbox();
        $mail->subject = $request->subject;
        $mail->email = $request->email;
        $mail->name = $request->name;
        $mail->message = $request->message;
        $mail->save();
        return redirect()->back()->with('success','message bien envoyé');
    }

    public function destroy(Mailbox $mailbox)
    {
        $mailbox->delete();
        return redirect()->back()->with('warning', "mail delete");
    }
}
