/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

		


$('document').ready(function()
{ 

	var  nn1 = parseFloat($("#n1").text());var  nn2 = parseFloat($("#n2").text());var  nn3 = parseFloat($("#n3").text());
  	var  nn4 = parseFloat($("#n4").text());var  nn5 = parseFloat($("#n5").text());
  	var rt = nn1 + nn2 + nn3 + nn4 + nn5 
  	$("#t1").text(rt);
  	

  	var  ll1 = parseFloat($("#l1").text());var  ll2 = parseFloat($("#l2").text());var  ll3 = parseFloat($("#l3").text());
  	var  ll4 = parseFloat($("#l4").text());var  ll5 = parseFloat($("#l5").text());
  	var rlt = ll1 + ll2 + ll3 + ll4 + ll5 
  	$("#t2").text(rlt);



  	var  cc1 = parseFloat($("#c1").text());var  cc2 = parseFloat($("#c2").text());var  cc3 = parseFloat($("#c3").text());
  	var  cc4 = parseFloat($("#c4").text());var  cc5 = parseFloat($("#c5").text());
  	var rct = cc1 + cc2 + cc3 + cc4 + cc5 
  	$("#t3").text(rct);



  	var  gg1 = parseFloat($("#g1").text());var  gg2 = parseFloat($("#g2").text());var  gg3 = parseFloat($("#g3").text());
  	var  gg4 = parseFloat($("#g4").text());var  gg5 = parseFloat($("#g5").text());
  	var rgt = gg1 + gg2 + gg3 + gg4 + gg5 
  	$("#t4").text(rgt);
		
	
});