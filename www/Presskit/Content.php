<?php

namespace Presskit;

use Presskit\Value\Text;
use Presskit\Value\Website;

class Content
{
    private $title = '';
    private $foundingDate = '';
    private $releaseDate = '';
    private $website = '';
    private $pressContact = '';
    private $location = '';

    public function setTitle($title)
    {
        $this->title = new Text($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setFoundingDate($date)
    {
        $this->foundingDate = new Text($date);
    }

    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    public function setReleaseDate($date)
    {
        $this->releaseDate = new Text($date);
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setWebsite($website)
    {
        $this->website = new Website($website);
    }

    public function getWebsite()
    {
        if ($this->website === null) {
            return false;
        }

        return $this->website;
    }

    public function setPressContact($contact)
    {
        $this->pressContact = new Text($contact);
    }

    public function getPressContact()
    {
        return $this->pressContact;
    }

    public function setLocation($location)
    {
        $this->location = new Text($location);
    }

    public function getLocation()
    {
        return $this->location;
    }
}
