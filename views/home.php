welmc

<?php

use app\core\Application;

echo (Application::$App->session->getFlash('success'));
?>