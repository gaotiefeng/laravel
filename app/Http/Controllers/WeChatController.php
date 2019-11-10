<?php

namespace App\Http\Controllers;

use EasyWeChatComposer\EasyWeChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Overtrue\Socialite\SocialiteManager;
use Overtrue\Socialite\User as SocialiteUser;
use Illuminate\Support\Arr;


class WeChatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {

        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $app = app('wechat.official_account');
        $app->server->push(function($message){
            return "欢迎关注 overtrue！";
        });

        return $app;
    }

    public function user()
    {
        $user = [];
        $user = new SocialiteUser([
            'id' => Arr::get($user, 'openid'),
            'name' => Arr::get($user, 'nickname'),
            'nickname' => Arr::get($user, 'nickname'),
            'avatar' => Arr::get($user, 'headimgurl'),
            'email' => null,
            'original' => [],
            'provider' => 'WeChat',
        ]);
    }
}
