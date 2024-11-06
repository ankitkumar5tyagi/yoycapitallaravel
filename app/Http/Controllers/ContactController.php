<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Honeypot check
        if (!empty($request->input('honeypot'))) {
            return back()->with('error', 'Spam detected.');
        }

        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $email = $request->input('email');
        $message = $request->input('message');
        $mobile = $request->input('mobile');

        // Email validation using filter_var
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()->with('error', 'Invalid email format.');
        }
        
        //Mobile Validation
       if (!preg_match('/^[0-9]{10}$/', $mobile)) {
    return back()->with('error', 'Mobile number must be exactly 10 digits, and contain only numbers (0-9).');
}

        // Extract the domain
        $domain = substr(strrchr($email, "@"), 1);

        // Blocked domains list
        $blocked_domains = [
            'registry.godaddy',
            'carolinacommercialnc.com',
            'ix.netcom.com',
            'usda.gov',
            'comcast.net',
            'WRIGHTTRANS.COM',
            'JEEPTRANSPORT.COM',
            'ADEXPRESSTRUCKING.COM',
            'vrbank-suedoldenburg.de',
            'tshl-group.com',
            'qq.com',
            'ALWAYSTHERETRANS.COM',
            'KEYCARRIER.COM',
            'mtr.mx',
            'tbhmk.onmicrosoft.com',
            'dusal.com.ec',
            'yamaha-motor.com',
            'IowaDerm.com',
        ];

        // Check if the domain is in the blocked list
        if (in_array($domain, $blocked_domains)) {
            return back()->with('error', 'The domain of your email is blocked.');
        }

        // Spam email list
        $spam_list = [
            'prempaidids@gmail.com',
            'chenjian1972@gmail.com',
            'alicecolling04@gmail.com',
            'clappertruckingllc@gmail.com',
            'z-zhong@hotmail.com',
            'yunkai@hotmail.com',
            'specht999@hotmail.com',
            'skylarkeplin@icloud.com',
            'davroclements@gmail.com',
            'mavanderwerf@gmail.com',
            'ivatacneau@gmail.com',
            'loripyfer@gmail.com',
            'kevinjbristow@gmail.com',
            'trayveoniseminger@gmail.com',
            'aunthoohoo@gmail.com',
            'trayveoniseminger@gmail.com',
            'nnj91@aol.com',
            'lgregarek@yahoo.com',
            'MMKleis24@gmail.com',
            'cweifeng2002@yahoo.com',
            'wincecasia@gmail.com',
            'empirestate.incs@gmail.com',
            'huyhhh@yahoo.com',
            'carmac62@gmail.com',
            'ebkappel@gmail.com',
        ];

        // Check if email is in the spam list
        if (in_array($email, $spam_list)) {
            return back()->with('error', 'Your email is in the spam list.');
        }

        // Check if domain has valid MX records
        if (!$this->checkDomain($email)) {
            return back()->with('error', 'The domain of your email does not have valid MX records.');
        }

        // Check for non-English characters in the message
        if ($this->containsNonEnglishCharacters($message)) {
            return back()->with('error', 'Message contains non-English characters.');
        }

        // Send email
        $data = [
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        try {
            Mail::send(new ContactFormSubmission($data));
            return redirect()->back()->with('success', 'Thank you for your message! We’ll get back to you shortly.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }

    // Helper function to check domain MX records
    protected function checkDomain($email)
    {
        $domain = substr(strrchr($email, "@"), 1);
        return checkdnsrr($domain, 'MX');
    }

    // Helper function to detect non-English characters
    protected function containsNonEnglishCharacters($message)
    {
        return preg_match('/[^\x20-\x7E]/', $message);
    }
}