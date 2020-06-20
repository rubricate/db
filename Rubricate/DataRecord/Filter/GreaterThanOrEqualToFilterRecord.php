<?php

namespace Rubricate\DataRecord\Filter;

class GreaterThanOrEqualToFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterRecord($key . ' >= ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}
