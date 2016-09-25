var opens=[0,0,0,0];
var names=[".title-sponsors ",".gold-sponsors ",
".silver-sponsors ",".bronze-sponsors "];
$(".hide-n-seek").slideUp();//close all
clickedd(0,names[0]);//open by default

$(".title-sponsors .heading-sponsor").click(function(){
	clickedd(0,names[0]);
});
$(".gold-sponsors .heading-sponsor").click(function(){
	clickedd(1,names[1]);
});
$(".silver-sponsors .heading-sponsor").click(function(){
	clickedd(2,names[2]);
});
$(".bronze-sponsors .heading-sponsor").click(function(){
	clickedd(3,names[3]);
});


function clickedd(num){
	var headsponsor=names[num];

	if(opens[num]==0)
	{
		$(headsponsor+".fa").fadeToggle("1000");
		$(headsponsor+".hide-n-seek").slideDown();
		$(headsponsor+".heading-sponsor").attr("title","Click to close");
		$(headsponsor+".fa").removeClass("fa-plus");
		$(headsponsor+".fa").addClass("fa-minus");
		$(headsponsor+".fa").fadeToggle("1000");
		opens[num]=1;
		close_baki_sab(num);
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
function close_baki_sab(num){
	var i=0;
	for(i=0;i<=3;i++)
	{
		if(i==num)continue;
		if(opens[i]==1)
			clickedd(i);
	}
}
