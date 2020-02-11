<?php
namespace Impactaweb\Crud\Form\Fields;

use Exception;

class DateTimeField extends BaseField
{
    protected $col = '3';

    /**
     * Override initial value for date with format
     * @param array $initial
     * @throws Exception
     */
    protected function buildInitialValue(array $initial)
    {
        parent::buildInitialValue($initial);
        if (!is_null($this->format) && !empty($this->value != '')) {
            $this->value = $this->formatDate($this->value, $this->format);
        }
    }




}