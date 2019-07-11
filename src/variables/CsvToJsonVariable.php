<?php
/**
 * CSV to JSON plugin for Craft CMS 3.x
 *
 * Takes a CSV file and converts it to JSON, funnily enough.
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\csvtojson\variables;

use cliveportman\csvtojson\CsvToJson;

use Craft;

/**
 * CSV to JSON Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.csvToJson }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Clive Portman
 * @package   CsvToJson
 * @since     1.0.0
 */
class CsvToJsonVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.csvToJson.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.csvToJson.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template in the plugin...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }

        return $result;
    }

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.csvToJson.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.csvToJson.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function convert($fileUrl)
    {

        $result = CsvToJson::$plugin->base->convert($fileUrl);
        return $result;
    }
}
