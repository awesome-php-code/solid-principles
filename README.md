# :pushpin: SOLID principles examples in PHP

This repository shows you how to implement SOLID principles in PHP and how not implement them.

Please feel free to post any issues you'll could
find [here](https://github.com/awesome-php-code/sorting-algorithms/issues).

# What are SOLID principles :question:

The acronym SOLID refers to a globally accepted set of principles in object-oriented development.
These five principles seek to make the code more understandable, flexible and maintainable.

## Open-Closed Principle

This principle says that entities (classes, methods, or functions) should be open for extension but
closed for modification. That an entity is open for extension, means that it is possible to change
the behavior of said entity. On the other hand, being closed for modification implies that it must be
possible to change the behavior without modifying the original source code.

In this example you can use the `computeArea()` method to calculate shape's areas in the client code.

```php
class Client
{
    public static function compute(Figure $figure)
    {
        echo 'The area is ' . $figure->computeArea();
    }
}
```

You can create a new class for any shape without modifying the related code. For instance,
you can create the `Circle` class and the client should keep working.

```php
class Circle extends Figure
{
    protected float $radio = 0;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function computeArea(): float
    {
        return pi() * pow($this->radio, 2);
    }
}
```