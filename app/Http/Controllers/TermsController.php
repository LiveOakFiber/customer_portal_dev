<?php

namespace App\Http\Controllers;

use App\SystemSetting;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Factory;
use Illuminate\View\View;
use SonarSoftware\CustomerPortalFramework\Controllers\AccountAuthenticationController;
use SonarSoftware\CustomerPortalFramework\Controllers\ContactController;
use SonarSoftware\CustomerPortalFramework\Models\Contact;
use SonarSoftware\CustomerPortalFramework\Models\PhoneNumber;

class TermsController extends Controller
{
    public function show(): Factory|View
    {
        /*$user = get_user();
        $contact = $this->getContact();
        //Format the phone numbers into something usable by the form
        $phoneNumbers = [
            PhoneNumber::WORK => null,
            PhoneNumber::MOBILE => null,
            PhoneNumber::HOME => null,
            PhoneNumber::FAX => null,
        ];

        foreach ($contact->getPhoneNumbers() as $phoneNumber) {
            if ($phoneNumber != null) {
                $phoneNumbers[$phoneNumber->getType()] = $phoneNumber->getNumber();
            }
        }
        $country = SystemSetting::first()->country;*/

        return view('pages.terms.index');
    }
}

?>