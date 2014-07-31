<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>
			@if(empty($topic))
			General
			@else
			{{{$topic}}}
			@endif
		</h2>

		Return Email:
		<a href="mailto:{{$email}}">{{$email}}</a>


		<div>
		<br>
			Content: {{{$content}}}
		</div>
	</body>
</html>