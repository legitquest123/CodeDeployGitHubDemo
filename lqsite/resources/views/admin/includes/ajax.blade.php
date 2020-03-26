  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
     <script>
      CKEDITOR.replace( 'editor1' );
    </script>
<script>

  $(document).ready(function(){
  var gallerytype = $('#gallerytype').val();
  if(gallerytype == "Video")
  {
    $('#videourl').show();
    $('label[for="videourl"]').show();
  }
  else
  {
   $('#videourl').hide();
    $('label[for="videourl"]').hide(); 
  }
  });
	 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profileimage1').attr('src', e.target.result)
                        .width(100)
                        .height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


function readURL1(input)
{
   if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profileimage1').attr('src', e.target.result)
                        .width(100)
                        .height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
}

function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#frontendlogo').attr('src', e.target.result)
                        .width(100)
                        .height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#backendlogo').attr('src', e.target.result)
                        .width(100)
                        .height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result)
                        .width(100)
                        .height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

  function readURL5(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image').attr('src', e.target.result)
                  .width(100)
                  .height(100);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  function readURL6(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image').attr('src', e.target.result)
                  .width(100)
                  .height(100);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }

 function readURL7(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image').attr('src', e.target.result)
                  .width(100)
                  .height(100);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }


// $('#messagediv').hide(1500);
// $('#errormessage').hide(1500);
    
</script>

<script>
    $('#category').on('change', function() {
  
   var a = $(this).children("option:selected").val();
   if(a == 2 || a == 3 || a == 4 || a == 5)
   {
   $('#subcategory').hide();
   $('label[for="subcategory"]').hide();
   }
   else
   {
   $('#subcategory').show();
   $('label[for="subcategory"]').show();
   }  
});
</script>


<script>
   function getgallerytype()
   {
    var a =  document.getElementById('gallerytype').value;
    if(a == "Video")
    {
      $('#videourl').show();
      $('label[for="videourl"]').show();
    }
    else
    {
      $('#videourl').hide();
      $('label[for="videourl"]').hide();
    }
   }
</script>

<script>
$(function() 
{
  $("form[name='pageform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
      slug: "required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading.",
      slug: "Please enter slug."
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
  $("form[name='bannerform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
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
  $("form[name='faqform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
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
  $("form[name='editfaqform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
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
  $("form[name='editbannerform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
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
  $("form[name='editpageform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
      slug: "required"
      // description: "required",
      // meta_title: "required",
      // meta_keywords: "required",
      // meta_canonical: "required",
      // meta_description : "required",
      // schema :"required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading.",
      slug: "Please enter slug."
      // description: "Please select description.",
      // meta_title: "Please enter meta_title.",
      // meta_keywords : "Please enter meta_keywords",
      // meta_canonical : "Please enter meta_canonical",
      // meta_description : "Please enter meta_description",
      // schema :" Please enter schema"
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
  $("form[name='teamform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      designation: "required",
      profileimage: "required"
    },
    // Specify validation error messages
    messages: {
      name: "Please enter name.",
      designation: "Please enter designation.",
      profileimage:"Please select profile image"
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
  $("form[name='editteamform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      designation: "required",
    },
    // Specify validation error messages
    messages: {
      name: "Please enter name.",
      designation: "Please enter designation."
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
  $("form[name='careerform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required"
      // description: "required",
      // meta_title: "required",
      // meta_keywords: "required",
      // meta_canonical: "required",
      // meta_description : "required",
      // schema :"required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>


<script>
$(function() 
{
  $("form[name='editcareerform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required"
      // description: "required",
      // meta_title: "required",
      // meta_keywords: "required",
      // meta_canonical: "required",
      // meta_description : "required",
      // schema :"required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading."
      // description: "Please select description.",
      // meta_title: "Please enter meta_title.",
      // meta_keywords : "Please enter meta_keywords",
      // meta_canonical : "Please enter meta_canonical",
      // meta_description : "Please enter meta_description",
      // schema :" Please enter schema"
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
  $("form[name='changepassword']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      oldpassword: "required",
      newpassword:"required",
      confirmpassword:"required"
      // description: "required",
      // meta_title: "required",
      // meta_keywords: "required",
      // meta_canonical: "required",
      // meta_description : "required",
      // schema :"required"
    },
    // Specify validation error messages
    messages: {
      oldpassword: "Please enter your old password",
      newpassword:"Please enter new password",
      confirmpassword:"Please enter confirm password"
      // description: "Please select description.",
      // meta_title: "Please enter meta_title.",
      // meta_keywords : "Please enter meta_keywords",
      // meta_canonical : "Please enter meta_canonical",
      // meta_description : "Please enter meta_description",
      // schema :" Please enter schema"
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
  $("form[name='profileform']").validate({
    rules: {
      name: "required",
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your name",
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
  $("form[name='galleryform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      image: "required",
      videourl:"required"
    },
    // Specify validation error messages
    messages: {
      image: "Please select image to upload ",
      videourl: "Please enter url"
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
  $("form[name='editgalleryform']").validate({
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      videourl:"required"
    },
    // Specify validation error messages
    messages: {
      videourl: "Please enter url"
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
 setTimeout(function() {
    $('#messagediv').fadeOut('slow');
}, 1000);
</script>

<script>
  function getvaluedeletecareer(id)
  {
     $("#deleteCareerId").val(id);
  }
  function deletecareer(id)
  {
    var id = $("#deleteCareerId").val();
    $.ajax({
    type:'POST',
        url:'deletecareer',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
        location.reload(true);
    }   
  });
  }

  function getvaluedeleteteam(id)
  {
    $('#deleteteamId').val(id);
  }

  function deleteteam()
  {
     var id = $("#deleteteamId").val();
    $.ajax({
    type:'POST',
        url:'deleteteam',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
      location.reload(true);
    }   
    
  });
  }

  function getvaluedeletepage(id)
  {
    $('#deletepageId').val(id);
  }

  function deletepage()
  {
     var id = $("#deletepageId").val();
    $.ajax({
    type:'POST',
        url:'deletepage',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
      location.reload(true);
    }   
    
  });
  }

  function getvaluedeletegallery(id)
  {
    $('#deletegallery').val(id);
  }

  function deletegallery()
  {
     var id = $("#deletegallery").val();
    $.ajax({
    type:'POST',
        url:'deletegallery',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
      location.reload(true);
    }   
    
  });
  }

  function getvaluedeletebanner(id)
  {
    $('#deletebanner').val(id);
  }
  function deletebanner()
  {
     var id = $("#deletebanner").val();
    $.ajax({
    type:'POST',
        url:'deletebanner',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
      location.reload(true);
    }   
    
  });
  }

  function getvaluedeletefaq(id)
  {
    $('#deletefaq').val(id);
  }

  function deletefaq()
  {
    var id = $("#deletefaq").val();
    $.ajax({
    type:'POST',
        url:'deletefaq',
        data:{'_token':'{{csrf_token()}}',id:id},
        success: function(response){
      location.reload(true);
    }   
    
  });
  }

  function deactivatestatus(id)
  {
   $.ajax({
   type:'POST',
   url:'deactivatestatus',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      console.log(response);
      location.reload(true);
    }
   });
  }

  function activatestatus(id)
  {
   $.ajax({
   type:'POST',
   url:'activatestatus',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      console.log(response);
      location.reload(true);
    }
   });
  }

  function deactivatecareer(id)
  {
    $.ajax({
    type:'POST',
    url:'deactivatecareer',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }

  function activatecareer(id)
  {
    $.ajax({
    type:'POST',
    url:'activatecareer',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }

  function deactivategallery(id)
  {
    $.ajax({
    type:'POST',
    url:'deactivategallery',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }
   function activategallery(id)
  {
    $.ajax({
    type:'POST',
    url:'activategallery',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }
  function deactivateteam(id)
  {
    $.ajax({
    type:'POST',
    url:'deactivateteam',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }

  function activateteam(id)
  {
    $.ajax({
    type:'POST',
    url:'activateteam',
    data:{'_token':'{{csrf_token()}}',id:id},
    success:function(response){
      location.reload(true);
    }
    });
  }
</script>
