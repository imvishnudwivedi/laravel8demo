jQuery(function($) {'use strict',
    //copyrights year
    today=new Date();
   year=today.getFullYear();
   var start=2019;
   if(year>start){
       $('#c_year').text(start+' - '+year);
   }else{
       $('#c_year').text(start);
   }
   if(year<start){
       $('#c_year').text(start);
   }
 });

    //#main-slider
 