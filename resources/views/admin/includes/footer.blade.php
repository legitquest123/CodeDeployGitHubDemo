<style>
.error 
{
  color: #cc0000 !important;
  font-size: 12px !important;
  text-transform: capitalize;
}
.app-brand {
  background-color: #fff;
}
img 
{
  vertical-align: middle;
  border-style: none;
  margin-top: 20px;
  margin-bottom: 5px;
}
.card 
{
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px #e5e9f2 !important; 
    border-radius: 0px !important;
}
</style>
             <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

    </div>
  </div>

  <script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jekyll-search.min.js')}}"></script>



<script src="{{asset('public/admin/plugins/charts/Chart.min.js')}}"></script>
  


<script src="{{asset('public/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  


<script src="{{asset('public/admin/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>
  


<!-- <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script> -->



<script src="{{asset('public/admin/js/sleek.bundle.js')}}"></script>
