<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HighlightKeywords
{
    protected $keywords = [
        'AWS',
        'Bootstrap',
        'C++',
        'C#',
        'CloudFront',
        'CSS',
        'Docker',
        'GeoJSON',
        'Git',
        'Go',
        'Golang',
        'INI',
        'JavaScript',
        'JMS',
        'JS',
        'JSON',
        'Laravel',
        'Linux',
        'MySQL',
        'MSSQL',
        'PHP',
        'Python',
        'React',
        'ReactTS',
        'S3',
        'TailwindCSS',
        'TOML',
        'TypeScript',
        'Vanilla',
        'VBA',
        'Vite',
        'XML',
        'YAML'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $content = $response->getContent();

            foreach ($this->keywords as $keyword) {
                $escaped_word = preg_quote($keyword, '/');
                $pattern = "/(^|[\s\W])(" . $escaped_word . ")(?=$|[\s\W])/";
                $content = preg_replace(
                    $pattern,
                    '$1<span class="text-lang">$2</span>',
                    $content
                );
            }

            $response->setContent($content);
        }

        return $response;
    }
}
