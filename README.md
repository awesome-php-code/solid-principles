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

## Liskov Substitution Principle

This principle says that the objects of a program can be substituted by their subtypes without altering the correct
operation of the program. That is, an argument to a function or method that accepts a class or interface should work
the same with any subtype of the same class or interface. For this to be possible, it is necessary that the signature
of the implemented or overridden methods are the same and do not add or change the TYPE of the result of the
function or throw new exceptions.

In this example you can use the `printContent()` method to calculate shape's areas in the client code. You can also
interchange the type by any subtype without affecting the client code.

```php
class Client
{
    public static function printContent(Parser $parser)
    {
        echo $parser->output();
    }
}
```

In this case, you can use any parser that extends the main `Parser` class.

```php
$parser = new Parser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

// subtype CSV
$csv = new CSVParser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

// subtype MarkdownTable
$marrkdown = new MarkdownParser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

Client::printContent($parser);
Client::printContent($csv);
Client::printContent($markdown);
```