<?php
require_once __DIR__ . '/../app/setup.php';
protectRoute(true);

echo $twig->render('activity-log.twig', []);