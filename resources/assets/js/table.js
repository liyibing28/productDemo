$(function(){
    var sourceTable = $("#top_fix_table");//table id
    var sourceTableHead = $("#table_head");//table thead tr id
    var headHeight = sourceTableHead.height();//table thead tr height
    var sourceTableWidth = sourceTable.outerWidth(); //get source table width
    //copy table and thead html tag from source table,
    $('body').append('<div id="shelter"><table id="fixed_table"  border="0" cellpadding="4" cellspacing="0" class="table table-hover"><thead></thead></table></div>');
    //only set top and left,beacuse i need the top bar can scroll left
    $("#shelter").css({'height':headHeight,'position':'fixed','top':'0','left':'0'});
    //set target table width equal source table width
    $("#fixed_table").css({'width':sourceTableWidth+"px"});

    //only clone tr html and change thead tr id attr
    var targetHead = sourceTableHead.clone().attr('id','fix_head');
    targetHead.appendTo('#fixed_table thead');
    //mark target table thead td width,height equal source table thead td width,height
    $("#table_head td").each(function(index,value){
        var tempWidth = $(value).outerWidth();
        var tempHeight = $(value).outerHeight();
        $("#fixed_table td").eq(index).css({'width':tempWidth+"px",'height':tempHeight+"px"});
    });
    $("#shelter").hide();
    $(window).scroll(function(){
        //scroll left method
        var sl=-Math.max($('body').scrollLeft(),$('document').scrollLeft());
        if(isNaN(sl)){
            sl = - $(window).scrollLeft();
        }
        console.log(sl);
        $('#shelter').css("left",sl+'px');
        var scroll_top = $('body').scrollTop() - sourceTable.offset().top;
        //control  show or hide
        if (scroll_top > 0) {
            $('#shelter').show();
        }else {
            $('#shelter').hide();
        }
    });

});