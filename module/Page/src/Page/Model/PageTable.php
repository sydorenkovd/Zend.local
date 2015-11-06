<?php
namespace Page\Model;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

class PageTable extends AbstractTableGateway{
    protected $table = "page";

    /**
     * @param Adapter $adapter
     * Устанавливаем прототип результирующего множества
     */
    public function __construct(Adapter $adapter){
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Page());
        $this->initialize();
    }

    /**
     * @return ResultSet
     * получаем все страницы из базы
     */
    public function fetchAll(){
        $resultSet = $this->select();
        return $resultSet;
    }
    public function getPage($id){
        $id = (int)$id;
        $rowSet = $this->select([
            'idpage'=>$id,
        ]);
        $row = $rowSet->current();
        if (!$row)
            throw new Exceptionption("Dont find $id");
        return $row;

    }
    public function savePage(Page $pages){
        $data = ['title'=>$pages->title,
            'article'=>$pages->article,
            'pub'=> date("d-m-Y H:i:s"),
        ];
        $id = (int)$pages->idpage;
        if(!$id)
        $this->insert($data);
        else
            $this->update($data, ['idpage'=>$id]);
    }
    public function deletePage($id){
        $this->delete(['idpage'=>$id]);
    }

    /**
     * @param $data
     * @return
     */
    public function exchangeArray($data){
        $this->idpage = (isset($data["idpage"]) ? $data["idpage"] : null);
        $this->title = (isset($data["title"]) ? $data["title"] : null);
        $this->article = (isset($data["article"]) ? $data["article"] : null);
        $this->pub = (isset($data["pub"]) ? $data["pub"] : null);
    }
}