@extends('admin.index')
@section('main')


<div class="grid-container">
	<div class="header-container">
		

	<h1><span class="featured">SGIAR</span> Audiovisual</h1>
		</div>
	<div class="row videogrid">

		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/xqnsqMRsj9I" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/L2cokl5Mxh8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/kizatrsMzFE" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/xqnsqMRsj9I" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/L2cokl5Mxh8" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="gridvideoitem col-md-4">
		<iframe class="videEmbed"  src="https://www.youtube.com/embed/kizatrsMzFE" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
@endsection
@section('addScripts')
<script src="/js/baseurl.js"></script>
<script src="/js/adm-users.js"></script>

@endsection