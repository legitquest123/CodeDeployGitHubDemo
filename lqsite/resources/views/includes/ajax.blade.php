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
    $("form[name='jobform']").validate({
     
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
$(function() 
{
  $("form[name='notebookform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      description: "required"
    },
    // Specify validation error messages
    messages: {
      name: "Please enter notebook name",
      description: "Please enter notebook description"
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
$(function() 
{
  $("form[name='detail_note_form']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      title: "required",
      description: "required"
    },
    // Specify validation error messages
    messages: {
      title: "Please enter note title",
      description: "Please enter note description"
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
    type:'GET',
        url:'notebook-note',
        data:{'_token':'{{csrf_token()}}',id:id},
         beforeSend: function(){
             $('#loading_image').show();
             },
             complete: function(){
             $('#loading_image').hide();
             },
        success: function(data){
            $('#notebookTab').html(data);
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
      beforeSend: function(){
             $('#loading_image').show();
             },
             complete: function(){
             $('#loading_image').hide();
             },
      success:function(response){
        $('#result').html(response);
      }
    });
  }
</script>

<script>
  function trashNotes()
  {
   var c = confirm("Are you sure you want to empty trash??")
   if(c)
   {
       $.ajax({
       type:'GET',
       url:'delete-trash',
       beforeSend:function(){
        $('#loading_image').show();
       },
       complete:function(){
        $('#loading_image').hide();
       },
       success:function(response){
      location.reload(true);
   }
       }); 
  }
   
  }
</script>

<script>
  function detailAddNote()
  {
    fact = $('#fact').val();
    title = $('#title').val();
    description = $('#description').val();
    $.ajax({
       type:'POST',
       url:'add-note',
       beforeSend:function(){
        $('#loading_image').show();
         // $('body').not("#loading").css("filter","blur(3px)");
       },
       complete:function(){
        $('#loading_image').hide();
       },
       data:{
        '_token':'{{csrf_token()}}',
        fact:fact,
        title:title,
        description:description
       },
       success:function(response){
        location.reload(true);
       }
    });
  }
  </script>

  <script>
  function deletenote(id)
  {
    var c = confirm("Delete note or not?");
    if(c)
    {

       $.ajax({
          type:'GET',
          url:'delete-note',
          data:{
        '_token':'{{csrf_token()}}',
          id:id,
          },
          success:function(data){
            alert(data);
          }
       });
    }
    else
    event.preventDefault();   
  }

</script>

<script>
  function generateURL(id)
  {
    $.ajax({
        type:'POST',
        url:'generate-url',
        data:{'_token':'{{csrf_token()}}',id:id},
        success:function(data){
          // console.log(data);
          $('#generateurl').val(data['path']);
          $('#sharenotetitle').html('Share' + " " + data['title']);
          $('#noteid').val(data['note_id']);
        }
    });
  }
</script>

<script>
  function sharenote()
  {
    var url = $('#generateurl').val();
    var email = $('#email').val();
    var noteid = $('#noteid').val();
    if(email == ""){
      $('#error1').html("Please enter an email");
      return false;
    }
    else
    {
    $('#error1').hide();  
    $.ajax({
        type:'POST',
        url:'share-note',
        backdrop: "static",
        beforeSend:function(){
          $('#loading_image1').show();
          $('#loader_message').show();
          $('#loader_message').css("visibility","visible");
          $('#loading_image1').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
        },
        complete:function(){
         $('#loading_image1').hide();
         $('#loader_message').hide();
         $('#loader_message').css("visibility","hidden");
         $('#loading_image1').css("visibility","hidden");
         $('.modal-body').css("visibility","visible");
         $('.modal-header').css("visibility","visible");
        },
        data:{'_token':'{{csrf_token()}}',url: url ,email:email, noteid:noteid},
        success:function(data){
          alert(data);
        }
    });  
    }
    
  }
</script>

<script>
  function resetform()
  {
    document.getElementById('shform').reset();
  }
</script>

<script>
 setTimeout(function() {
    $('#messagediv').fadeOut('slow');
}, 1000);
</script>

<script>
  function copytext()
  {
    var copyText = document.getElementById('generateurl');
    copyText.select();
    copyText.setSelectionRange(0,9999);
    document.execCommand("copy");
    // alert("Copied : " + copyText.value);
  }
</script>

<script>
  $(document).ready(function(){
  $('#email').keyup(function(){
  var query = $(this).val();
  if(query!= '')
  {
    $.ajax({
    type:'POST',
    url:'getemails',
    data:{'_token':'{{csrf_token()}}', query:query},
    success:function(data){
      $('#emails').show();
      $('#emails').html(data);
      // alert(JSON.stringify(data));
    }
    });
  }
  else
  {
    $('#emails').hide();
  }
   $(document).on('click', '.dropdown-menu li', function(){  
        $('#email').val($(this).text());  
        $('#emails').hide();  
    }); 
  });
  });
</script>
