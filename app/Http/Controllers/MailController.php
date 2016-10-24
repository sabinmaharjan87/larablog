<?php
class MailController extends Controller{
public function Sending_Email()
{
   $this->call('GET','Email.test');
    return View('Email.test');
}

}
?>