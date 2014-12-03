<?php

require_once('settings.php');

$guid = getParam('guid');

if (!$guid) {
    throwError('400');
}

increaseCount(TYPE_VIDEO, $guid);

$data = getVideoData($guid);

if ($data->videoplayurl) {
    redirect($data->videoplayurl);
} else {
    throwError('404', '沒有獲取到播放地址');
}
