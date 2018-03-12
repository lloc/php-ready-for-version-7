# New features in PHP 5.4

- Traits
- Short array syntax, e.g. `$a = [ 1, 2, 3, 4 ];` or `$a = [ 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4 ];`
- Function array dereferencing, e.g. `foo()[0]`
- Closures support `$this`
- `<?=` always available, regardless of the short_open_tag php.ini option
- Class member access on instantiation, e.g. `(new Foo)->bar()`
- `Class::{expr}()` syntax
- Binary number format, e.g. `0b001001101`
- Improved parse error messages and improved incompatible arguments warnings
- session extension can track the upload progress of files
- Built-in development web server in CLI mode

[Source](http://php.net/manual/en/migration54.new-features.php)