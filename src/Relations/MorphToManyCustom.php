<?php

namespace Istanbay\Laravel\Pivot\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Istanbay\Laravel\Pivot\Traits\FiresPivotEventsTrait;

class MorphToManyCustom extends MorphToMany
{
    use FiresPivotEventsTrait;
}
