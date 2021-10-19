<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function hire(){
        return view('front.hire');
    }

    public function finance(){
        return view('front.finance');
    }

    public function parts(){
        return view('front.parts');
    }

    public function sevices(){
        return view('front.sevices');
    }

    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact');
    }

    public function washMAX1000(){
        return view('front.washMAX1000');
    }

    public function washMAX1500(){
        return view('front.washMAX1500');
    }

    public function washMAX3000(){
        return view('front.washMAX3000');
    }
    
    public function washMAX6000(){
        return view('front.washMAX6000');
    }

    public function washMAX8000(){
        return view('front.washMAX8000');
    }

    public function washMAX9000(){
        return view('front.washMAX9000');
    }

    public function washMAX4000(){
        return view('front.washMAX4000');
    }

    public function contact_submit(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],           
            'email' => ['required', 'string'],
            'comment' => ['required'],
        ]);    
        
        
        $to = 'washmax@allflowsystems.com.au';
        $sender_name = $request['name'];
        $sender_email = $request['email'];
        $comment = $request['comment'];

        $subject = "Contact Information";
        $emailFrom = $sender_email;
        
        $message = '<body >
            <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                    <tr>
                        <td style="font-size:14px; color:#323232">User Name</td>
                    </tr>
                    <tr>
                        <td style="font-size:16px; font-weight:bold"><strong>' . $sender_name .'</strong></td>
                    </tr>
                    
                    <tr>
                        <td style="font-size:14px; color:#323232">User Email</td>
                    </tr>
                    <tr>
                        <td style="font-size:16px; font-weight:bold"><strong>' . $sender_email .'</strong></td>
                    </tr>

                    <tr>
                        <td style="font-size:14px; color:#323232">Comment</td>
                    </tr>
                    <tr>
                        <td style="font-size:16px; font-weight:bold"><strong>' . $comment .'</strong></td>
                    </tr>

                   
                </table>
            </div>
        </body>
        ';
       
        $headers = "From:" . $emailFrom . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
      
        mail($to,$subject,$message,$headers);

        return back()->with('success', 'Successfully sent');  

    }

}
