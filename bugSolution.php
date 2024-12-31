The solution is to use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks for both value and type equality, preventing the unexpected type juggling that causes the issue.

```php
<?php
$a = "10";
$b = 10;
if ($a === $b) {
  echo "Equal";
} else {
  echo "Not Equal";
}
?>
```

This corrected code will now correctly output "Not Equal" because the strict comparison checks for both the value and type, and they are different.  Always use strict comparison when comparing values where type is important to avoid this common pitfall.