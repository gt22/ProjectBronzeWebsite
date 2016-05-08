$(document).ready(function()
{
	change_image();
	setupMenu();
	setupHeader();
})

function setupMenu()
{
	$('.menu').html('<div class="row"><div class="menuback"><div class="menuc"><a class="link" href="multigaming.html"><img class="menuimg" src="images/multigaming.jpg"></a></div><div class="menuc"><a class="link" href="index.html"><img class="menuimg" src="images/main.png"></a></div><div class="menuc"><a class="link" href="file.html"><img class="menuimg" src="images/main.png"></a></div></div></div><div class="row"><div class="menuback"><div class="menuc"><a class="link" href="contacts.html"><img class="menuimg" src="images/contacts.png"></a></div><div class="menuc"><a class="link" href="modpacks.html"><img class="menuimg" src="images/mopacks.png"></a></div><div class="menuc"><a class="link" href="modlists.html"><img class="menuimg" src="images/mopacks.png"></a></div></div></div>')
}

function setupHeader()
{
	$('#header').html('<a href="index.html"><img src="images/gear.png" width="100px"></a><button class="menubutton" onclick="openmenu()">Menu</button><button id="hidewidgets"onclick="hidewidgets()">Hide widgets</button>')
}

function openmenu() 
{
$( ".menu" ).last().addClass( "show" );
}

var i=1;
function change_image()
{
    if(i==4)
    {
        i=1;
    }

    var img="url(images/back/Background"+i+'.jpg)'
    $("#content").css('backgroundImage', img);
    i++;
    setTimeout("change_image()",60000);
}