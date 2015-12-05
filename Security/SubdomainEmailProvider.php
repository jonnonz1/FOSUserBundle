<?php

namespace FOS\UserBundle\Security;

class SubdomainEmailProvider extends UserProvider
{
    /**
     * {@inheritDoc}
     */
    protected function findUser($email)
    {
        if (isset($_POST['_subdomain'])) {
            $subdomain =  $_POST['_subdomain'];
        } elseif(isset($_SERVER['HTTP_HOST'])) {
            $httpHost = explode('.', $_SERVER['HTTP_HOST']);
            $subdomain =  array_shift($httpHost);
        } else {
            throw new \Exception('Unable to extract domain from request for login.');
        }
        return $this->userManager->findUserByEmailAndSubdomain($email, $subdomain);
    }
}
