$(document).ready(function()
{
	setupModpacks();
})

function setupModpacks()
{
	$.getJSON('http://projectbronze.comli.com/launcher/new.json', function(data) {
        $.each(data.query, function(key, val) {
			alert(val.name);
			alert(val.mcversion);
		})
    });
}