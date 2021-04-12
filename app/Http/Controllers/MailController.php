<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Izbassar';
        $objDemo->receiver = 'Nurlan';

        Mail::to("190103262@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));

        echo "Sent successfully";
        echo "<br>";
        echo "<a href='appointment'>Go back</a>";
    }
}
