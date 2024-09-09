<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    public function index(): View
    {
        return view('frontend.contact');
    }

    public function send(SendContactRequest $request): RedirectResponse
    {
        //        dd($request->all());
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(trans('alerts.frontend.contact.sent'));
    }
}
