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


<script>
$(function() 
{
  $("form[name='noteform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      title: "required",
      description: "required"
    },
    // Specify validation error messages
    messages: {
      title: "Please enter title.",
      description: "Please enter description."
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
<script>
  
$("#trashBtn").click(function(){
  
  $("#trashTab").show();
  $("#noteTab").hide();
  $("#shareTab").hide();
  $("#notebookTab").hide();
  $("#row2").hide();
  $("#row1").show();
  $("#result").html('');
    
});


$("#noteBtn").click(function(){

  $("#noteTab").show();
  $("#trashTab").hide();
  $("#shareTab").hide();
  $("#notebookTab").hide();
  $("#row2").hide();
  $("#row1").show();
  $("#result").html('');

    
});


$("#shareBtn").click(function(){

  $("#noteTab").hide();
  $("#trashTab").hide();
  $("#shareTab").show();
  $("#notebookTab").hide();
  $("#row2").hide();
  $("#row1").show();
  $("#result").html('');

    
});

$("#notebookBtn").click(function(){

  $("#noteTab").hide();
  $("#trashTab").hide();
  $("#notebookTab").hide();
  $("#shareTab").hide();
  $("#row1").hide();
  $("#row2").show();
  $("#result").html('');

    
});

function getSearchValue()
{
    var val = $("#searchValue").val();
    window.location.href="<?php echo env('APP_URL'); ?>judgment?search="+val;
    
}

function showNotebookNote(id)
{
  $("#noteTab").hide();
  $("#trashTab").hide();
  $("#shareTab").hide();
  $("#notebookTab").show();
  $("#row1").show();
  $("#row2").hide();
  $("#result").html('');
  
  $.ajax({
    type:'POST',
        url:'share-note',
        data:{'_token':'{{csrf_token()}}',id:id, email:email},
        success: function(data){
            alert(data);
    }   
    
  });
  
}
</script>

<script>
  function getNoteDetail(id)
  {
    $.ajax({
      type:'POST',
      url:'note-detail',
      data:{'_token':'{{csrf_token()}}', id:id},
      success:function(response){
        $('#result').html(response);
      }
    });
  }
</script>
