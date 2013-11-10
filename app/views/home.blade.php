<html>
	<head>
		<title>My Blog`home</title>
	</head>
	<body>
        <div class = "content">
                @foreach ($articles as $article)
                        {{{ $article->id}}}||
                        {{{ $article->title}}}||
                        {{{ $article->author}}}||
                        {{{ $article->categorys_id}}}||
                        {{{ $article->content}}}
                <br>
                <hr>
                @endforeach
          </div>
	</body>
</html>