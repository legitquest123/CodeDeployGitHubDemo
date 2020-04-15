<!DOCTYPE html>
<html>
<head>
	<title>Column 1 Print </title>
</head>
<style>
	@page {
	header: page-header;
	footer: page-footer;
}
</style>

<body>
	<htmlpageheader name="page-header">
		<p style="text-align: center; font-size: 13px; font-weight: normal;">{{$data[0]->title}}</p><br>
	</htmlpageheader>
<hr>
	<htmlpagefooter name="page-footer">
	    <img style="margin-top:20px;" src="{{asset('public/images/lq-logo.png')}}" alt="footer">
	</htmlpagefooter>

	<h3 style="text-align: center; font-size: 23px;"><b>{{$data[0]->court_name}}</b></h3>
	<p style="text-align: center; font-size: 21px">{{$data[0]->appeal_no}}</p></br>
	<br>

	<p style="text-align: center; font-size: 17px;"><u>Judgment Date:</u></p>
	<p style="text-align: center; font-size: 15px;">{{$data[0]->judgment_date}}</p>
	<span style="font-size: 17px;">{{$data[0]->petitioner}}</span>
	<span style="font-size: 20px; float: right;"><b>..Petitioner</b></span><br><br>
	<span style="font-size: 17px;">{{$data[0]->respondent}}</span>
	<span style="font-size: 20px; float: right;"><b>..Respondent</b></span><br><br>

	<p style="text-align: center; font-size: 19px;"><u>Bench:</u></p>
	<p style="text-align: center; font-size: 17px;"><b>{{$data[0]->bench}}</b></p>
	<p style="text-align: center; font-size: 19px;"><u>Citation:</u></p></br></br>
	<hr><!-- <center><button style="position: absolute; top:1%; right:37%; width:25%; border:1px solid #000; color:#000;background-color: #fff; font-weight: bold;padding: 5px;">Judgment</button></center> --></hr>
	<br>
	<br>
		<span style="font-size: 15px; word-spacing: 3px;">{!!$data[0]->content!!}</span><br>		
</body>

</html>