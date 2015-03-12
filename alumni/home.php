<?php include "header.php" ?>
 
<script type="text/javascript">
var image1 = new Image()
image1.src = "images/college1.jpg"
var image2 = new Image()
image2.src = "images/college2.jpg"
var image3 = new Image()
image3.src = "images/college3.jpg"
var image4 = new Image()
image4.src = "images/college4.jpg"

</script>
</head>

<p><img src="images/college1.jpg" width="100%" height="400" name="slide" /></p>
<script type="text/javascript">
        var step=1;
        function slideit()
        {
            document.images.slide.src = eval("image"+step+".src");
            if(step<4)
                step++;
            else
                step=1;
            setTimeout("slideit()",2000);
        }
        slideit();
</script>
