# opengeek/content-markdown-renderer

![PHP ^8.3](https://img.shields.io/badge/PHP-%5E8.3-blue)

Markdown renderer implementation for `opengeek/content` using `michelf/php-markdown`.

This package provides an HTML renderer for Markdown-based content objects, making it easy to transform Markdown body content into rendered output for display in your application.

## Installation

```bash
composer require opengeek/content-markdown-renderer
```

## Features

* Renders Markdown content to HTML
* Built on top of `michelf/php-markdown`
* Designed to integrate with `opengeek/content`
* Suitable for use with Markdown-backed repositories such as `opengeek/content-markdown`

## Usage

```php
<?php

declare(strict_types=1);

use OpenGeeks\ContentMarkdownRenderer\MarkdownContentRenderer;

$renderer = new MarkdownContentRenderer();

$html = $renderer->render($content);

echo $html;
```

In a typical setup, content is loaded through a repository implementation such as `opengeek/content-markdown`, then passed to this renderer to produce HTML for presentation.

For example:

```php
<?php

declare(strict_types=1);

use OpenGeeks\ContentMarkdown\MarkdownContentRepository;
use OpenGeeks\ContentMarkdownRenderer\MarkdownContentRenderer;

$repository = new MarkdownContentRepository('/path/to/content');
$renderer = new MarkdownContentRenderer();

$content = $repository->get('/posts/hello-world');

$html = $renderer->render($content);
```
