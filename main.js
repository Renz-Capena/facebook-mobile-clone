const okBtn = document.querySelector('#okBtn');
const session_wrapper = document.querySelector('.session_wrapper');


okBtn.addEventListener('click',function(){
    session_wrapper.style.display = 'none'
})

setTimeout(function(){
    session_wrapper.style.display = 'block'
},2000)
