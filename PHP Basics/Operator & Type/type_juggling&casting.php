#Type Juggling
PHP is loosy type language.
PHP dont need to know your variable type. PHP identify your varaible easily. Example
$a = 2; $b = 3.2;
$sum = $a * $b // 6.4 type float

But sometimes it makes a unmaintable code, we don't understand what type we should use. So we 
forcely change this type. That is called Type Casting

#Type Casting

$a = 5.4;
$b = (int) $a; // int 5;
