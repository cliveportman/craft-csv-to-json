<?php
/**
 * CSV to JSON plugin for Craft CMS 3.x
 *
 * Takes a CSV file and converts it to JSON, funnily enough.
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\csvtojson\services;

use cliveportman\csvtojson\CsvToJson;

use Craft;
use craft\base\Component;

/**
 * Base Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Clive Portman
 * @package   CsvToJson
 * @since     1.0.0
 */
class Base extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CsvToJson::$plugin->base->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CsvToJson::$plugin->base->exampleService()
     *
     * @return mixed
     */
    public function convert($fileUrl = null)
    {

        if (!isset($fileUrl)) {
            return false;
        }

        $csv = file_get_contents($fileUrl);
    
        $csvLines = explode("\n", $csv);
        $indexes = str_getcsv(array_shift($csvLines));
        $array = array_map(function ($e) use ($indexes) { 
            return array_combine($indexes, str_getcsv($e));
        }, $csvLines);

        return $array;
    }
}
