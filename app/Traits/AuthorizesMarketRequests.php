<?php

namespace App\Traits;

trait AuthorizesMarketRequests
{

    public function resolveAuthorization(array &$queryParams, array &$formParams, array &$headers): void
    {
        $accesToken = $this->resolveAccessToken();

        $headers['Authorization'] = $accesToken;
    }

    public function resolveAccessToken(): String
    {
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiOGQ0YTc5Njc2Zjk4ZDZiZWNhMmJjNTc3ZTI1NjMxYjc4MzhkN2E1MjEwMTVkN2NiZjFkYmU5YjAyNTMzZTM1ODYyOWJjMjBkYzM4ZTgzZGEiLCJpYXQiOiIxNjg5MTA3MjUzLjMzNjQzNCIsIm5iZiI6IjE2ODkxMDcyNTMuMzM2NDM2IiwiZXhwIjoiMTcyMDcyOTY1My4zMzM4NjkiLCJzdWIiOiIxMzczIiwic2NvcGVzIjpbInB1cmNoYXNlLXByb2R1Y3QiLCJtYW5hZ2UtcHJvZHVjdHMiLCJtYW5hZ2UtYWNjb3VudCIsInJlYWQtZ2VuZXJhbCJdfQ.zk_T7tjZSxIxH1AI7EI4UWsCldvpoK6xlrup4nkI0VsosT5v68FEjeqATVo25xmmXO8HAW4er7yIUYXK4VC1-YUiUp2DNPmmmDxT6fO5np0GbAdZktgzZxfVel54N31OBFNuin-WDlrybjCbFLeWBsEQZrJqpYpGtliuQwOZqhHyQgbz40_wHwYs_NRM4dfhsmO08BCM4n0hcedr30e7CHP3EPLgBNz7q2i_fGO-b6VXST03hcdNg9aV69b2ms4uLZGl_ObD_FcwClwwUvNAhSZ94XasvrmLPEFGiqv06cdkRyTR3bMnNqD189bGEITEM4weaCRT91yjI92_f-fFmSex_UB_LkVVdTgLvZex9YihSANCflHRs4h_gkChisFQ8tIX4b38XlchFI620VVR0eTHlA_jeJ5yYstHPwtdz5ztPm5CwrI3BN5s6EAgv0bGqe-o-fDa5NVLxgnHLW-_e6873WzITeCpfwHLbEsiihiixvoylTsLz2HGODWP7lgxCtBqYW60GiwBEZfWWTGoU5fl9tMGC6o_QWwkpESui8Dcq2pRb0GsBGojQG-l2YDj9llM4uuk4DnBZsasQYIOauvEnCyh1YujQttROKABorerlVfHI2jhONVJeDf6yJ3vhISXfYP1yJleDosIfBpOz_LqUvLZ7VFVVwVk6iLrZoc';
    }
}