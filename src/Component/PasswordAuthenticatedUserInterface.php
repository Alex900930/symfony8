<?php

namespace App\Component;

interface PasswordAuthenticatedUserInterface
{
    /**
     * Returns the hashed password used to authenticate the user.
     *
     * Usually on authentication, a plain-text password will be compared to this value.
     */
    public function getPassword(): ?string;
}