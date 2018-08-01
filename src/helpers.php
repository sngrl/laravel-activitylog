<?php

use Spatie\Activitylog\ActivityLogger;
use Spatie\Activitylog\ActivityLogStatus;

if (! function_exists('activity')) {
    /**
     * @return ActivityLogger
     */
    function activity(string $logName = null)
    {
        $defaultLogName = config('activitylog.default_log_name');

        $logStatus = app(ActivityLogStatus::class);

        return app(ActivityLogger::class)
            ->useLog($logName ?? $defaultLogName)
            ->setLogStatus($logStatus);
    }
}
