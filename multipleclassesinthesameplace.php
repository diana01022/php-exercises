<?php

// File: Models/User.php
namespace App\Models;

class User
{
    public $name;
    public $email;
}

// File: Models/Product.php
namespace App\Models;

class Product
{
    public $name;
    public $price;
}

// File: index.php
use App\Models\User;
use App\Models\Product;

$user = new User();
$product = new Product();