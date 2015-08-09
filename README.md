pingpongcms
===========

A modern CMS based on Laravel PHP Framework.

## Server Requirements

- PHP >= 5.5.9
- Mcrypt PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

## Installation

```
composer create-project pingpongcms/pingpongcms --stability=dev
```

After the installation completed. You need to install the required modules.

```
cd /path/to/cms
php artisan module:install --no-update
```

## Demo

**Site**

You can try out the develop version of pingpong cms in http://demo.pingpongcms.com. 

**Administrator**

You can also try the administrator page of CMS by visiting http://demo.pingpongcms.com/administrator. Default login credentials is `pingpong.labs@gmail.com` for the email and `secret` for the password.

## Documentation

Coming Soon

## Issues

Because this CMS is still in the development stage, the issue of this repository deactivated. If you have tried to develop versions of this cms and find errors, you can notify us by email to pingpong.labs@gmail.com.

## License

```
The MIT License (MIT)

Copyright (c) 2014 Pingpong Labs

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```