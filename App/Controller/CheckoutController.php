<?php

class CheckoutController {
    public function index() {

        require 'Resources/views/checkout.php';
    }

    public function create() {
        require 'views/posts/create.php';
    }

    public function store() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        // Code to create a new post in the database
        header('Location: /posts');
    }
}