<?php

/**
 * This class is responsible for managing existing sessions and colling for authentication as required.
 */
class SessionController
{
    private $authenticatedUser;

    /**
     * @return mixed
     */
    public function getAuthenticatedUser()
    {
        return $this->authenticatedUser;
    }


}