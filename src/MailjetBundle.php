<?php

namespace Mailjet\MailjetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mailjet\MailjetBundle\DependencyInjection\MailjetExtension;

class MailjetBundle extends Bundle
{
    public function getContainerExtension(): ?Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new MailjetExtension();
    }
}
