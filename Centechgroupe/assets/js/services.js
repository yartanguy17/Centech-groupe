function makeUnvisible(){
    var vis = document.getElementsByClassName("vision");
    vis[0].style.visibility = "hidden";
    var vis2 = document.getElementsByClassName('makeActive');
    vis2[0].classList.add("active");
}

makeVisible = () =>{
    var vis = document.getElementsByClassName("vision");
    vis[0].style.visibility = "visible";
    
}

function screenAdapt(){
    var map = document.getElementById('theMap');    
    map.width = window.innerWidth - 100;
}
window.onload = screenAdapt;