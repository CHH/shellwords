<?php

namespace CHH\Test;

use CHH\Shellwords;

class ShellwordsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider splitDataProvider
     */
    function testSplit($input, $expected)
    {
        $actual = Shellwords::split($input);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider joinDataProvider
     */
    function testJoin($input, $expected)
    {
        $actual = Shellwords::join($input);
        $this->assertEquals($expected, $actual);
    }

    function splitDataProvider()
    {
        return array(
            array('foo "bar baz"', array('foo', 'bar baz')),
            array('foo \n bar', array("foo", '\n', "bar")),
            array('\'foo bar\' baz', array("foo bar", "baz")),
            array('"foo', array())
        );
    }

    function joinDataProvider()
    {
        return array(
            array(
                array("ls", "-l", "some path with spaces"),
                "'ls' '-l' 'some path with spaces'"
            )
        );
    }
}

