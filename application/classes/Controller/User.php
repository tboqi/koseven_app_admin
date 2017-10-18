<?php
class Controller_User extends Controller_Base {

    protected $show_header = false;

    protected $non_login_action = array('login');

    function action_add() {
        if ($this->request->method() == 'POST') {
            $post = $this->request->post();
            unset($post['_txt_val']);
            $post['password'] = Auth_Mysql::instance()->hash($post['password']);
            $post['create_time'] = time();
            $post['update_time'] = time();
            (new Model_User())->insert($post);
            HTTP::redirect('user/index');
        }
        $this->tpl = 'user/form';
    }

    function action_index() {
        $this->tpl = 'user/index';
        $limit = 30;
        $page = 0;
        $this->data['list'] = (new Model_User())->find($limit, $page);
    }

    function action_del() {
        $id = $this->request->query('id');
        (new Model_User())->del($id);
        http::redirect('user/index');
    }

    function action_edit_password() {
        if ($this->request->method() == 'POST') {
            $post = $this->request->post();
            $password_old = $post['password_old'];
            $password_new = $post['password_new'];
            $password_new2 = $post['password_new2'];

            $login_user = $this->login_user;

            $auth = Auth_Mysql::instance();
            $password_old_hash = $auth->hash($password_old);
            if ($password_old_hash != $login_user['password']) {
                die('原密码不正确');
            }

            $password_new_hash = $auth->hash($password_new);
            $model_user = new Model_User();
            if ($model_user->update(array('password' => $password_new_hash), $login_user['id'])) {
                $auth->logout();
                HTTP::redirect('user/login');
            }
            die('error');
        }

        $this->tpl = 'user/edit_password';
        $this->data = array();
    }
}
