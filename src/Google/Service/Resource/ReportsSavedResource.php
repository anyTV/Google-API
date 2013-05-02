<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:29
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\Report;
use Google\Model\SavedReports;

/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $saved = $adexchangesellerService->saved;
 *  </code>
 */
class ReportsSavedResource extends Resource
{


    /**
     * Generate an Ad Exchange report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return Report
     */
    public function generate($savedReportId, $optParams = array())
    {
        $params = array('savedReportId' => $savedReportId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', array($params));
        if ($this->useObjects()) {
            return new Report($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved reports in this Ad Exchange account. (saved.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return SavedReports
     */
    public function listReportsSaved($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new SavedReports($data);
        } else {
            return $data;
        }
    }
}