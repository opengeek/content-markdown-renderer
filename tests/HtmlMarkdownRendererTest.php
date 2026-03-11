<?php

declare(strict_types=1);

namespace Opengeek\Content\MarkdownRenderer\Tests;

use Opengeek\Content\MarkdownRenderer\HtmlMarkdownRenderer;
use PHPUnit\Framework\TestCase;

final class HtmlMarkdownRendererTest extends TestCase
{
    private HtmlMarkdownRenderer $renderer;

    protected function setUp(): void
    {
        $this->renderer = new HtmlMarkdownRenderer();
    }

    public function testRenderConvertsMarkdownToHtml(): void
    {
        $markdown = "# Hello\n\nThis is **bold**.";
        $html = $this->renderer->render($markdown);

        $this->assertStringContainsString('<h1>Hello</h1>', $html);
        $this->assertStringContainsString('<strong>bold</strong>', $html);
    }
}
