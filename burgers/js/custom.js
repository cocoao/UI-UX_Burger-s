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
      let nowTxtDe = paySel.text();
      let selNamDe = $(this).text();
      let deTxt = nowTxtDe.splice(indexOf(selNam),1);
      paySel.text(selNamDe);
      // let deNowTxt = nowTxtDe.split(" ");
      // let filtered = deNowTxt.filter((element) => element !== selNam);
      // document.writeln(filtered);
    }
  });
});