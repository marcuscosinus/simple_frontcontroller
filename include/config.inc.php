<?php

    $pages = array(
        "main" => array(
            "title" => "121. Vetéssy Géza cserkészcsapat",
            "menu" => "Főoldal",
            "content" => "main",
            "css" => array("style")
            ),
        "about" => array(
            "title" => "Rólunk",
            "menu" => "Rólunk",
            "content" => "about",
            "css" => array("style","about")
            ),
        "history" => array(
            "title" => "Történetünk",
            "menu" => "Történet",
            "content" => "history",
            "css" => array("style")
            ),
        "contact" => array(
            "title" => "Kapcsolat",
            "menu" => "Kapcsolat",
            "content" => "contact",
            "css" => array("style","contact")
            ),
        "message" => array(
            "title" => "Üzenet",
            "menu" => "",
            "content" => "message",
            "css" => array("style")
            ),
        "404" => array(
            "title" => "Keresett oldal nem található",
            "menu" => "",
            "content" => "404",
            "css" => array("style")
        )
    );


     function includeCSS($page) {
         GLOBAL $pages;
         foreach ($pages[$page]["css"] as $cssfile) {
             echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/".$cssfile.".css\">";
         }
     }
    
    function getTitle($page) {
        GLOBAL $pages;
        return $pages[$page]["title"];
    }
    
    function createMenu($page) {
        GLOBAL $pages;
        foreach ($pages as $index => $leiras) {
            if ($leiras["menu"] != "") {
               echo "<li ".($index == $page ? "class=\"active\"": "")."><a href=\"?id=".$leiras["content"]."\">".$leiras["menu"]."</a></li>";
            }
        }
    }
    
    function getContent($page) {
        GLOBAL $pages;
        return "./contents/".$pages[$page]["content"].".php";
    }
    
    $page = "main";
    
    if (isset($_GET["id"])) {
        if (isset($pages[$_GET["id"]]) && file_exists("./contents/".$pages[$_GET["id"]]["content"].".php")) {
            $page = $_GET["id"];
        }
        else {
            $page = "404";
        }
    }
?>