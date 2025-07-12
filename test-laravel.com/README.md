# Docs
## Funtions

- isset(): check not null

```php
$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           // FALSE
```
- array_key_exists(): Checks if the given key or index exists in the array

```php
$searchArray = ['first' => 1, 'second' => 4];
var_dump(array_key_exists('first', $searchArray)); // true
```

- is_array(): check value is array

- unset(): 

- 

# Migrations

```bash

```