<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        //        dd($request->all());
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(trans('alerts.frontend.contact.sent'));
    }
}
