<?php

namespace MMI\TVBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MMITVBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
