<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function sendEmail(Request $request){
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'dob' => 'required|max:255',
            'gender' => 'required|max:255',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'required|max:255',
            'courses' => 'required|max:255',
            'training-month' => 'required|max:255',
            'experience' => 'required|max:255',
            'loc-portal' => 'required|max:255',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
       
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);
       
        $data=[
            "first_name"=>$request->post('first_name'),
            "last_name"=>$request->post('last_name'),
            "dob"=>$request->post('dob'),
            "gender"=>$request->post('gender'),
            "email"=>$request->post('email'),
            "mobile"=>$request->post('mobile'), 
            "address"=>$request->post('address'),
            "courses"=>$request->post('courses'),
            "training-month"=>$request->post('training-month'),
            "experience"=>$request->post('experience'),
            "loc-portal"=>$request->post('loc-portal'),
            "message"=>$request->post('message'),
        ];
        $recipient = 'tejaswinipatil884@gmail.com';
        $subject = 'Appointment Message From Rosplasty Website - Dr. Kunal Makhija';    

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }            
}