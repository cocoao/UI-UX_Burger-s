$(function(){
  // tab navigation
  $('.cusNav button').click(function(){
    let selClass = $(this).attr('class')
    $('.cusNav button').removeClass('active');
    $(this).addClass('active');
    $('.selectBox').hide();
    $('.selectBox.' + selClass).show();
  });
  $('.cusNav button.bun').trigger('click');
  
  // insert text in pay box & select image hover when one select tab click
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

  // insert text in pay box & select image hover when more select tab click
  $('.selectBox_do .select').click(function(){
    let selClass = $(this).parents('.selectBox').attr('class');
    let classNam = selClass.split(" ");
    let selNam = $(this).text();
    let paySel = $('.selList p.' + classNam[0]);
    let nowTxt = paySel.text();
    
    $(this).toggleClass('click');
    paySel.text(nowTxt + selNam);

    if(nowTxt.includes('선택안함')){
      $(this).siblings('.reset').removeClass('click');
      paySel.text(selNam);
    }

    if(!$(this).hasClass('click')){
      let changTxt = nowTxt.replace(selNam,'');
      paySel.text(changTxt);
    }
    
    // pay box text delete when no select btn click
    if($(this).hasClass('reset')){
      $(this).siblings('.select').removeClass('click');
      $(this).addClass('click');
      paySel.text('');
      paySel.text(selNam);
    }
  });

  // view box effect
 $('.selectBox .select').click(function(){
    $('.selectBox .select.reset').removeClass('on');
    $(this).toggleClass('on');

    if($(this).hasClass('on')){
    let eleIndex = $(this).index();
    let className = $(this).parents('.selectBox').attr('value');

      // remove & insert image when one select tab click
      if($(this).parents('.selectBox').hasClass('selectBox_on')){
        $(this).toggleClass('on');
        $('.cusView .' + className + '>img').css({'position':'absolute'});
        $('.cusView .' + className + '>img').css({'left':'100%'},300);
        $('.cusView .' + className + '>img').eq(eleIndex).animate({'left':'0'},300);
        $('.cusView .' + className + '>img').eq(eleIndex).css({'position':'relative'});

        if(className == 'bun'){
          $('.cusView .' + className + '.bunUp>img').css({'left':'100%'});
          $('.cusView .' + className + '.bunDown>img').css({'left':'100%'});
          $('.cusView .' + className + '.bunUp>img').eq(eleIndex).animate({'left':'0'},300);
          $('.cusView .' + className + '.bunDown>img').eq(eleIndex).animate({'left':'0'},300);
          $('.cusView .' + className + '.bunUp>img').eq(eleIndex).css({'position':'relative'});
          $('.cusView .' + className + '.bunDown>img').eq(eleIndex).css({'position':'relative'});
        }
      }

      if($(this).parents('.selectBox').hasClass('selectBox_do')){
        let eleIndex = $(this).index();
        let className = $(this).parents('.selectBox').attr('value');
        $(this).toggleClass('on');
        if($('.select').hasClass('on')){
        $('.cusView .' + className + '>img').eq(eleIndex).animate({'left':'0'},300);
        $('.cusView .' + className + '>img').eq(eleIndex).css({'position':'relative'});
          console.log(className);
        }
      }
    }

    if(!$(this).hasClass('on')){
      let eleIndex = $(this).index();
      let className = $(this).parents('.selectBox').attr('value');
      $('.cusView .' + className + '>img').eq(eleIndex).animate({'left':'100%'},300);
      $('.cusView .' + className + '>img').eq(eleIndex).css({'position':'absolute'});
      if(className == 'bun'){
        $('.cusView .' + className + '.bunUp>img').eq(eleIndex).animate({'left':'100%'},300);
        $('.cusView .' + className + '.bunDown>img').eq(eleIndex).animate({'left':'100%'},300);
      }
    }

    // 다른거 선택하면 선택안함 사라지게
    // view box image delete when no select btn click
    if($(this).hasClass('reset')){
      $('.selectBox .select').removeClass('on');
      $(this).toggleClass('on');
    }
  });
});