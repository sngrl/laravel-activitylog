<?php

namespace Spatie\Activitylog;

use Illuminate\Config\Repository;

class ActivityLogStatus
{
    protected $enabled = true;

    public function __construct(Repository $config)
    {
        $this->enabled = $config['activitylog.enabled'];
    }

    public function enable()
    {
        return $this->enabled = true;
    }

    public function disable()
    {
        return $this->enabled = false;
    }

    public function disabled()
    {
        return $this->enabled === false;
    }
}
