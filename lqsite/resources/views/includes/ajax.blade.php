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
      fact:"required",
      title: "required",
      description: "required"
    },
    // Specify validation error messages
    messages: {
      fact:"Please select fact",
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
  // localStorage.setItem('key',id);

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
  function getNoteBookId(id)
  {
    $('#notebookid').val(id);
  }
</script>

<script>

  /*Below function getNoteDetail() is used to show detail view of notes in notes page

   Created by :  Namit Singh

   @return message 
 */ 

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

  /*Below function trashNotes() is used to empty the trash

   Created by :  Namit Singh

   @return message 
 */ 
  function trashNotes()
  {
       $.ajax({
       type:'GET',
       url:'delete-trash',
       // data:{'_token':'{{csrf_token()}}'},
       beforeSend:function(){
          $('#loading_image5').show();
          $('#loader_message5').show();
          $('#loading_image5').css("visibility","visible");
          $('#loader_message5').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image5').hide();
          $('#loader_message5').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image5').css("visibility","hidden");
          $('#loader_message5').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
       success:function(data)
       {
         $('#message5').show();
         $('#message5').html(data);
         location.reload(true);
      }
    }); 
  }
</script>

<script>

  /*Below function detailAddNote() is used to add notes in detail page

   Created by :  Namit Singh

   @return message 
 */ 
  function detailAddNote()
  {
    fact = $('#fact').val();
    title = $('#title').val();
    description = $('#description').val();
    $.ajax({
       type:'POST',
       url:'add-note',
       // beforeSend:function(){
       //  $('#loading_image').show();
       //   // $('body').not("#loading").css("filter","blur(3px)");
       // },
       // complete:function(){
       //  $('#loading_image').hide();
       // },
       data:{
        '_token':'{{csrf_token()}}',
        fact:fact,
        title:title,
        description:description
       },
       success:function(response){
        $('#addmessage').show();
        $('#addmessage').html(response);
        location.reload(true);

       }
    });
  }
  </script>

  <script>
    function getNoteId(id)
    {
      $('#deletenote').val(id);
    }
  </script>

  <script>

  /*Below function deletenote() is used to move notes to trash

   Created by :  Namit Singh

   @return message 
 */ 
  function deletenote()
  {
       var id = $('#deletenote').val();
       $.ajax({
          type:'POST',
          url:'delete-note',
          beforeSend:function(){
          $('#loading_image2').show();
          $('#loader_message2').show();
          $('#loading_image2').css("visibility","visible");
          $('#loader_message2').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image2').hide();
          $('#loader_message2').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image1').css("visibility","hidden");
          $('#loader_message2').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
          data:{
        '_token':'{{csrf_token()}}',
          id:id,
          },
          success:function(data){
          // alert(data);
          $('#message1').show();
          $('#message1').html(data);
           location.reload(true);
          }
       });
    // else
    // event.preventDefault();   
  }

</script>

<script>
  function removemessage()
  {
    $('#message1').hide();
  }
</script>

<script>

 /*Below function generateURL() is used to generate URL which is shown in Share notes popup

   Created by :  Namit Singh

   @return message 
 */ 

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

  /*Below function sharenote() is used to Share notes

   Created by :  Namit Singh

   @return message 
 */ 

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
          // alert(data);
          $("#message").show();
          $("#message").html(data);

        }
    });  
    }
    
  }
</script>

<script>
  function resetform()
  {
    document.getElementById('shform').reset();
    $('#message').hide();
    $('message3').hide();
  }
</script>

<script>
 setTimeout(function() {
    $('#messagediv').fadeOut('slow');
}, 1000);
</script>


<script>
 setTimeout(function() {
    $('#message').fadeOut('slow');
}, 1000);
</script>

<script>

  /*Below function copytext() is used to copy URL inside Share notes popup

   Created by :  Namit Singh

   @return message 
 */ 

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

  /*Below Script is used for AutoComplete of emails in Share notes popup

   Created by :  Namit Singh

   @return message 
 */ 

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


<script>
  
  function getnotebookid(id)
  {
    $('#notebookid').val(id);
  }
</script>

<script>

  /*Below function deletenotebook() is used to RDelete Notebooks

   Created by :  Namit Singh

   @return message 
 */ 
  function deletenotebook()
  {
    var id = $('#notebookid').val();
    $.ajax({
    type:'POST',
    url:'delete-notebook',
     data:{'_token':'{{csrf_token()}}', id:id},
     beforeSend:function(){
          $('#loading_image3').show();
          $('#loader_message3').show();
          $('#loading_image3').css("visibility","visible");
          $('#loader_message3').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image3').hide();
          $('#loader_message3').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image3').css("visibility","hidden");
          $('#loader_message3').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
    success:function(response){
      // alert(response);
      $("#message3").show();
      $("#message3").html(response);
       location.reload(true);
    }
    });

  }


 /*Below function getNoteBookData() is used to Request data from controller and return notes 
   under particular notebook

   Created by :  Namit Singh

   @return message 
 */  

  function getNoteBookData(id)
  {

    $.ajax({
      type:'POST',
      url:'getnotebookdata',
      data:{'_token':'{{csrf_token()}}',id:id},
      success:function(data){
        // alert(data);
        $('.mydata' + id).html(data);
      }
    })
  }

 function getTrashNoteId(id)
 {
   $('#trashnote').val(id);
 }

 /*Below function undotrash is used to undo trash notes and mpve them to all notes from trash page

   Created by :  Namit Singh

   @return message 
 */

 function undotrash()
 {
  var id = $('#trashnote').val();
  $.ajax({
    type:'POST',
    url:'undotrash',
    beforeSend:function(){
          $('#loading_image2').show();
          $('#loader_message2').show();
          $('#loading_image2').css("visibility","visible");
          $('#loader_message2').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image2').hide();
          $('#loader_message2').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image2').css("visibility","hidden");
          $('#loader_message2').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(data){
      $('#message').show();
      $('#message').html(data);
      location.reload(true);
    }
  });
 }
</script>

<script>
function getId(id)
 {
   // alert(id);
   $('#trashnoteid').val(id);
 }
</script>

<script>

 /*Below function deletetrashnote is used to delete notes from trash page permanently

   Created by :  Namit Singh

   @return message 
 */

 function deletetrashnote()
 {
  var id = $('#trashnoteid').val();
  $.ajax({
    type:'POST',
    url:'empty-trash',
    beforeSend:function(){
          $('#loading_image4').show();
          $('#loader_message4').show();
          $('#loading_image4').css("visibility","visible");
          $('#loader_message4').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image4').hide();
          $('#loader_message4').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image4').css("visibility","hidden");
          $('#loader_message4').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(data)
    {
      $('#message4').show();
      $('#message4').html(data);
      location.reload(true);
    }
  });
 }

 // function hello(value)
 // {
 //  alert(value);
 // }

 /*Below function getnotedetail is used to show detail view of notes on notes page under notebooks

   Created by :  Namit Singh

   @return notetitle , description, datecreated
 */

 function getNotebookNotesDetail(id)
 {
   $('#showNotebookNoteId').val(id);
   $.ajax({
     type:'POST',
     url:'getnotebooknotesdetail',
     data:{'_token':'{{csrf_token()}}',id:id},
     success:function(data){
      $('#notetitle').html(data['title']);
      $('#notedescription').html(data['description']);
      $('#notedate').html(data['date_created']);
      // alert(JSON.stringify(data));
     }
   });
 }


 
 /*Below function getnotedetail is used to show detail view of notes on trash page

   Created by :  Namit Singh

   @return notetitle , description, datecreated
 */

function getnotedetail(id)
 {
  // alert();
   $('#notedetail123').val(id);
   $.ajax({
     type:'POST',
     url:'getnotebooknotesdetail',
     data:{'_token':'{{csrf_token()}}',id:id},
     success:function(data){
      // alert(JSON.stringify(data));
      $('#notetitle').html(data['title']);
      $('#notedescription').html(data['description']);
      $('#notedate').html(data['date_created']);
     }
   });
 }


 /*Below function getNoteDetailId is used to show detail view of notes on detail page

   Created by :  Namit Singh

   @return notetitle , description, datecreated
 */

 function getNoteDetailId(id)
 {
  $('#showNotebookNoteId').val(id);
  $.ajax({
     type:'POST',
     url:'getnotebooknotesdetail',
     data:{'_token':'{{csrf_token()}}',id:id},
     success:function(data){
      // alert(JSON.stringify(data));
      $('#notetitle').html(data['title']);
      $('#notedescription').html(data['description']);
      $('#notedate').html(data['date_created']);
     }
   });
 }
</script>



<!--Notebook Search Ajax Starts-->

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function getMoveNoteId(id)
{
  $('#movenoteid').val(id);
  // alert(id);
}
function getMoveNoteBookId(id)
{
  $('#movenotebookid').val(id);
}
function moveNote()
{
  var noteid = $('#movenoteid').val();
  var notebookid = $('#movenotebookid').val();
  if(noteid != "" && notebookid != "")
  {
    $.ajax({
    type:'POST',
    url:'move-note',
    data:{'_token':'{{csrf_token()}}',noteid:noteid , notebookid: notebookid},
    beforeSend:function(){
          $('#loading_image5').show();
          $('#loader_message5').show();
          $('#loading_image5').css("visibility","visible");
          $('#loader_message5').css("visibility","visible");
          $('.modal-body').css("visibility","hidden");
          $('.modal-header').css("visibility","hidden");
          },
          complete:function(){
          $('#loading_image5').hide();
          $('#loader_message5').hide(); 
          $('.modal-body').css("visibility","visible");
          $('#loading_image5').css("visibility","hidden");
          $('#loader_message5').css("visibility","hidden");
          $('.modal-header').css("visibility","visible");
          },
       success:function(data)
       {
         $('#message5').show();
         $('#message5').html(data);
         location.reload(true);
      }
    });
  }
  else
  {
    alert("Something Went Wrong");
  }
}

function saveBookMark()
{
  $.ajax({
   type:'POST',
   url:'save-bookmark',
   data:{'_token':'{{csrf_token()}}'},
   success:function(data){
    alert(data);
   }
  });
}
</script>
