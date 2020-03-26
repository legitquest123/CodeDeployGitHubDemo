<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
$(function() 
{
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='pageform']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      heading: "required",
      slug: "required",
      description: "required",
      meta_title: "required",
      meta_keywords: "required",
      meta_canonical: "required",
      meta_description : "required",
      schema :"required"
    },
    // Specify validation error messages
    messages: {
      heading: "Please enter heading.",
      slug: "Please enter slug.",
      description: "Please select description.",
      meta_title: "Please enter meta_title.",
      meta_keywords : "Please enter meta_keywords",
      meta_canonical : "Please enter meta_canonical",
      meta_description : "Please enter meta_description",
      schema :" Please enter schema"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>