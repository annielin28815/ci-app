<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $this->sendTestEmail();
        return view("Home/index.php");
    }

    private function sendTestEmail()
    {
        $email = \Config\Services::email();

        $email->setTo("annielin28815@gmail.com");

        $email->setSubject("Test Email");
        $email->setMessage("Hello from <i>CodeIgniter</i>");

        if ($email->send()) {
            echo "Email sent";
        } else {
            echo "Email not sent";
        }
    }
}
