<?php
namespace HyssaDev\HibikenAsynqClient\Tests;

use Ramsey\Uuid\Uuid;
use HyssaDev\HibikenAsynqClient\Client;
use Illuminate\Support\Facades\Redis;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    public function testEnqueue()
    {
        $redis = new Redis();
        $redis::connect('127.0.0.1');
        $clinet = new Client($redis);
        $res = $clinet->Enqueue([
            'typename'=>'newtest:user:xxxx',
            'payload'=>[
                'test'=>'xxxx',
                'user'=>1111
            ]
        ]);
        $this->assertTrue($res);
    }
}