jQuery(document).ready(function($){
	$('.site-header .menu-principal .menu').slicknav({
		label:'',
		appendTo:'.site-header'
	});

	//agregar Slider
	if($('.listado-testimoniales').length > 0){
		$('.listado-testimoniales').bxSlider({
			auto:true,
			mode:'fade',
			controls:false
		});
	}

	//Codigo del mapa
	if($('#lat').length > 0){

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
	}
});

/** agrega position fija en el header al hacer scroll**/
window.onscroll = () =>{
	const scroll = window.scrollY;

	const headerNav = document.querySelector('.barra-navegacion');

	const documentBody = document.querySelector('body');

	if(scroll > 300)
	{
		headerNav.classList.add('fixed-top');
		documentBody.classList.add('ft-activo');
	}
	else
	{
		documentBody.classList.remove('ft-activo');
		headerNav.classList.remove('fixed-top');
	}
}