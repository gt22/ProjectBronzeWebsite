$(document).ready(function()
{
	setupWidgets();
	setupCopyright();
})

function setupWidgets()
{
	$('#widgets').html('<iframe src="https://discordapp.com/widget?id=146275730924240896&amp;theme=dark" width="100%" height="300" allowtransparency="true" frameborder="0"></iframe><div id="vk_groups" style="height: 400px; width: 300px; background: none;"><iframe name="fXD39b28" frameborder="0" src="http://vk.com/widget_community.php?app=0&amp;width=300px&amp;_ver=1&amp;gid=105045900&amp;mode=2&amp;color1=&amp;color2=&amp;color3=&amp;class_name=&amp;wide=1&amp;height=400&amp;url=http%3A%2F%2Fprojectbronze.16mb.com%2FKoHTaKT%2F&amp;referrer=http%3A%2F%2Fprojectbronze.16mb.com%2F&amp;title=%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B%20-%20ProjectBronze&amp;1543187cc2d" width="300" height="200" scrolling="no" id="vkwidget1" style="overflow: hidden; height: 400px;"></iframe></div>')
}

function setupCopyright()
{
	$('.copyright').html('© ProjectBronze (Всё кроме фоновых изображений)')
}

function openmenu() 
{
$( ".menu" ).last().addClass( "show" );
}

window.onclick = function(event) {
if (!event.target.matches('.menubutton')) {
$( ".menu" ).last().removeClass( "show" );
}

}

function hidewidgets()
{
	$('#widgets').css('display', 'none');
	$('#hidewidgets').attr('onclick', 'showwidgets()').html('Show Widgets');
}

function showwidgets()
{
	$('#widgets').css('display', 'inline-block');
	$('#hidewidgets').attr('onclick', 'hidewidgets()').html('Hide Widgets');
}