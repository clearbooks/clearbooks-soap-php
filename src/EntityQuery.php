<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class EntityQuery
{
    /** @var int[] */
    public $id = array();

    /** @var string */
    public $companyName = '';

    /** @var string */
    public $type = '';

    /** @var int */
    public $offset = 0;

    /** @var \DateTime */
    public $modifiedSince = '';
}
//EOF EntityQuery.php