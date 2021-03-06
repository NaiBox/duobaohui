<?php
/**
 * 彩票工具类
 * @author		zhaozhonglin@shinc.net
 * @version		v1.0
 * @copyright	shinc
 */
namespace App\Libraries;
class LotteryUtil{
    
    public function __construct(){
    }
    
    public static $lottery_period_relation = array(
        '119'=>'23:55:40',
        '118'=>'23:50:40',
        '117'=>'23:45:40',
        '116'=>'23:40:40',
        '115'=>'23:35:40',
        '114'=>'23:30:40',
        '113'=>'23:25:40',
        '112'=>'23:20:40',
        '111'=>'23:15:40',
        '110'=>'23:10:40',
        '109'=>'23:05:40',
        '108'=>'23:00:40',
        '107'=>'22:55:40',
        '106'=>'22:50:40',
        '105'=>'22:45:40',
        '104'=>'22:40:40',
        '103'=>'22:35:40',
        '102'=>'22:30:40',
        '101'=>'22:25:40',
        '100'=>'22:20:40',
        '099'=>'22:15:40',
        '098'=>'22:10:40',
        '097'=>'22:05:40',
        '096'=>'22:00:40',
        '095'=>'21:50:40',
        '094'=>'21:40:40',
        '093'=>'21:30:40',
        '092'=>'21:20:40',
        '091'=>'21:10:40',
        '090'=>'21:00:40',
        '089'=>'20:50:40',
        '088'=>'20:40:40',
        '087'=>'20:30:40',
        '086'=>'20:20:40',
        '085'=>'20:10:40',
        '084'=>'20:00:40',
        '083'=>'19:50:40',
        '082'=>'19:40:40',
        '081'=>'19:30:40',
        '080'=>'19:20:40',
        '079'=>'19:10:40',
        '078'=>'19:00:40',
        '077'=>'18:50:40',
        '076'=>'18:40:40',
        '075'=>'18:30:40',
        '074'=>'18:20:40',
        '073'=>'18:10:40',
        '072'=>'18:00:40',
        '071'=>'17:50:40',
        '070'=>'17:40:40',
        '069'=>'17:30:40',
        '068'=>'17:20:40',
        '067'=>'17:10:40',
        '066'=>'17:00:40',
        '065'=>'16:50:40',
        '064'=>'16:40:40',
        '063'=>'16:30:40',
        '062'=>'16:20:40',
        '061'=>'16:10:40',
        '060'=>'16:00:40',
        '059'=>'15:50:40',
        '058'=>'15:40:40',
        '057'=>'15:30:40',
        '056'=>'15:20:40',
        '055'=>'15:10:40',
        '054'=>'15:00:40',
        '053'=>'14:50:40',
        '052'=>'14:40:40',
        '051'=>'14:30:40',
        '050'=>'14:20:40',
        '049'=>'14:10:40',
        '048'=>'14:00:40',
        '047'=>'13:50:40',
        '046'=>'13:40:40',
        '045'=>'13:30:40',
        '044'=>'13:20:40',
        '043'=>'13:10:40',
        '042'=>'13:00:40',
        '041'=>'12:50:40',
        '040'=>'12:40:40',
        '039'=>'12:30:40',
        '038'=>'12:20:40',
        '037'=>'12:10:40',
        '036'=>'12:00:40',
        '035'=>'11:50:40',
        '034'=>'11:40:40',
        '033'=>'11:30:40',
        '032'=>'11:20:40',
        '031'=>'11:10:40',
        '030'=>'11:00:40',
        '029'=>'10:50:40',
        '028'=>'10:40:40',
        '027'=>'10:30:40',
        '026'=>'10:20:40',
        '025'=>'10:10:40',
        '024'=>'10:00:40',
        '023'=>'01:55:40',
        '022'=>'01:50:40',
        '021'=>'01:45:40',
        '020'=>'01:40:40',
        '019'=>'01:35:40',
        '018'=>'01:30:40',
        '017'=>'01:25:40',
        '016'=>'01:20:40',
        '015'=>'01:15:40',
        '014'=>'01:10:40',
        '013'=>'01:05:40',
        '012'=>'01:00:40',
        '011'=>'00:55:40',
        '010'=>'00:50:40',
        '009'=>'00:45:40',
        '008'=>'00:40:40',
        '007'=>'00:35:40',
        '006'=>'00:30:40',
        '005'=>'00:25:40',
        '004'=>'00:20:40',
        '003'=>'00:15:40',
        '002'=>'00:10:40',
        '001'=>'00:05:40'
    );
    
    private static $lottery_period = array(
		    '119,235540',
            '118,235040',
            '117,234540',
            '116,234040',
            '115,233540',
            '114,233040',
            '113,232540',
            '112,232040',
            '111,231540',
            '110,231040',
            '109,230540',
            '108,230040',
            '107,225540',
            '106,225040',
            '105,224540',
            '104,224040',
            '103,223540',
            '102,223040',
            '101,222540',
            '100,222040',
            '099,221540',
            '098,221040',
            '097,220540',
            '096,220040',
            '095,215040',
            '094,214040',
            '093,213040',
            '092,212040',
            '091,211040',
            '090,210040',
            '089,205040',
            '088,204040',
            '087,203040',
            '086,202040',
            '085,201040',
            '084,200040',
            '083,195040',
            '082,194040',
            '081,193040',
            '080,192040',
            '079,191040',
            '078,190040',
            '077,185040',
            '076,184040',
            '075,183040',
            '074,182040',
            '073,181040',
            '072,180040',
            '071,175040',
            '070,174040',
            '069,173040',
            '068,172040',
            '067,171040',
            '066,170040',
            '065,165040',
            '064,164040',
            '063,163040',
            '062,162040',
            '061,161040',
            '060,160040',
            '059,155040',
            '058,154040',
            '057,153040',
            '056,152040',
            '055,151040',
            '054,150040',
            '053,145040',
            '052,144040',
            '051,143040',
            '050,142040',
            '049,141040',
            '048,140040',
            '047,135040',
            '046,134040',
            '045,133040',
            '044,132040',
            '043,131040',
            '042,130040',
            '041,125040',
            '040,124040',
            '039,123040',
            '038,122040',
            '037,121040',
            '036,120040',
            '035,115040',
            '034,114040',
            '033,113040',
            '032,112040',
            '031,111040',
            '030,110040',
            '029,105040',
            '028,104040',
            '027,103040',
            '026,102040',
            '025,101040',
            '024,100040',
            '023,015540',
            '022,015040',
            '021,014540',
            '020,014040',
            '019,013540',
            '018,013040',
            '017,012540',
            '016,012040',
            '015,011540',
            '014,011040',
            '013,010540',
            '012,010040',
            '011,005540',
            '010,005040',
            '009,004540',
            '008,004040',
            '007,003540',
            '006,003040',
            '005,002540',
            '004,002040',
            '003,001540',
            '002,001040',
            '001,000540');
    
    /**
     * 通过当期时间，获取下期彩票开奖期数及时间
     */
    public static function getNextLotteryPeriod() {
        $his = date('His');
		//echo(date('YmdHis').'<br />');
		$lottery_period = self::$lottery_period ;
		foreach ($lottery_period as $lottery_period_item) {
		    $lottery_period_item_0 = explode(',',$lottery_period_item)[0];
		    $lottery_period_item_1 = explode(',',$lottery_period_item)[1];
		    if($his >= $lottery_period_item_1){
    		    $Key = array_search($lottery_period_item,$lottery_period);
    		    if($his < '235540'){
					$date_time = date("Y-m-d ").self::getHisTime(explode(',',$lottery_period[$Key - 1])[1]);
    		        $date_period = date("Ymd").explode(',',$lottery_period[$Key - 1])[0];
    		        return array('date_time' => $date_time,
        		                 'date_period' => $date_period);
    		    }else{
					$date_time = date("Y-m-d ",strtotime('+1 day')).self::getHisTime(explode(',',$lottery_period[118])[1]);
    		        $date_period = date("Ymd",strtotime('+1 day')).explode(',',$lottery_period[118])[0];
    		        return array('date_time' => $date_time,
        		                 'date_period' => $date_period);
    		    }
		    }
		}

		$date_time = date("Y-m-d ").self::getHisTime(explode(',',$lottery_period[118])[1]);
		$date_period = date("Ymd").explode(',',$lottery_period[118])[0];
		return array('date_time' => $date_time,
        		                 'date_period' => $date_period);
    }

	public static function getHisTime($tmp_his){
		$time = $tmp_his[0].$tmp_his[1].':'.$tmp_his[2].$tmp_his[3].':'.$tmp_his[4].$tmp_his[5];
		return $time;
	}
}
?>
