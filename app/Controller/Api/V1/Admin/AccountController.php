<?php

declare(strict_types=1);

namespace App\Controller\Api\V1\Admin;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;


/**
 * @AutoController(prefix="api/account")
 */
class AccountController extends AbstractController
{
    public function index()
    {
        return [
            "method" => $this->request->getMethod(),
            "url" => $this->request->url()
        ];
    }
}
