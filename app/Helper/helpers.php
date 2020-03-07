<?php

if (!function_exists('autoAsset')) {
    function autoAsset($asset) {
        if (config('app.env') == 'local') {
            return asset($asset);
        }
        else {
            return secure_asset($asset);
        }
    }
}
