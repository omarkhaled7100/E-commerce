function addToCart() {
   var quant = document.getElementById('noOfProduct').value;
   if (quant > 0) {
      var show = document.createElement("p");
      var text = document.createTextNode("The quantity you order is " + quant + ". You will receive it in 14 days please if you have any troubles don't hesitate to call");
      show.appendChild(text);
      document.body.appendChild(show);
      show.style.color = "red";
      show.style.fontSize = "24px"
      $("p").append("Thanks for using our service.");
   } else if (quant < 0) {
      alert('you have to choose a positive number');
   } else{
      $(document).ready(function(){
         $('#noOfProduct').innerHTML = "please pick a number more than 0";
      });
   }
}


function add() {
   var quantity = document.getElementById('noOfProduct').value;
   quantity++;
   document.getElementById('noOfProduct').innerHTML = quantity;
}



function subtract() {
   var quantity = document.getElementById('noOfProduct').value;
   if (quantity > 0) {
      quantity--;
   }
   document.getElementById('noOfProduct').innerHTML = quantity;
}


function loadMore() {
   var xhr = new XMLHttpRequest();
   var button =document.getElementById('displayMore');
   xhr.open('GET', 'json/'+button.getAttribute("alt")+'.json', true);
   
   xhr.onload = function () {
      if (this.status == 200) {
         var body = document.querySelector("body");
         var response = JSON.parse(xhr.responseText).response;
         var node;
         for (let i = 0; i < response.length; i++) {
            if (i % 3 == 0) {
               node = document.createElement("div");
               node.classList.add("row");
            }
            node.innerHTML += '<div class="Cateogrycard"><img src="' + response[i].img + '" alt="' + response[i].name +
               '" class="fashion-img">' + '<div><h2>' + response[i].name +
               '</h2><p>For sale up to ' + response[i].sale +
               '%</p><a href="Quantity.html"><button onclick="addToCart()">Buy Now</button></a></div></div>';

            if (i % 3 == 0 || (i >= response.length)) {
               body.appendChild(node);
            }

         }
      } else if (this.status == 404) {
         alert("not Found");
      }
   }
   xhr.onerror = function () {
      alert("error");
   }

   xhr.send();

   button.remove();

}

