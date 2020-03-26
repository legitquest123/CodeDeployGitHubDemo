<?php
use App\Setting;
class Helpers
{
	public  static function cutString($value)
	{
	    // return ucwords($value);
	    $str=$value;
	    $newstring = explode(' ', $str);
	    $string = "";
	    foreach($newstring as $words)
	    {
	        $string = $string . $words[0];
	    }
	    return ucwords($string);
	}

	public static function getCopyRightData()
	{
      	$viewData = "";
    	$getCopyright = DB::table('setting')->select('copyright')->get();
    	foreach($getCopyright as $copyright)
    	{
    		$viewData .= $copyright->copyright;
    	}
    	return $viewData;
	}

	public static function getFrontEndLogo()
	{
		   $viewData = "";
		   $getFrontEndLogo = DB::table('setting')->select('frontendlogo')->get();
	    	foreach($getFrontEndLogo as $flogo)
	    	{
	    		$viewData .= $flogo->frontendlogo;
	    	}
	    	return $viewData;
	}
	public static function getBackEndLogo()
	{
		   $viewData = "";
		   $getBackEndLogo = DB::table('setting')->select('backendlogo')->get();
	    	foreach($getBackEndLogo as $flogo)
	    	{
	    		$viewData .= $flogo->backendlogo;
	    	}
	    	return $viewData;
	}
}
?>