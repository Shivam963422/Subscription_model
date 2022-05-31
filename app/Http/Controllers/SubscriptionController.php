<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionModel;
use Validator;
use DB;
use Illuminate\Support\Facades\Schema;
use App\Mail\SendMail;
use Mail;

class SubscriptionController extends Controller
{
  
    public function __construct()
    {
    
    }

    //------------------------------------------------------------------

    public function index(Request $request)
    {
        return view('subscription-form');
    }

    //-------------------------------------------------------------------

   
    public function save(Request $request)
    {

      $validator = Validator::make(
                        $request->all(), [

                    'email' => 'required|email|unique:subscribed_emails',
                    
                        ]
        );

      if ($validator->fails()) {
            $messages = $validator->messages();
            // return response()->json([
            //             'status' => 0,
            //             'errors' => $messages,
            //             'message' => "Unable to create"
            // ]);

            return back()->with('Unable to create', $messages);
        }


        $subscription = new SubscriptionModel;

        $subscription->email = $request->email;
        

        $subscription->save();
        
        return back()->with('success', 'Thank you for subscription!');




    }

    //-------------------------------------------------------------------

    public function adminPostFormIndex(Request $request)
    {
       return view('admin-post-from');
    }

    //--------------------------------------------------------------------

    public function sendEmailToSubscribers(Request $request)
    {

        $subscription = new SubscriptionModel;

        $data = $subscription->get();

        $message  = $request->message;

        foreach ($data as $key => $value) {

            Mail::to($value->email)
                ->send(new SendMail($message));
        }

        return back()->with('success', 'Post Created And Mailed!');

    }





}
//end of class
//end of file





