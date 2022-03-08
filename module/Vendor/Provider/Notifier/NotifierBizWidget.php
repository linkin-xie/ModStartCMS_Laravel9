<?php


namespace Module\Vendor\Provider\Notifier;


/**
 * Class NotifierBizWidget
 * @package Module\Vendor\Provider\Notifier
 * @since 2.0.0
 */
class NotifierBizWidget
{
    private static $list = [];

    public static function register($biz, $title)
    {
        self::$list[] = [
            'biz' => $biz,
            'title' => $title,
        ];
    }

    public static function get()
    {
        return self::$list;
    }
}
