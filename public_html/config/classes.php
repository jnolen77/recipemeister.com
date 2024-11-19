<?php

class Meta {
    private $title;
    private $description;
    private $canonical;
    private $keywords;  // New keywords property

    // Set page title
    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    // Set page description
    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    // Set canonical URL
    public function setCanonical($canonical) {
        $this->canonical = $canonical;
    }

    public function getCanonical() {
        return $this->canonical;
    }

    // Set page keywords
    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function getKeywords() {
        return $this->keywords;
    }
}
?>
