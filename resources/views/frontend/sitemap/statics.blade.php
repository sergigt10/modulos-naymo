<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($statics as $static)
        <url>
            <loc>https://www.modulosnaymo.es/{{ $static }}</loc>
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>{{ ( $static !== 'contacto-mobile-home' && $static !== 'casas-prefabricadas' ) ? 'monthly' : 'yearly' }}</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>