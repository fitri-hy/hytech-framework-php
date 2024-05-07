<?php

namespace App\Controllers;

use App\Helper\Helper;
use App\Models\Model;

class AdminController {
    protected $helper;
    protected $model;

    public function __construct(Helper $helper, Model $model) {
        $this->helper = $helper;
        $this->model = $model;
    }
    
    public function index() {
        $pageTitle = 'Dashboard | HyTech Framework';
        $pageDescription = 'HyTech Framework is a PHP framework with an MVC model';
        $pageKeywords = 'hytech, framework, website, php';

        $content = __DIR__ . '/../views/backend/pages/dashboard.hytech';
        include_once(__DIR__ . '/../views/backend/layout.hytech');
    }
}