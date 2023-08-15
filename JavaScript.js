/*القائمة الجانبية الرئيسية*/

function openFunction(){
    document.getElementById('menu').style.width='250px';
}

function closeFunction(){
    document.getElementById('menu').style.width='0px';
}

/*القوائم الفرعية في القائمة الجانبية الرئيسية */

function open_lest_3(){
    document.getElementById('lest_3').style.height='300px';
    document.getElementById('btn-lest3').style.display='none';
    document.getElementById('btn-lest_close3').style.display='flex';
}

function close_lest_3(){
    document.getElementById('lest_3').style.height='0px';
    document.getElementById('btn-lest3').style.display='flex';
    document.getElementById('btn-lest_close3').style.display='none';
}

window.addEventListener('mouseup' , function(event){
    var box=document.getElementById('lest_3');
    if(event.target!=box){
        box.style.height='0px';
    }
});

function open_lest_4(){
    document.getElementById('lest_4').style.height='500px';
    document.getElementById('btn-lest4').style.display='none';
    document.getElementById('btn-lest_close4').style.display='flex';
}

function close_lest_4(){
    document.getElementById('lest_4').style.height='0px';
    document.getElementById('btn-lest4').style.display='flex';
    document.getElementById('btn-lest_close4').style.display='none';
}

window.addEventListener('mouseup' , function(event){
    var box=document.getElementById('lest_4');
    if(event.target!=box){
        box.style.height='0px';
    }
});

