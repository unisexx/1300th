<?php
if ( ! function_exists('DateToDB'))
{
	function DateToDB($date = null, $time = null, $is_date_thai = TRUE)
	{
		if(!$date) {
			return null;
		}

		@list($d,$m,$y) = explode('/', $date);
		$y = ($is_date_thai) ? $y - 543 : $y;

		if($time){
			@list($H,$i) = explode(':', $time);
			return @$date ? $y.'-'.$m.'-'.$d.' '.$H.':'.$i.':00' : NULL;
		}

		return @$date ? $y.'-'.$m.'-'.$d : NULL;
	}
}

if ( ! function_exists('DBToDate'))
{
	function DBToDate($date = null, $is_date_thai = TRUE, $showTime = false)
	{
		if(
			!$date ||
			$date == '0000-00-00' ||
			$date == '0000-00-00 00:00:00'
		) {
			return null;
		}
		//year tyep (buddha or christ).
		$year = ($is_date_thai)?(date('Y', strtotime($date))+543):date('Y', strtotime($date));
		return ($showTime) ? date('d/m/', strtotime($date)).$year.' '.date('H:i:s', strtotime($date)) : date('d/m/', strtotime($date)).$year;
	}
}

if ( ! function_exists('DBToTime'))
{
	function DBToTime($date)
	{
		if(
			!$date ||
			$date == '0000-00-00' ||
			$date == '0000-00-00 00:00:00'
		) {
			return null;
		}

		return date('H:i:s', strtotime($date));
	}
}
