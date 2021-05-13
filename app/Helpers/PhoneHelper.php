<?php

namespace App\Helpers;

class PhoneHelper
{
    public static function convert($phonenumber)
    {
        $arr_Prefix = array(
            'CELL' => array(
                '016966' => '03966',
                '0169' => '039',
                '0168' => '038',
                '0167' => '037',
                '0166' => '036',
                '0165' => '035',
                '0164' => '034',
                '0163' => '033',
                '0162' => '032',
                '0120' => '070',
                '0121' => '079',
                '0122' => '077',
                '0126' => '076',
                '0128' => '078',
                '0123' => '083',
                '0124' => '084',
                '0125' => '085',
                '0127' => '081',
                '0129' => '082',
                '01992' => '059',
                '01993' => '059',
                '01998' => '059',
                '01999' => '059',
                '0186' => '056',
                '0188' => '058'
            ),
        );
        if (!empty($phonenumber)) {
            //1. Xóa ký tự trắng
            $phonenumber = str_replace(' ', '', $phonenumber);
            //2. Xóa các dấu chấm phân cách
            $phonenumber = str_replace('.', '', $phonenumber);
            //3. Xóa các dấu gạch nối phân cách
            $phonenumber = str_replace('-', '', $phonenumber);
            //4. Xóa dấu mở ngoặc đơn
            $phonenumber = str_replace('(', '', $phonenumber);
            //5. Xóa dấu đóng ngoặc đơn
            $phonenumber = str_replace(')', '', $phonenumber);
            //6. Xóa dấu +
            $phonenumber = str_replace('+', '', $phonenumber);
            //7. Chuyển 84 đầu thành 0 và loại các số 0 thừa ở đầu
            if (substr($phonenumber, 0, 2) == '84') {
                $phonenumber = substr($phonenumber, 2, strlen($phonenumber) - 2);
                while(substr($phonenumber, 0, 1) == '0') {
                    $phonenumber = substr($phonenumber, 1, strlen($phonenumber) - 1);
                }
                $phonenumber = '0' . $phonenumber;
            }
            foreach ($arr_Prefix['CELL'] as $key => $value) {
                if (strpos($phonenumber, $key) === 0) {
                    $prefix = $key;
                    $prefixlen = strlen($key);
                    $phone = substr($phonenumber, $prefixlen, strlen($phonenumber) - $prefixlen);
                    $prefix = str_replace($key, $value, $prefix);
                    $phonenumber = $prefix . $phone;
                    break;
                }
            }
            return $phonenumber;
        } else {
            return false;
        }
    }
}
