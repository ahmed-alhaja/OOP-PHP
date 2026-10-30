<?php

class DynamicUser
{
    private array $data = [];

    // Magic fallback for missing methods
    public function __call(string $name, array $arguments)
    {
        // Intercept getter/setter style patterns dynamically
        if (str_starts_with($name, 'set')) {
            $property = lcfirst(substr($name, 3));
            $this->data[$property] = $arguments[0] ?? null;
            return $this; // Return instance for method chaining
        }

        if (str_starts_with($name, 'get')) {
            $property = lcfirst(substr($name, 3));
            return $this->data[$property] ?? null;
        }

        // Throw an exception for entirely unsupported methods
        throw new BadMethodCallException("Method {$name} does not exist.");
    }
}

// Usage
$user = new DynamicUser();

// These methods do not physically exist on the class, but work smoothly
$user->setName("Alice")
     ->setEmail("alice@example.com")
     ->setAge(25);

echo $user->getName();  // Outputs: Alice
echo "<br>";
echo $user->getEmail(); // Outputs: alice@example.com
echo "<br>";
echo $user->getAge(); // Outputs: 25
