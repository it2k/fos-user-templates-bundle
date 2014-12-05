<?php

namespace It2k\FOSUserTemplatesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class It2kFOSUserTemplatesBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
