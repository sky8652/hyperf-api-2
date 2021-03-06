<?php

declare(strict_types = 1);
/**
 * This file is form http://findcat.cn
 *
 * @link     http://findcat.cn
 * @email    1476982312@qq.com
 */

namespace App\Model;

use Hyperf\ModelCache\Cacheable;
use Hyperf\ModelCache\CacheableInterface;
use Hyperf\DbConnection\Model\Model as BaseModel;

abstract class Model extends BaseModel implements CacheableInterface
{
    use Cacheable;
}
