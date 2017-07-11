$( document ).ready(function() 
{
	console.log( "- Document ready" );
	token = $("#token").val();
	init();
});


function init()
{
	console.log("- Function init");
	userForAuthContainer = $(".usersForEnable");
	usersAuthContainer = $(".enabledUsers");
	//get users
	routeAddUser = baseurl+"admin/users";;
	callUsers();

	
}

function callUsers(){
	$.ajax(
	{
		url: routeAddUser,
		headers: {'X-CSRF-TOKEN': token},
		type: 'GET',
		dataType: 'json',
		data: {},
		
		success: function(data)
		{
			console.log("- Exito en la carga de usuarios");
			renderUsers(data);
		}
	});
}
function renderUsers(userdata)
{
	usersAuthContainer.empty();
	userForAuthContainer.empty();
	usersLenght = userdata.length;
	for (var i = 0; i < usersLenght; i++) {
		let type = userdata[i].type;
		let user = userdata[i];
		console.log(type);

		switch (type) {
			case "11111":
			console.log("SuperAdmin"); 
			break;
			
			case "0":
			console.log("Sin privilegios");
			userForAuthContainer.append('<p>'+user.name+'<a class="enable" data-userid="'+user.id+'" href="#">Habilitar</a></p>');
			break;
			
			case "1":
			console.log("Con privilegios");
			usersAuthContainer.append('<p>'+user.name+'<a class="unable" data-userid="'+user.id+'" href="#">Deshabilitar</a></p>');
			break;

		}
	}

	listenForChanges();
};


function listenForChanges()
{
	console.log("Listen for changes");
	let enableUser = $(".enable");
	let unableUser = $(".unable");
	let routeEditUser = baseurl + "user/editstatus";		
	enableUser.off();
	unableUser.off();

	enableUser.click(function()
	{
		console.log("Habilitar");
		let userId = $(this).attr("data-userid");
		$.ajax(
		{
			url: routeEditUser,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data: {userid: userId, totype: 1},
			
			success: function(data)
			{
				console.log("- Exito en la carga de usuarios");
				callUsers();
				
			}
		});
	});

	unableUser.click(function()
	{
		console.log("Deshabilitar");
		let userId = $(this).attr("data-userid");
		$.ajax(
		{
			url: routeEditUser,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data: {userid: userId, totype: 0},
			
			success: function(data)
			{
				console.log("- Exito en la carga de usuarios");
				callUsers();
				
			}
		});
	});

}