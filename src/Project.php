<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Project
{
    /** @var string */
    public $projectName;

    /** @var string */
    public $status;

    /** @var string */
    public $description = '';

    /** @var int */
    public $id = 0;
}
//EOF Project.php