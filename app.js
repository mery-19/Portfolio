const certificate=document.querySelector('#certificate');
const c1=document.querySelector('.c1');
const c2=document.querySelector('.c2');
const hoverimg1=document.querySelector('.hoverimg1');
const hoverimg2=document.querySelector('.hoverimg2');

// first certification
function mouseover1(){
    hoverimg1.style.display="block";
    console.log('success first');
}
function mouseover2(){
    
    hoverimg1.style.display="none";
}

// second certification
function mouseover3(){
    hoverimg2.style.display="block";
    console.log('success');
}
function mouseover4(){
    
    hoverimg2.style.display="none";
}


function smoothScroll(){
    certificate.scrollIntoView({
        behavior: 'smooth'
    });
}
