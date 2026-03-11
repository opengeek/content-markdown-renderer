<?php

declare(strict_types=1);

namespace Opengeek\Content\MarkdownRenderer;

use Michelf\MarkdownExtra;
use Opengeek\Content\MarkdownRendererInterface;

/**
 * Renders Markdown to HTML using the Michelf MarkdownExtra library.
 */
final class HtmlMarkdownRenderer implements MarkdownRendererInterface
{
    public function render(string $markdown): string
    {
        return MarkdownExtra::defaultTransform($markdown);
    }
}
