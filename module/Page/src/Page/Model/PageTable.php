<?php
namespace Page\Model;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

class PageTable extends AbstractTableGateway{
    private $table = "page";
    public function __construct(Adapter $adapter){
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Page());
        $this->initialize();
    }
    public function fetchAll(){}
    public function getPage($id){}
    public function savePage(Page $pages){}
    public function deletePage($id){}

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