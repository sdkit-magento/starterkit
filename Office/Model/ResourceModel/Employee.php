<?php
namespace Sdkit\Office\Model\ResourceModel;

use Magento\Eav\Model\Entity\AbstractEntity;

class Employee extends AbstractEntity
{
    protected function _construct()
    {
//        parent::_construct(); // TODO: Change the autogenerated stub
        $this->_read = 'default';
        $this->_write = 'default';

    }

    public function getEntityType()
    {
        if( empty($this->_type)) {
            $this->setType(\Sdkit\Office\Model\Employee::ENTITY);
        }
        return parent::getEntityType(); // TODO: Change the autogenerated stub
    }
}
