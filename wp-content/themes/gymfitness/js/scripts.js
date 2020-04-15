jQuery(document).ready(function($){
	$('.site-header .menu-principal .menu').slicknav({
		label:'',
		appendTo:'.site-header'
	});

	//agregar Slider
	$('.listado-testimoniales').bxSlider({
		auto:true,
		mode:'fade',
		controls:false
	});

	//Codigo del mapa
	const lat = document.querySelector('#lat').value;
	const lng = document.querySelector('#lng').value;
	const direccion = document.querySelector('#direccion').value;

	if(lat && lng && direccion)
	{
		var map = L.map('map').setView([lat, lng], 13);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		L.marker([lat, lng]).addTo(map)
		    .bindPopup(direccion)
		    .openPopup();
	}
});