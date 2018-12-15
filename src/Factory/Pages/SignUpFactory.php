<?php

namespace CoreBundle\Factory\Pages;

use CoreBundle\Core\Container;

class SignUpFactory extends Container
{
    private static $instance = null;

    /**
     * @return SignUpFactory|null
     */
    public static function getInstance()
    {
        if (!self::$instance instanceof SignUpFactory) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function index(): void
    {

        require_once(__DIR__ . "/../../Resources/Views/header.php");
        require_once(__DIR__ . "/../../Resources/Views/sign-up.php");
        require_once(__DIR__ . "/../../Resources/Views/footer.php");
    }
}