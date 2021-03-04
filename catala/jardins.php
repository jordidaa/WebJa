<!DOCTYPE html>
<html>
    <head>
        <title>Jardineria Algarrada</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/jpeg" href="Imatges/logo1.png">
        <meta name="keywords" content="Jardiners,Jardineros,Gardeners,Jardins,Jardines,Gardens,Algarrada,Girona,La Bisbal">
        <?php include ('../includes/meta.php')?>
    </head>
    <body class="quefem">
        <?php include ('../includes/navegacio_cat.php')?>
        <h1 class="mt-5 text-center bebas">Jardins</h1>
            <div class="mg40bot">
                <div class="row midmax1140">
            <p class="mt-3 text-center pad30lat roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus. Quisque porta eleifend tempus. 
                Suspendisse aliquam urna non hendrerit efficitur. Maecenas rhoncus ante eget mauris tempus congue. In id diam vestibulum, 
                condimentum purus ornare, lacinia ipsum. Maecenas ullamcorper risus imperdiet euismod gravida. Aliquam erat volutpat. 
                Nulla ligula velit, condimentum et tincidunt ut, euismod vitae risus.</p>
                </div>
            </div>
                <div class="row text-center">
                    <div class="col-xl-4 col-md-12">
                        <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins1.jpg" width="100%">
                    </a>
                    <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins2.jpg" width="100%">
                    </a>
                        <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                    </div>
                   </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins3.jpg" width="100%">
                    </a>
                        <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                    </div>
                    </div>
                </div>
                <div class="row  text-center mb-5">
                    <div class="col-xl-4 col-md-12">
                    <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins4.jpg" width="100%">
                    </a> 
                    <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                    </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins5.jpg" width="100%">
                        </a>
                        <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                    </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="dinsquefem">
                        <a href="#" class="pop">
                        <img src="http://localhost/webja/imatges/jardins6.jpg" width="100%">
                        </a>
                        <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate vehicula vestibulum. 
                Praesent sit amet nisi justo. Nulla sit amet purus nec arcu vestibulum porta. Pellentesque feugiat metus vel augue 
                euismod ornare. Aliquam sem augue, aliquet quis ex quis, laoreet malesuada lacus.</p>
                    </div>
                    </div>
                </div>
                <!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tancar</span></button>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 100%;margin:0 auto;" >
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function() {
        $('.pop').on('click', function() {
            $('#imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');   
        });     
});
</script>
        <footer>
            <?php include ('../includes/footer.php')?>
        </footer>
        
    </body>
</html>