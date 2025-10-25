<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body style="margin:0;padding:0;">
  <div>
    <table border="1">
    <tr><th>Poster</th><th>Path</th><th>Signature</th><th>Content Hash</th><th>Block</th></tr>
    @foreach ($posts as $post)
    <tr>
	<td>{{$post['domain']}}</td>
	<td>{{$post['path']}}</td>
	<td>{{substr($post['signature'],0, 32)."..."}}</td>
	<td>{{$post['hash']}}</td>
	<td>{{$post['block']}}</td>
    </tr>
    @endforeach
    </table>
  </div>
</body>

</html>
