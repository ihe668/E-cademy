<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function checkoutview(Course $course)
    {
        return view('user.checkout', \compact('course'));
    }
    public function redirectToGateway(Request $request, Enrollment $enrollment)
    {
        // dd($request);
        $enrollment = Enrollment::create([
            'amount' => $request->amount,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'course_id' => $request->course_id,
            'user_id' => Auth::user()->id,
            'currency' => $request->currency,
            'status' => $request->status,
            'is_credit' => true,
            'reference' => $request->reference,

        ]);

        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    public function handleGatewayCallback(Enrollment $enrollment)
    {
        $paymentDetails = \Paystack::getPaymentData();

        $reference = $paymentDetails['data']['reference'];
        $enrollment = Enrollment::where('reference', $reference)->first();
        $enrollment->status = 'success';

        Alert::success('Success', 'enrolled Successfully');
        $enrollment->save();
        return back();
    }
}
