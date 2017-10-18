<?php

class Controller_Role extends Controller_Base {

    function action_index() {
        $this->tpl = 'role/index';
        $limit = 30;
        $page = 0;
        $this->data['list'] = (new Model_Role())->find($limit, $page);
    }

    function action_add() {
        if ($this->request->method() == 'POST') {
            $post = $this->request->post();
            (new Model_Role())->insert($post);
            http::redirect('role/index');
        }
        $this->tpl = 'role/form';
    }

    function action_del() {
        $id = $this->request->query('id');
        (new Model_Role())->del($id);
        http::redirect('role/index');
    }
}
