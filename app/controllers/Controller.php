<?php
class Controller {
    public function index() {
        // Set variabel untuk judul halaman
        $pageTitle = 'HyTech Framework';
        $pageDescription = 'This is the home page of our website.';
        $pageKeywords = 'home, page, website';

        // Tentukan layout
        $content = __DIR__ . '/../views/pages/home.hytech';
        include_once(__DIR__ . '/../views/layout.hytech');
    }
}

class NotFound {
    public function index() {
        // Set variabel untuk judul halaman
        $pageTitle = 'Error 404: Page not found';
        $pageDescription = 'Oops! The page you are looking for does not exist.';
        $pageKeywords = 'error, 404, page, not found';

        // Tentukan layout
        $content = __DIR__ . '/../views/pages/404.hytech';
        include_once(__DIR__ . '/../views/layout.hytech');
    }
}
