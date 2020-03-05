<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


      <url>
           <loc>https://windowssoft.net</loc>
           <lastmod>2019-08-10T20:39:27+00:00</lastmod>
           <priority>1.0000</priority>
      </url>
      
       <url>
           <loc>https://windowssoft.net/#Contacts</loc>
           <lastmod>2019-08-10T20:39:27+00:00</lastmod>
           <priority>1.0000</priority>
      </url>
      
      
       <url>
           <loc>https://windowssoft.net/#About</loc>
           <lastmod>2019-08-10T20:39:27+00:00</lastmod>
           <priority>1.0000</priority>
      </url>
      
      
      
        @foreach ($categories as $category)
            <url>
                <loc>{{ route('UI.category', ['id' => $category->id])}}</loc>
                <lastmod>{{ $category->updated_at->tz('UTC')->toAtomString()}}</lastmod>
                <priority>0.90</priority>
            </url>
        @endforeach
        
        
       @foreach ($posts as $post)
            <url>
                <loc>{{ route('UI.showPost', ['title' => $post->title])}}</loc>
                <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString()}}</lastmod>
                <priority>0.90</priority>
            </url>
        @endforeach
  

</urlset>




