<?php

namespace app\database\models;

use app\traits\Connection;
use app\traits\Read;
use app\traits\Create;
use app\traits\Monitor;

abstract class Model
{
    use Create, Read, Connection, Monitor;
}
