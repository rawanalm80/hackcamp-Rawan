<?php

/**
 * @author HackCamp group three
 *
 * This class is responsible for the main control flow logic of the program.
 */
class MainController
{

    protected $sessionController;

    public function __construct()
    {
        $sessionController = new SessionController();
        main();
    }

    /**
     * @return void
     *
     * Main control flow
     */
    private function main()
    {
        echo "Hello Salford";
    }
}