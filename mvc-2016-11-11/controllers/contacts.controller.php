<?php

class ContactsController extends Controller
{
    public function index(){
    }

    public function send()
    {
        if (!empty($_POST))
        {
            $_SESSION['contact_data'] = $_POST;
            $messageModel = new Message();
            $messageModel->setMessage($_POST);
        }
    }

    public function list_messages()
    {
        $messageModel = new Message();
        $messages = $messageModel->getMessages();
        echo '<p>messages: </p><pre>' . var_export($messages, 1) . '</pre>';
    }
}