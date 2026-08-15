<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $products = Product::query()->get();
        $articles = Article::query()->get();

        return response()
            ->view('sitemap', compact('products', 'articles'))
            ->header('Content-Type', 'application/xml');
    }
}