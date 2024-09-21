const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar")

if (bar){
    bar.addEventListener("click",() =>{
        nav.classList.add("active");
    })
}

if (close){
    close.addEventListener("click",() =>{
        nav.classList.remove("active");
    })
}

function addToCart(id){

    var r = new XMLHttpRequest();
//Passing the product id to the backend
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("GET","addToCartProcess.php?id="+id,true);
    r.send();

}

function ViewProduct(id){
    alert("hi");
    alert(id);

}

function Hi(){
    alert("Hi");
}
