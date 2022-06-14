<?php

$client_id = '8117757';

// получить token авторизации:
// https://oauth.vk.com/authorize?client_id=8117757&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=friends&response_type=token&v=5.131

// 25948abc9f6d40679885c254784bb10241c86d0ee25beecac1813d338a81b3b3540ba1d02ab55e3a9adf3

// https://oauth.vk.com/blank.html#access_token=25948abc9f6d40679885c254784bb10241c86d0ee25beecac1813d338a81b3b3540ba1d02ab55e3a9adf3&expires_in=86400&user_id=335137454

// https://api.vk.com/method/friends.getOnline?v=5.131&access_token=25948abc9f6d40679885c254784bb10241c86d0ee25beecac1813d338a81b3b3540ba1d02ab55e3a9adf3

// методы API https://dev.vk.com/method/friends.get

$group_id = '144654434';

$url = "https://api.vk.com/method/friends.get?v=5.131&access_token=25948abc9f6d40679885c254784bb10241c86d0ee25beecac1813d338a81b3b3540ba1d02ab55e3a9adf3&user_id=38136";

if( $curl = curl_init() ) {

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
}




//$res = explode(',', $out);
//
//echo "<pre>";
//print_r( $res );
//echo "</pre>";
//
//echo count($res);

// ретаргетинг https://vk.com/ads?act=retargeting#