<?php

namespace Rubricate\DataRecord\Filter;

class JoinFilterRecord extends AbstractDisableWhereFilterRecord
{
    private $table;
    private $filter;
    
    public function __construct($table, $key, $value) 
    {
        $this->filter = new FilterRecord($key, $value);
        $this->table = $table;
    }
    

    public function getFilter()
    {
        return sprintf("JOIN %s ON (%s)", 
            $this->table, $this->filter->getFilter()
        );
    }


}
