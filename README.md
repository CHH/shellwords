# Shellwords

Shellwords splits argument strings into an array of individual
arguments, much like the Bourne Shell does it. It's a crappy port
of the Ruby Standard Library's `Shellwords.rb`.

## Install

Install via composer:

    {
        "require": {
            "chh/shellwords": "*"
        }
    }

## Usage

To split a string according to the Bourne Shell's rules use the static
`split` method.

```php
<?php

use CHH\Shellwords;

$input = "'this is quoted' foo bar";

var_export(Shellwords::split($input));
# Output:
# array("this is quoted", "foo", "bar")
```

The `Shellwords` class also features a `join` method, which escapes
each array item with `escapeshellarg` and joins them with a space.

```php
<?php

use CHH\Shellwords;

$cmd = Shellwords::join(["ls", "-l", "some directory with spaces"]);
# 'ls' '-l' 'some directory with spaces'

`$cmd`;
```

## License

The MIT License

Copyright (c) 2012 Christoph Hochstrasser

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

