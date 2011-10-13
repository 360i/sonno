<?php

/**
 * @category Sonno
 * @package  Test
 * @author   Dave Hauenstein <davehauenstein@gmail.com>
 * @author   Tharsan Bhuvanendran <me@tharsan.com>
 */

namespace Sonno\Test\Annotation;

use Sonno\Annotation\PathParam;

/**
 * Class level documentation.
 *
 * @category Sonno
 * @package  Test
 */
class PathParamTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSettingAndGetters()
    {
        $params = array('valA', 'valB');
        $param  = new PathParam($params);
        $this->assertEquals($params, $param->getParams());
    }
}
