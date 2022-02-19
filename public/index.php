<?php
    require_once('../app/views/template/page.class.php');
    Page::templateHeader("TextilExport - Público");
    Page::templateNavbarPublic();
    Page::templateSlider();
    require_once("../app/views/productos/index_public_view.php");
    Page::templateFooter();
?>