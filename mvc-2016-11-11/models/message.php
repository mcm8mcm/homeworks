<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 11.11.2016
 * Time: 19:35
 */

class Message extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setMessage($data)
    {
        if (!empty($data))
        {
            if (empty($data['name'])) {
                $_SESSION['error_msg'] = '<strong>Name</strong> can`t be empty!';
                Router::gotoUrl('/contacts');
            }
            if (empty($data['email'])) {
                $_SESSION['error_msg'] = '<strong>Email</strong> can`t be empty!';
                Router::gotoUrl('/contacts');
            }
            if (! filter_var($data['email'], FILTER_VALIDATE_EMAIL))
            {
                $_SESSION['error_msg'] = '<strong>Email</strong> is invalid!';
                Router::gotoUrl('/contacts');
            }
            if (empty($data['message'])) {
                $_SESSION['error_msg'] = '<strong>Message</strong> can`t be empty!';
                Router::gotoUrl('/contacts');
            }
            $name = strip_tags($this->db->escape($data['name']));
            $email = $this->db->escape($data['email']);
            $message = strip_tags($this->db->escape($data['message']));
            $sql = "INSERT INTO `messages`(`name`, `email`, `message`) VALUES('{$name}', '{$email}', '{$message}')";
            // echo $sql;
            // exit;
            $res = $this->db->query($sql);
            // echo '<!-- Insert result: ' . var_export($res, 1) . ' -->' . PHP_EOL;
            if ($res !== false) {
                $_SESSION['contact_send_status'] = 'Спасибо, ваше сообщение добалвено в базу.';
                if (isset($_SESSION['error_msg'])) {
                    unset($_SESSION['error_msg']);
                }
                if (isset($_SESSION['contact_data']['message'])) {
                    unset($_SESSION['contact_data']['message']);
                }
                return true;
            }
            $_SESSION['contact_send_status'] = 'Ошибка добавления в базу!';
            return false;
        }
    }

    public function getMessages()
    {
        $sql = "SELECT * FROM `messages`";
        $messages = $this->db->query($sql);
        return $messages;
    }
}