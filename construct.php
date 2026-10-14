<?php

// Traditional way (PHP 7 and earlier)
class UserOld
{
    public $name;
    public $email;
    
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

// PHP 8 way (Constructor Property Promotion)
class UserNew
{
    public function __construct(
        public string $name,
        public string $email,
        private int $age = 18
    ) {}
}

$user = new UserNew("Jane", "jane@example.com", 25);
echo $user->name; // Output: Jane
echo $user->email; // Output: jane@example.com
// echo $user->age; // ERROR: Cannot access private property