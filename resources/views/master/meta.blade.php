<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
    {{ request()->is('/') ? 'FTNews' : $post->title ?? 'FTNews' }}
</title>
<meta name="description"
    content="
    {{ request()->is('/') ? 'Welcome to FTNews, your source for the latest news and updates.' : $post->description ?? 'FTNews description' }}
">
<link rel="icon" type="image/png" href="{{ URL::asset('Icon-light.webp') }}">
<meta name="keywords"
    content="
    {{ request()->is('/') ? 'news, updates, FTNews, nasional, hukum, politik, daerah, metropolitan, lifestyle, kesehatan' : $post->keywords ?? 'news, updates, FTNews, nasional, hukum, politik, daerah, metropolitan, lifestyle, kesehatan' }}
">
<link rel="canonical" href="https://ftnews.co.id/" />
<meta name="theme-color" content="#50a5dc">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="
{{ request()->is('/') ? 'FTnews' : $post->title ?? 'FTnews' }}
">
<meta property="og:description"
    content="
{{ request()->is('/') ? 'Welcome to FTnews, your source for the latest news and updates.' : $post->description ?? 'FTnews description' }}
">
<meta property="og:image"
    content="
{{ isset($post) && $post instanceof \Illuminate\Pagination\LengthAwarePaginator
    ? (isset($post->data[0]->gambar) && is_string($post->data[0]->gambar)
        ? asset('storage/' . $post->data[0]->gambar)
        : asset('images/icon-ftnews.png'))
    : (isset($post->gambar) && is_string($post->gambar)
        ? asset('storage/' . $post->gambar)
        : asset('images/icon-ftnews.png')) }}
">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="FTnews">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="
{{ request()->is('/') ? 'FTnews' : $post->title ?? 'FTnews' }}
">
<meta name="twitter:description"
    content="
{{ request()->is('/') ? 'Welcome to FTnews, your source for the latest news and updates.' : $post->description ?? 'FTnews description' }}
">
<meta name="twitter:image"
    content="
{{ isset($post) && $post instanceof \Illuminate\Pagination\LengthAwarePaginator
    ? (isset($post->data[0]->gambar) && is_string($post->data[0]->gambar)
        ? asset('storage/' . $post->data[0]->gambar)
        : asset('images/icon-ftnews.png'))
    : (isset($post->gambar) && is_string($post->gambar)
        ? asset('storage/' . $post->gambar)
        : asset('images/icon-ftnews.png')) }}
">
