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

function renderDesktopMenu($menuItems) {
    foreach ($menuItems as $label => $link) {
        if (is_array($link)) {
            echo "<li class='dropdown'>$label<ul class='dropdown-menu'>";
            foreach ($link as $subLabel => $subLink) {
                echo "<li><a href='$subLink'>$subLabel</a></li>";
            }
            echo "</ul></li>";
        } else {
            echo "<li><a href='$link'>$label</a></li>";
        }
    }
}

// Function to render the sidenav menu
function renderSidenavMenu($menuItems) {
    foreach ($menuItems as $label => $link) {
        if (is_array($link)) {
            echo "<a href='javascript:void(0)'>$label</a>";
            foreach ($link as $subLabel => $subLink) {
                echo "<a href='$subLink' class='submenu'>$subLabel</a>";
            }
        } else {
            echo "<a href='$link'>$label</a>";
        }
    }
}

?>
