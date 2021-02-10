<div class="container" style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-width: 85.5%;">
     <!-- Indicators -->
    <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php foreach($content as $row):?>
        <div class="item active">
            <center><img src="<?= base_url().'assets/img/'.$row->content_image?>" width="100%" alt="Menu"></center>
        </div>
        <?php endforeach;?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
</div>