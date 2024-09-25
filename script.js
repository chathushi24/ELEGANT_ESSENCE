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

function deleteUser(id) {
    var r = new XMLHttpRequest();
    const confirmation = confirm("Are you sure you want to delete this user?");
    if (confirmation) {
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    window.location = "admin.php";
                } else {
                    alert(t);
                }
            }
        }

        r.open("GET", "removeUser.php?id=" + id, true);
        r.send();
    } else {
        alert("User deletion cancelled");
    }
}

const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

function openModal(){
    const modal = document.getElementById('modal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    modal.classList.remove('hidden');
}

function closeModal(){
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');
}
// Close modal when clicking outside of the modal container
window.addEventListener('click', (e) => {
    if (e.target == modal) {
        modal.classList.add('hidden');
    }
});


function submitProduct(){
    var r = new XMLHttpRequest();
    var title = document.getElementById("title").value;
    var price = document.getElementById("price").value;
    var qty = document.getElementById("qty").value;
    var size = document.getElementById("size").value;
    var description = document.getElementById("description").value;
    var img_url = document.getElementById("url").value;

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                    // Show the success alert
                    const successAlert = document.getElementById('successAlert');
                    successAlert.classList.remove('hidden');
    
                    // Hide the alert after 3 seconds
                    setTimeout(() => {
                        successAlert.classList.add('hidden');
                    }, 5000);
                    const modal = document.getElementById('modal'); // Make sure modal has correct ID or reference
                    modal.classList.add('hidden');
            } else {
                alert(t);
            }
        }

    }
    r.open("GET", "addProductProcess.php?title=" + title + "&price=" + price + "&qty=" + qty+ "&size=" + size+ "&description=" + description+ "&img_url=" + img_url, true);
    r.send();
}
function deleteProduct(id){
    var r = new XMLHttpRequest();
    const confirmation = confirm("Are you sure you want to delete this product?");
    if (confirmation) {
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "Success") {
                    window.location = "admin.php";
                } else {
                    alert(t);
                }
            }

        }

        r.open("GET", "removeProduct.php?id=" + id, true);
        r.send();
    } else {
        alert("User deletion cancelled");
    }
}

function changeStatus(id){
    var btn = document.getElementById("btn_ship_" + id);
    if (btn.innerHTML === "Shipped") {
        btn.innerHTML = "Delivered";
        btn.style.backgroundColor = "red";
    } else {
        btn.innerHTML = "Shipped";
        btn.style.backgroundColor = "green";
    }
    
}






