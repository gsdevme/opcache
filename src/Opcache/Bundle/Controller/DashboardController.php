<?php
declare(strict_types = 1);

namespace Opcache\Bundle\Controller;

use Opcache\Factory\StatusFactory;
use Opcache\View\StatisticsView;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class DashboardController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction(): Response
    {
        $status = (new StatusFactory())->create();
        $view = new StatisticsView($status);

        return $this->container->get('templating')->renderResponse(
            '@Opcache/dashboard/index.html.twig',
            ['status' => $status, 'view' => $view]
        );
    }
}
