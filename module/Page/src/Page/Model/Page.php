<?php
namespace Page\Model;
    class Page{
        public $idpage;
        public $title;
        public $article;
        public $pub;

        /**
         * @param $data
         * @return
         */
        public function exchangeArray($data){
    $this->idpage = (isset($data["idpages"]) ? $data["idpages"] : null);
    $this->title = (isset($data["title"]) ? $data["title"] : null);
    $this->article = (isset($data["article"]) ? $data["article"] : null);
    $this->pub = (isset($data["pub"]) ? $data["pub"] : null);
        }
    }