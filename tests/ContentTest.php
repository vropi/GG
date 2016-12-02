<?php

use PHPUnit\Framework\TestCase;

class ContentTest extends TestCase
{
    use Codeception\Specify;

    private function createContent()
    {
        return new Presskit\Content;
    }

    public function testTitle()
    {
        $this->specify('title can be set', function () {
            $content = $this->createContent();
            verify($content->setTitle('A Title'))->isEmpty();
        });

        $this->specify('title can be read', function () {
            $content = $this->createContent();
            $content->setTitle('Another Title');
            verify($content->getTitle())->equals('Another Title');
        });

        $this->specify('title can handle not being set', function () {
            $content = $this->createContent();
            verify($content->getTitle())->false();
        });
    }

    public function testFoundingDate()
    {
        $this->specify('foundingDate can be set', function () {
            $content = $this->createContent();
            verify($content->setFoundingDate('A Date'))->isEmpty();
        });

        $this->specify('foundingDate can be read', function () {
            $content = $this->createContent();
            $content->setFoundingDate('Another Date');
            verify($content->getFoundingDate())->equals('Another Date');
        });

        $this->specify('foundingDate can handle not being set', function () {
            $content = $this->createContent();
            verify($content->getFoundingDate())->false();
        });
    }

    public function testReleaseDate()
    {
        $this->specify('releaseDate can be set', function () {
            $content = $this->createContent();
            verify($content->setReleaseDate('A Date'))->isEmpty();
        });

        $this->specify('releaseDate can be read', function () {
            $content = $this->createContent();
            $content->setReleaseDate('Another Date');
            verify($content->getReleaseDate())->equals('Another Date');
        });

        $this->specify('releaseDate can handle not being set', function () {
            $content = $this->createContent();
            verify($content->getReleaseDate())->false();
        });
    }

    public function testWebsite()
    {
        $this->specify('website can be set', function () {
            $content = $this->createContent();
            verify($content->setWebsite('http://www.example.com/'))->isEmpty();
        });

        $this->specify('website can be read', function () {
            $content = $this->createContent();
            $content->setWebsite('http://www.example.com/');
            verify($content->getWebsite()->url())->equals('http://www.example.com/');
            verify($content->getWebsite()->name())->equals('example.com');
        });

        $this->specify('website can handle not being set', function () {
            $content = $this->createContent();
            verify($content->getWebsite())->false();
        });
    }
}
