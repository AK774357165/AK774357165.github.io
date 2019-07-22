function jp_page(source){
    var links = source.getAttribute("href");
    window.open.href = 'links';
    return false;
}
function backToTop(){
    timer = setInterval(function(){
        var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
        var ispeed = Math.floor(-scrollTop/6);
        console.log(ispeed)
        if(scrollTop == 0){
            clearInterval(timer);
        }
        document.documentElement.scrollTop = document.body.scrollTop = scrollTop+ispeed;
    },30)
}

function showQr(whichpic){
    var source = whichpic.getAttribute("href");
    var placeholder = document.getElementById("placeholder");
    placeholder.setAttribute("src",source);
    placeholder.style.opacity = 1;
}



