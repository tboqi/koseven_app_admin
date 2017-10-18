<?php
class Controller_Login extends Controller_Base {

    protected $show_header = false;
    protected $need_login = false;

    function action_index() {
        if ($this->request->method() == 'POST') {
            $post = $this->request->post();
            $account = $post['username'];
            $password = $post['password'];

            $auth = Auth_Mysql::instance();
            if ($user = $auth->login($account, $password)) {
                HTTP::redirect();
            } else {
                echo "login faild";
            }
        }

        $this->tpl = 'user/login';
        $this->data = array();
    }

    function action_logout() {
        $auth = Auth::instance();
        $auth->logout();
        HTTP::redirect();
    }
}
