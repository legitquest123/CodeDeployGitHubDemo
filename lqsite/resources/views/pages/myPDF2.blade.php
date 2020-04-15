<!DOCTYPE html>
<html>
<head>
	<title>Column 2 Print</title>
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
	<columns column-count="2">
		<h3 style="text-align:center; font-size: 23px;"><b>{{$data[0]->court_name}}</b></h3>
		<p style="text-align: center; font-size: 18px">{{$data[0]->appeal_no}}</p></br>
		<br>

		<p style="text-align: center; font-size: 17px;"><u>Judgment Date:</u></p>
		<p style="text-align: center; font-size: 15px;">{{$data[0]->judgment_date}}</p>
		<span style="font-size: 15px;">{{$data[0]->petitioner}}</span>
		<span style="font-size: 20px;"><b>..Petitioner</b></span><br><br>
		<span style="font-size: 15px;">{{$data[0]->respondent}}</span>
		<span style="font-size: 20px;"><b>..Respondent</b></span><br><br>

		<p style="text-align: center; font-size: 19px;"><u>Bench:</u></p>
		<p style="text-align: center; font-size: 17px;"><b>{{$data[0]->bench}}</b></p>
		<p style="text-align: center; font-size: 19px;"><u>Citation:</u></p></br></br>
		<hr></hr>
		<br>
		<br>
		<span style="font-size: 8px; color:green; text-align: justify;">{!!$data[0]->content!!}</span>
</columns>
</body>
</html>