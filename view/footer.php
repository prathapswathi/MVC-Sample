<html>
<head>
<style>
.last{border-bottom:1px solid gray;}
</style>
</head>
<body>
<div>
<div class="last"></div>
<div class="footer">
	<h1><a><img src="https://www.prlog.org/12299622-impelsys-inc.png" style="max-height:60px"></a></h1>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>

<script type="text/javascript">
	CKEDITOR.replace('myeditor');
</script>


<script type="text/javascript">
function CheckProduct(val){
 var element=document.getElementById('pro');
 var element1=document.getElementById('sel');
 if(val=='Select Product'||val=='others')
   element.style.display='block';
 //  element1.style.display='none';
 else  
   element.style.display='block';
   element.value=element1.value;
  // element1.style.display='block';
}
</script> 

<!-- <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Delete Account?"))
                return true;
            else
                return false;
      }
  </script> -->

<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/jquery.validate.min.js"></script>
<script>
   
   $(function ()
{
    $("form[name='myform']").validate({
        rules:{
            
            Product_part: "required",
            chap_id:" required"
           
        },
        messages:{
          
            Product_part:"please Enter Chapter name",
            chap_id:"please provide chapter id"
            
        },
        submitHandler:function(form){
            form.submit();
        }
    });
});
</script>

<script>
    var data = CKEDITOR.instances.myeditor.getData();
</script>

<script>
$("#myHref").on('click', function() {
    document.getElementById(".myDiv").style.flexGrow = "5";
     window.location = "http://www.google.com";

});
</script>

<script>
 function searchFunction(){
$value=  document.getElementById(".myHref").value;
echo "$value";
}

</script>


</body>
</html>