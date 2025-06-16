<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ config('app.name') }} - Blog</title>
        <link>{{ route('blog') }}</link>
        <description>Latest blog posts from {{ config('app.name') }}</description>
        <language>en-us</language>
        <lastBuildDate>{{ now()->toRssString() }}</lastBuildDate>
        <atom:link href="{{ route('blog.rss') }}" rel="self" type="application/rss+xml" />
        
        @foreach($posts as $post)
        <item>
            <title><![CDATA[{{ $post->title }}]]></title>
            <link>{{ route('post', $post->slug) }}</link>
            <description><![CDATA[{{ $post->excerpt }}]]></description>
            <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            <guid isPermaLink="true">{{ route('post', $post->slug) }}</guid>
        </item>
        @endforeach
    </channel>
</rss>
