<?php

namespace Tests\Browser;

use Illuminate\Support\Facades\Redis;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SaveImgTest extends DuskTestCase
{
//    protected $redisConn;
//
//    public function __construct()
//    {
//        $this->redisConn = Redis::connection('phone-to-uid');
//    }

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->resize(100,50)
                ->visit('https://quetsodienthoai.com/thirdparty/captcha/captcha.class.php')
                ->screenshot('phone-to-uid/captcha');
            $browser
                ->resize(1200,768)
                ->visit('https://www.newocr.com/')
                ->attach('userfile', __DIR__.'/screenshots/phone-to-uid/captcha.png')
                ->click('#preview')
                ->pause(2000)
                ->click('.search-choice-close')
                ->click('.search-field > input')
                ->click('.chosen-results li[data-option-array-index="66"]')
                ->click('.imgareaselect-border4')
                ->click('#ocr')
                ->pause(2000);
            $text = $browser->text('#ocr-result');
            \Log::info($text);
            $text = trim($text);
            $text = explode(PHP_EOL, $text);
            if (count($text) > 1) {
                foreach ($text as $key => $value) {
                    if ($key == 1) {
                        $text = $value;
                        break;
                    }
                }
            } else {
                $text = $text[0];
            }
            \Log::info($text);
            $success = $browser
                ->resize(1200,768)
                ->visit('https://quetsodienthoai.com/search-phone/?phone=0903119990&captcha='. $text)
                ->element('.btn-success');
            $link = $success->getAttribute('href');
//            $this->redisConn->set('phone_list', json_encode([
//                'text' => $text
//            ]));
            \Log::info($link);
        });
    }
}
