<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Variables;

class DashboardController extends AbstractActionController
{
    /**
     * URL： /
     */
    public function homeAction()
    {
        return new ViewModel();
    }
}
