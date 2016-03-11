
<?php if(security::is_connected()): ?>
<div id="mainBottomBar">
    
    
    <p class="legal homeBottomBar">
            
            Each Best Western<sup>&reg;</sup> branded hotel is independently owned and operated. &copy; 2002&ndash;2016 Best Western International, Inc. All rights reserved.
            &copy;2016 <a href="http://www.tripadvisor.com/" target="_blank">TripAdvisor</a> LLC. All rights reserved &dagger;Numbers are approximate, may fluctuate and include hotels currently in the development pipeline.
        </p>
   

</div>
<?php else: ?>

<?php endif; ?>

	

</div><!-- end containner -->


<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>view/js/bootstrap.js"></script>

   <!-- Script to Activate the Carousel -->
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        });
        $(document).ready(function(){
            // setInterval ( "get()", 5000 );
            $('.js-editor').wysihtml5({
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": true, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": false, //Button to change color of font  
                "blockquote": true, //Blockquote  
                "size": "10"//default: none, other options are xs, sm, lg
            });
        });
    </script>


</body>
</html>