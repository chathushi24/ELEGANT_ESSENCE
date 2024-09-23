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

function addToCart(id) {
    var size = document.getElementById("size").value;
    var qty = document.getElementById("qty").value;
    var r = new XMLHttpRequest();
    //Passing the product id to the backend
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
                if (t == "Success") {
                    window.location = "cart.php";
                } else {
                    alert("Please login first");
                    window.location = "login.php";
                }
        }
    }

    r.open("GET", "addToCartProcess.php?id=" + id+ "&qty=" + qty+ "&size=" + size, true);
    r.send();

}


    function ViewProduct(id) {
        var r = new XMLHttpRequest();
    
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    window.location = "product.php";
                } else {
                    alert(t);
                }
            }
    
        }
    
        r.open("GET", "singleProductViewProcess.php?id=" + id, true);
        r.send();
    
    }

function logout(){
    var r = new XMLHttpRequest();
    
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    window.location = "index.php";
                } else {
                    alert(t);
                }
            }
    
        }
        r.open("GET", "signOutProcess.php", true);
        r.send();
}

function removeItem(id){
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                window.location = "cart.php";
            } else {
                alert(t);
            }
        }

    }
    r.open("GET", "removeItemProcess.php?id="+id, true);
    r.send();

    
}

function confirmedshipping(total){
    var r = new XMLHttpRequest();
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                alert(t);
                window.location = "index.php";
            } else {
                alert(t);
            }
        }

    }
    r.open("GET", "shippingProcess.php?total="+total+"&phone="+phone+"&address="+address, true);
    r.send();
}

