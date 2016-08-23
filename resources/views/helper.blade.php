{{$test[0]}}
{{'<script>alert("test for XSS");</script>'}}
<!-- {!!'<script>alert("test for XSS");</script>'!!} -->
<!-- {{$LaraRuby = false}} -->
@if($LaraRuby)
	<p>So much fun with combine to Tech</p>
@else
	<p>Some Crappy thing happen when using two Tech</p>
@endif