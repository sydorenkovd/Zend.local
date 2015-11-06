<?php

namespace Page\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PageController extends AbstractActionController
{
    protected $pageTable;

    public function indexAction()
    {
        return new ViewModel(
            [
//             "pages"=>$this->getPageTable()->fetchAll('1'),
            ]
        );
    }
    public function deleteAction()
    {
        return new ViewModel();
    }
    public function modifyAction()
    {
        return new ViewModel();
    }
    public function addAction()
    {
        return new ViewModel();
    }

    /**
     * @return mixed
     * Получили доступ к менеджеру сервисов Service Manager
     */
    public function getPageTable(){
        if(!$this->pageTable){
    $serviceManager = $this->getServiceLocator();
            $this->pageTable = $serviceManager->get("Page\Model\PageTable");
        } else{
            return $this->pageTable;
        }
    }

}
