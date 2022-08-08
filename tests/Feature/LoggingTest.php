<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    // FOR WEBHOOK TEST
    // https://slack.com/apps/A0F7XDUAZ-incoming-webhooks
    public function testLogging()
    {
        Log::info("Log by Info");
        Log::warning("Log by Warning");
        Log::error("Log by Error");
        Log::critical("Log by Critical");

        $this->assertTrue(true);
    }

    public function testContext()
    {
        // Log::info("Hello Info", ["user" => "Andreas"]);

        Log::withContext(["user" => "Andreas"]);
        Log::info("Hello Info");
        Log::info("Hello Info");

        $this->assertTrue(true);
    }

    // KIRIM LOG KE CHANNEL YG DITENTUKAN
    public function testWithChannel()
    {
        $slackLogger = Log::channel("slack");
        $slackLogger->error("Hello Slack"); //send to slack channel

        Log::info("Hello Info"); // send to default channel

        $this->assertTrue(true);
    }

    public function testFileHandler()
    {
        $fileLogger = Log::channel('file');
        $fileLogger->info("Hello File Handler");
        $fileLogger->warning("Hello File Handler");
        $fileLogger->error("Hello File Handler");
        $fileLogger->critical("Hello File Handler");
        
        $this->assertTrue(true);
    }

}
