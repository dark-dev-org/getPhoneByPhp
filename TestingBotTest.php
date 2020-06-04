<?php

require_once 'vendor/autoload.php';
require_once 'PHPUnit/Extensions/AppiumTestCase.php';
require_once 'PHPUnit/Extensions/AppiumTestCase/Element.php';

class TestingBotTest extends \PHPUnit_Extensions_AppiumTestCase
{

    public static $browsers = [
        [
            'local' => true,
            'port' => 4723, // 伺服器的 port
            'browserName' => '',
            'desiredCapabilities' => [
                'device' => 'Android',
                'deviceName' => '127.0.0.1:62001', // 模擬器的 port
                'platformVersion' => '5.1.1',
                'platformName' => 'Android',
                'appPackage'  => '', // app 的名稱
                'appActivity' => 'MyActivity', // app 要開啟的畫面
                "noReset"     => true // 是否不清空設定黨
            ]
        ]
    ];
/*


    public function setupSpecificBrowser($params) {
        $caps = $this->getDesiredCapabilities();
        $this->setHost('api_key:api_secret@hub.testingbot.com');
        $caps = isset($params['desiredCapabilities']) ? $params['desiredCapabilities'] : array();
        $this->setDesiredCapabilities($caps);
        $this->setUpSessionStrategy($params);
        $this->setSeleniumServerRequestsTimeout(180);
    }

    public function testNativeApplication() {
    	$el = $this->byAccessibilityId('inputA');
    	$el->click();
    	$this->keys("10");
    	$el = $this->byAccessibilityId('inputB');
    	$el->click();
    	$this->keys("5");
    }
    */
}
