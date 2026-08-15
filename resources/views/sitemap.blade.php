<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    {{-- Produk --}}
    <url>
        <loc>{{ url('/produk') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    {{-- Service --}}
    <url>
        <loc>{{ url('/service') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    {{-- Profil --}}
    <url>
        <loc>{{ url('/profil') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    {{-- Detail Produk --}}
    @foreach ($products as $product)
        <url>
            <loc>{{ url('/detailProduk/' . $product->id) }}</loc>

            @if ($product->updated_at)
                <lastmod>{{ $product->updated_at->toAtomString() }}</lastmod>
            @endif

            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    {{-- Artikel --}}
    @foreach ($articles as $article)
        @if (!empty($article->slug))
            <url>
                <loc>{{ url('/insight/' . $article->slug) }}</loc>

                @if ($article->updated_at)
                    <lastmod>{{ $article->updated_at->toAtomString() }}</lastmod>
                @endif

                <changefreq>weekly</changefreq>
                <priority>0.7</priority>
            </url>
        @endif
    @endforeach

</urlset>