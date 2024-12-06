<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div style="margin-bottom: 15px;text-align: right;">
	<a href="https://writer.did-1.com" target="_blank" style="color:#1da1f2;">Submit new post</a>
    </div>
    @foreach ($posts as $post)
    <div class="post">
      <div class="avatar">
        <img src="/avatar/?value={{$post['owner']}}" alt="User Avatar">
      </div>
      <div class="content">
        <a href="http://{{$post['owner']}}" target="_blank" style="text-decoration:none"><h3 class="username">{{$post['owner']}}</h3></a>
        @foreach ($post['content'] as $message)
        <p class="message">{!! convertUrlsToLinks($message) !!}</p>
        @endforeach
        <div class="interactions">
	  <div style="display:flex">
		  <span class="retweets">
		    <span class="retweet-icon">🔁</span>
		    <span class="retweet-count">{{$post['total']}}</span>
		  </span>
		  <!-- <span class="comments">
		    <span class="comment-icon">💬</span>
		    <span class="comment-count">12</span>
		  </span> -->
		  <span class="post-link">
		    <a href="{{$post['url']}}" class="post-link-icon"  target="_blank">🔗</a>
		  </span>
	  </div>
          <span class="post-time">
            <span class="post-time-text">{{ \Carbon\Carbon::parse($post['time'])->format('Y-m-d H:i:s') }}</span>
          </span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="container">
    <!-- Add more post blocks as necessary -->
  </div>
</body>

</html>
