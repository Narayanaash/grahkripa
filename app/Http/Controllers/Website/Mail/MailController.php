<?php

namespace App\Http\Controllers\Website\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use App\Http\Controllers\Controller;
use DB;
use App\Mail\ContactEmail;

class MailController extends Controller
{

    public function newMail(Request $request)
    {
        $ch = curl_init();
        $method_request = "POST";
        $header = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer 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'
        );
        $data = '{"personalizations": [{"to": [{"email": "ankm786@gmail.com"}]}],"from": {"email": "test@example.com"},"subject": "Sending with SendGrid is Fun","content": [{"type": "text/plain", "value": "and easy to do anywhere, even with cURL"}]}';

        curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
        // SSL important
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

        $output = curl_exec($ch);
        curl_close($ch);


        dd(json_decode($output));
       
    }

    public function sendMail(Request $request)
    {

    $request->validate([
        'name'   => 'required',
        'gender' => 'required',
        'date' => 'required',
        'time' => 'required',
        'place' => 'required',
        'phone' => 'required | numeric',
    ]);

     $name    = $request->input('name');
     $gender  = $request->input('gender');
     $date    = $request->input('date');
     $time    = $request->input('time');
     $place   = $request->input('place');
     $email   = $request->input('email');
     $phone   = $request->input('phone');
     $message = $request->input('message');


     $html = '<center><h2>Someone sent you a query from Grahkripa.com</h2></center>
            <table border=1 style="border-collapse: collapse;width:100%;border: 1px solid #999;text-align:center; margin: auto;">
            <tbody>
            <tr>
            <th style="padding:10px;background:#f9d776">Name</th>
            <th style="padding:10px;background:#f9d776">Gender</th>
            <th style="padding:10px;background:#f9d776">Date</th>
            <th style="padding:10px;background:#f9d776">Time</th>
            <th style="padding:10px;background:#f9d776">Place</th>
            <th style="padding:10px;background:#f9d776">Email</th>
            <th style="padding:10px;background:#f9d776">Phone</th>
            </tr>
            <tr>
            <td style="padding:10px;background:#d1fdff">'.$name.'</td>
            <td style="padding:10px;background:#d1fdff">'.$gender.'</td>
            <td style="padding:10px;background:#d1fdff">'.$date.'</td>
            <td style="padding:10px;background:#d1fdff">'.$time.'</td>
            <td style="padding:10px;background:#d1fdff">'.$place.'</td>
            <td style="padding:10px;background:#d1fdff"><a href="mailto:'.$email.'">'.$email.'</a></td>
            <td style="padding:10px;background:#d1fdff"><a href="tel:'.$phone.'">'.$phone.'</a></td>
            </tr>

            </tbody>
            </table>
            <div style="padding: 10px;background: #eeeeeea6;margin-top: 20px;width: 100%; text-align: center;">
            <h3 style="border-bottom: 1px solid #9e9b9b;padding-bottom: 10px;text-align: center;">Message</h3>
            <p>'.$message.'</p></div>';

    $data = [
        'message' => $html
    ];

      
     Mail::to('ankm786@gmail.com')->send(new ContactEmail($data));

     return redirect()->back();





    }
}
?>