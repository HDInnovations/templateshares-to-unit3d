<?php

namespace HDInnovations\TemplateSharesToUnit3d\Functionality;

use stdClass;
use Carbon\Carbon;

class Mapping
{
    /**
     * @param  string  $type
     * @param  stdClass  $data
     * @return array
     */
    public static function map(string $type, stdClass $data): array
    {
        return self::{'map'.$type}($data);
    }

    /**
     * @param  stdClass  $data
     * @return array
     */
    public static function mapGroup(stdClass $data): array
    {
        // TODO
    }

    /**
     * @param  stdClass  $data
     * @return array
     */
    public static function mapUser(stdClass $data): array
    {
        return [
            'username' => $data->username,
            'password' => $data->passhash ?? null,
            'passkey' => $data->secret ?? md5(uniqid().time().microtime()),
            'rsskey' => $data->secret ?? md5(uniqid().time().microtime().$data->passhash),
            'group_id' => 3, // Default Member Group
            'email' => $data->email ?? null,
            'uploaded' => $data->uploaded ?? 0,
            'downloaded' => $data->downloaded ?? 0,
            'seedbonus' => str_replace('-', '', $data->seedbonus) ?? 0,
            'image' => $data->avatar ?? null,
            'title' => $data->title ?? null,
            'about' => $data->about ?? null,
            'signature' => $data->signature ?? null,
            'active' => 1,
            'invites' => $data->invites ?? 0,
            'last_login' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    /**
     * @param  stdClass  $data
     * @return array
     */
    public static function mapCategory(stdClass $data): array
    {
        // TODO
    }

    /**
     * @param  stdClass  $data
     * @return array
     */
    public static function mapTorrent(stdClass $data): array
    {
        // TODO
    }
}
