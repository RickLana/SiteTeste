<footer>
    <div class="row row-azul">
        <div class="row">
            <div class="col col-footer col-home">
                <i class="fas fa-couch fa-00"></i>
                <span>Home</span>
                   <ul>
                    <li><a href="#">INÍCIO</a></li>
                    <li><a href="#">SERVIÇOS</a></li>
                    <li><a href="#">CONTATOS</a></li>
                </ul>
            </div>
            <div class="col col-footer col-sub">
                <i class="far fa-bell fa-01"> SUBSCRIBE</i>
                
                <input type="search" placeholder="subscribe" id="inscrever">  
                <button class="btn btn-primary  btn-cadastro" type="submit" value="Submit">INSCREVER</button>
                
                
            </div>
 <div class="col col-footer col-local">
    <span>Local</span>
                <i class="fas fa-map-marker-alt fa-02"></i>
                
                   <ul>
                    <li><a href="#">INÍCIO</a></li>
                    <li><a href="#">SERVIÇOS</a></li>
                    <li><a href="#">CONTATOS</a></li>
                </ul>
            </div>
    </div>
    <div class="row row-azul2">
        

            <div class="pull-corporight">Copyright © Nilton Silva. All rights reserved.</div>
            <div class="pull-creat">Created by Nilton Silva</div>

        
    </div>
</footer>
<script>
    var veri = 1;
var trigger = document.getElementById('menu-trigger').addEventListener("click",function(){
  var menu = document.getElementById('menu-hidde');
  if (veri == 1) {
    menu.style.left = "0px";
    veri = 0;
  }else{
    menu.style.left = "-100%";
    veri = 1;
  }
})
</script>
<script>
$(document).ready(function(){
   $('.owl-carousel').owlCarousel({
      nav:false,
      slideSpeed: 1000,
      autoplay:true, // mostra os botões
      loop:true
      
     
   })
});
    </script>



    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>