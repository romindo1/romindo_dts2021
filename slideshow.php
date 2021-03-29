<table align="center" border="0">
 <tr>
  <td align="center">
   <script type="text/javascript">
var slideimages=new Array()
function slideshowimages()
{
     for (i=0;i<slideshowimages.arguments.length;i++){
         slideimages[i]=new Image()
         slideimages[i].src=slideshowimages.arguments[i]
    }
}
</script>
   <div align="right"><img src="" alt="slide" title="Oentong" name="slide" border=3 style="-moz-border-radius:10px;border-color:#FFFFFF" width=400 height=370>
  
    <script type="text/javascript">
slideshowimages("slide1.jpg","slide2.jpg","slide3.jpg","slide4.jpg","slide5.jpg","slide6.jpg")
var slideshowspeed=3000
var whichimage=0
function slideit()
{
     if (!document.images)
           return
     document.images.slide.src=slideimages[whichimage].src
     if (whichimage<slideimages.length-1)
              whichimage++
     else
              whichimage=0
      setTimeout("slideit()",slideshowspeed)
}
 slideit()
  </script>
  
</div>
</td>
 </tr>
</table>