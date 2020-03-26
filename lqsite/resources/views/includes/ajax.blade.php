<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function() 
{
  $("form[name='serviceform']").validate({
    rules: {
      firstname: "required",
      mobile:{
        required:true,
        number:true
      },
      email:
      {
       required:true,
       email:true
      },
    },
    messages: {
      firstname: "This field is required",
      mobile:
      {
        required:"This field is required",
        number:"Only numbers are valid"
      },
      email: 
      {
      required: "This field is required.",
      email: "Please enter valid email address."
    },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

<script>
$('#messagediv1').hide(2000);
$('#errormessage2').hide(2000);
</script>

<script>
  $(function()
  {
    $("form[name='researchrequest']").validate({
     
     rules:{
      firstname:"required",
      mobile:{
        required:true,
        maxlength:10,
        number:true
      },
      email:{
        required:true,
        email:true
      },
      brief:"required",
     },
     messages:{
      firstname:"This field is required",
      mobile:{
        required:"This field is required",
        number:"Only numbers are allowed",
        maxlength:"Maxlength allowed Only 10 digits"
      },
      email:{
        required:"This field is required",
        email:"Please enter valid email address"
      },
      brief:"This field is required",
     }
    });
  });
</script>


<script>
  $(function()
  {
    $("form[name='researchrequest']").validate({
     
     rules:{
      firstname:"required",
      mobile:{
        required:true,
        maxlength:10,
        number:true
      },
      email:{
        required:true,
        email:true
      },
      brief:"required",
     },
     messages:{
      firstname:"This field is required",
      mobile:{
        required:"This field is required",
        number:"Only numbers are allowed",
        maxlength:"Maxlength allowed Only 10 digits"
      },
      email:{
        required:"This field is required",
        email:"Please enter valid email address"
      },
      brief:"This field is required",
     }
    });
  });
</script>

<script>
  $(function()
  {
    $('form').validate({
     
     rules:{
      name:"required",
      contact:{
        required:true,
        maxlength:10,
        number:true
      },
      email:{
        required:true,
        email:true
      },
      url:"required",
     },
     messages:{
      name:"This field is required",
      contact:{
        required:"This field is required",
        number:"Only numbers are allowed",
        maxlength:"Maxlength allowed Only 10 digits"
      },
      email:{
        required:"This field is required",
        email:"Please enter valid email address"
      },
      url:"This field is required",
     }
    });
  });
</script>
