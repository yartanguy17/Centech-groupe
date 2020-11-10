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

/*function screenAdapt(){
    var map = document.getElementById('theMap');    
    map.width = window.innerWidth - 100;
}
//window.onload = screenAdapt;

function folio(){
    var fol = document.getElementsByClassName('portfolio-item');
    for(item of fol){
        var manip = item.children[0].children[0].style;
        manip.border = "1px solid black";
        manip.height = "260px";
        manip.width = "260px";
        manip.borderRadius = "25px";
        manip.boxShadow = "5px 5px 30px black";
    }
}*/

window.onload = function(){
    //folio()
    var fol = document.getElementsByClassName('portfolio-item');
    for(item of fol){
        var manip = item.children[0].children[0].style;
        manip.border = "3px solid #29aefb";
        manip.height = "260px";
        manip.width = "260px";
        manip.borderRadius = "25px";
        manip.boxShadow = "3px 3px 15px black";
        manip.transition = ".5s"

    }

    //screenAdapt()
    var map = document.getElementById('theMap');    
    map.width = window.innerWidth - 100;  


}
