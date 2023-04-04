<?php
// CodeIgniter
public function send_mail()
    {
        // admin@virjual.com/GlobalVirJual55
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'pankaj09233@gmail.com', // change it to yours
            'smtp_pass' => 'ycbrvtsttyudoath', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE,
        );

        $message = 'Hello Test Mail Pankaj sahu';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('pankaj09233@gmail.com'); // change it to yours
        $this->email->to('pankaj.sahu@futurristic.com'); // change it to yours
        $this->email->subject('Test mail');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
?>