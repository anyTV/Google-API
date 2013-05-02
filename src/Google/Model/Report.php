<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:36
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class Report extends Model
{
    public $averages;
    protected $__headersType = 'ReportHeaders';
    protected $__headersDataType = 'array';
    public $headers;
    public $kind;
    public $rows;
    public $totalMatchedRows;
    public $totals;
    public $warnings;

    public function setAverages($averages)
    {
        $this->averages = $averages;
    }

    public function getAverages()
    {
        return $this->averages;
    }

    public function setHeaders( /* array(ReportHeaders) */
        $headers)
    {
        $this->assertIsArray($headers, 'ReportHeaders', __METHOD__);
        $this->headers = $headers;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setTotalMatchedRows($totalMatchedRows)
    {
        $this->totalMatchedRows = $totalMatchedRows;
    }

    public function getTotalMatchedRows()
    {
        return $this->totalMatchedRows;
    }

    public function setTotals($totals)
    {
        $this->totals = $totals;
    }

    public function getTotals()
    {
        return $this->totals;
    }

    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    public function getWarnings()
    {
        return $this->warnings;
    }
}