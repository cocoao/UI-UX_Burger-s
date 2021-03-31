$(function(){
  $('.cusNav button').click(function(){
    let selClass = $(this).attr('class')
    $('.cusNav button').removeClass('active');
    $(this).addClass('active');
    $('.selectBox').hide();
    $('.selectBox.' + selClass).show();
  });
  $('.cusNav button.bun').trigger('click');
  

  $('.selectBox_on .select').click(function(){
    $(this).siblings('.select').removeClass('click');
    $(this).toggleClass('click');

    let selClass = $(this).parents('.selectBox').attr('class');
    let classNam = selClass.split(" ");
    let selNam = $(this).text();
    $('.selList p.' + classNam[0]).text(selNam);

    if(!$(this).hasClass('click')){
      $('.selList p.' + classNam[0]).text('');
    }
  });

  $('.selectBox_do .select').click(function(){
    $(this).toggleClass('click');

    let selClass = $(this).parents('.selectBox').attr('class');
    let classNam = selClass.split(" ");
    let selNam = $(this).text();
    let paySel = $('.selList p.' + classNam[0]);
    let nowTxt = paySel.text();
    paySel.text(nowTxt + selNam);
  
    if(!$(this).hasClass('click')){
      let selClass = $(this).parents('.selectBox').attr('class');
      let classNam = selClass.split(" ");
      let selNam = $(this).text();
      let paySel = $('.selList p.' + classNam[0]);
      let nowTxt = paySel.text();
      if(nowTxt.includes(selNam)){
        paySel.replace(selNam,'');
      }
    }
  });

  $('.selectBox .select').click(function(){
    if($(this).hasClass('click')){
    let eleIndex = $(this).index();
    let className = $(this).parents('.selectBox').attr('value');

    $('.cusView .' + className + '>img').eq(eleIndex).animate({'left':'0'},300);
    $('.cusView .' + className + '>img').eq(eleIndex).css({'position':'relative'});
    if(className == 'bun'){
      $('.cusView .' + className + '.bunUp>img').eq(eleIndex).animate({'left':'0'},300);
      $('.cusView .' + className + '.bunDown>img').eq(eleIndex).animate({'left':'0'},300);
      $('.cusView .' + className + '.bunUp>img').eq(eleIndex).css({'position':'relative'});
      $('.cusView .' + className + '.bunDown>img').eq(eleIndex).css({'position':'relative'});
    }
    }
  });

});