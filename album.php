<!DOCTYPE html>
<html lang="en">
   <?php include('head.php');?>
   <body>
      <?php include('header.php');?>
         <main class="mdl-layout__content">
            <div class="page-content">
               <div class="m-p-g">
                  <div class="m-p-g__thumbs" data-google-image-layout data-max-height="250">
                     <img src="https://images.unsplash.com/photo-1583878545126-2f1ca0142714?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1583878545126-2f1ca0142714?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1505932794465-147d1f1b2c97?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1505932794465-147d1f1b2c97?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/flagged/photo-1572534779127-b64758946728?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/flagged/photo-1572534779127-b64758946728?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1587271339318-2e78fdf79586?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1587271339318-2e78fdf79586?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1567530331069-630c6a3926f3?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1567530331069-630c6a3926f3?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1583878448938-0de973eec3b9?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1583878448938-0de973eec3b9?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1517504544462-e6b28c1abb8e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" data-full="https://images.unsplash.com/photo-1517504544462-e6b28c1abb8e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920" class="m-p-g__thumbs-img" />
                     <img src="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920s" data-full="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1920s" class="m-p-g__thumbs-img" />
                  </div>
                  <div class="m-p-g__fullscreen"></div>
               </div>
            </div>
         </main>
          <footer class="mdl-mini-footer">
      <p id="footerlink"> Handcrafted with &#x2764; by <a target="_blank" href="http://ebulawaa.com">www.ebulawaa.com</a><br>© Copyright 2020</p>
   </footer>
      </div>

   </body>
  
   <script>
      var elem = document.querySelector('.m-p-g');
      
      document.addEventListener('DOMContentLoaded', function() {
          var gallery = new MaterialPhotoGallery(elem);
      });
   </script>
   <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js"></script>
</html>