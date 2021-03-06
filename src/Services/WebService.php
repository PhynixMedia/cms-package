<?php

namespace Cms\App\Services;

use Cms\App\Services\Blogs\BlogsService;
use Cms\App\Services\Pages\LayoutsService;
use Cms\App\Services\Pages\TemplatesService;

class WebService
{
    public function __construct(){

    }

    /**
     * @return BlogsService
     */
    public function blogs(){

        return new BlogsService();
    }

    /**
     * @return LayoutsService
     */
    public function layouts(){

        return new LayoutsService();
    }

    /**
     * @return TemplatesService
     */
    public function template(){

        return new TemplatesService();
    }
}
