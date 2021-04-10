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
//  $('.selectBox.selectBox_on .select').click(function(){
//   let eleIndex = $(this).index();
//   let className = $(this).parents('.selectBox').attr('value');
//   let viewImg = $('.cusView .' + className + '>img');
//   viewImg.eq(eleIndex).toggleClass('check');

//   if(viewImg.hasClass('check')){
//     viewImg.removeClass('check');
//     viewImg.eq(eleIndex).toggleClass('check');
//     viewImg.animate({"left":"100%"},300);
//     viewImg.css({"position":"absolute"});
//     viewImg.eq(eleIndex).animate({"left":"0"},300);
//     viewImg.eq(eleIndex).css({"position":"relative"});
//     if(className == 'bun'){
//       $('.cusView .' + className + '.bunUp >img').eq(eleIndex).animate({"left":"0"},300);
//       $('.cusView .' + className + '.bunUp >img').eq(eleIndex).css({"position":"relative"});
//       $('.cusView .' + className + '.bunDown >img').eq(eleIndex).animate({"left":"0"},300);
//       $('.cusView .' + className + '.bunDown >img').eq(eleIndex).css({"position":"relative"});
//     }
//   }

//   if(!viewImg.hasClass('check')){
//     viewImg.eq(eleIndex).animate({"left":"100%"},300,function(){
//     viewImg.eq(eleIndex).css({"position":"absolute"})
//     });
//     if(className == 'bun'){
//       $('.cusView .' + className + '.bunUp >img').animate({"left":"100%"},300,function(){
//         $('.cusView .' + className + '.bunUp >img').css({"position":"absolute"});
//       });
//       $('.cusView .' + className + '.bunDown >img').animate({"left":"100%"},300,function(){
//         $('.cusView .' + className + '.bunDown >img').css({"position":"absolute"});
//       });
//     }
//   }
// });

$('.selectBox.selectBox_on .select').click(function(){
  let eleIndex = $(this).index();
  let className = $(this).parents('.selectBox').attr('value');
  let viewImg = $('.cusView .' + className + '>img');
  viewImg.eq(eleIndex).toggleClass('check').siblings().removeClass('check');
  
  if($('.bunUp>img').eq(eleIndex).hasClass('check')){
    $('.cusView .bunDown>img').removeClass('check');
    $('.cusView .bunDown>img').eq(eleIndex).addClass('check');
  } else {
    $('.cusView .bunDown>img').eq(eleIndex).removeClass('check');
  }
});

$('.selectBox.selectBox_do .select').click(function(){
  let eleIndex = $(this).index();
  let className = $(this).parents('.selectBox').attr('value');
  let viewImg = $('.cusView .' + className + '>img');

  viewImg.eq(eleIndex).toggleClass('check');

  // if(viewImg.hasClass('check')){
  //   viewImg.eq(eleIndex).animate({"left":"0"},300);
  //   viewImg.eq(eleIndex).css({"position":"relative"});
  // }
  // else {
  //   viewImg.eq(eleIndex).animate({"left":"100%"},300,function(){
  //   viewImg.eq(eleIndex).css({"position":"absolute"})
  //   });
  // }
});
});