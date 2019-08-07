<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index(){
        $this->loasComponent('Paginater');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }
}
