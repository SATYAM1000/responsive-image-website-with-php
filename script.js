let post=document.querySelectorAll('.post-1');
let text1=document.querySelectorAll('.text1');
console.log(text1)
console.log(post);
post.forEach(function(e,i){
    e.addEventListener('mouseenter', function(){
        console.log(text1[i]);
        text1[i].style.display="flex";

    })

    e.addEventListener('mouseleave', function(){
        console.log(text1[i]);
        text1[i].style.display="none";
    })
})

gsap.from('.cards',{
    y:400,
    scrollTrigger:{
        trigger:'.cards',
        markers:false,
        scrub:true,
        start:"-80% 86%",
        end:"-70% 75%",
        ease:"slow",
    }
})