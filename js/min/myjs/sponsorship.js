var opens=[0,0,0,0];
$(".hide-n-seek").slideUp();//close all
clickedd(0,".title-sponsors ");//open by default

$(".title-sponsors .heading-sponsor").click(function(){
	clickedd(0,".title-sponsors ");
});
$(".gold-sponsors .heading-sponsor").click(function(){
	clickedd(1,".gold-sponsors ");
});
$(".silver-sponsors .heading-sponsor").click(function(){
	clickedd(2,".silver-sponsors ");
});
$(".bronze-sponsors .heading-sponsor").click(function(){
	clickedd(3,".bronze-sponsors ");
});


function clickedd(num,headsponsor){

	if(opens[num]==0)
	{
		$(headsponsor+".fa").fadeToggle("1000");
		$(headsponsor+".hide-n-seek").slideDown();
		$(headsponsor+".heading-sponsor").attr("title","Click to close");
		$(headsponsor+".fa").removeClass("fa-plus");
		$(headsponsor+".fa").addClass("fa-minus");
		$(headsponsor+".fa").fadeToggle("1000");
		opens[num]=1;
	}
	else
	{
		$(headsponsor+".fa").fadeToggle("1000");
		$(headsponsor+".hide-n-seek").slideUp();
		$(headsponsor+".heading-sponsor").attr("title","Click to expand");
		$(headsponsor+".fa").removeClass("fa-minus");
		$(headsponsor+".fa").addClass("fa-plus");
		$(headsponsor+".fa").fadeToggle("1000");
		opens[num]=0;
	}
}
