@extends('admin.index')
@section('main')
<h1>Bienvenido SGIAR</h1>
<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
<h2>Pendientes de aprobación</h2>


<div class="usersForEnable">
	
</div>


<h2>Usuarios habilitados</h2>
<div class="enabledUsers">
	
</div>


@endsection
@section('addScripts')
<script src="/js/baseurl.js"></script>
<script src="/js/adm-users.js"></script>

@endsection