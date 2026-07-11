class Solution {

    /**
     * @param String $s
     * @return String
     */

    function longestPalindrome($s) {
        if($s == strrev($s)) return $s;
        $max = 0;
        $start = 0;
        $end = 0;
        $srtArr = str_split($s);
        $length = count($srtArr);
        for($i = 0; $i < $length; $i++){
            for ($j = $i; $j < $length; $j++) {
                if(self::isPalindrom($s, $i, $j)) {
                    if(($j - $i + 1) > $max) {
                        $max = ($j - $i + 1);
                        $start = $i;
                        $end = $j;
                    }
                }
            }
        }
        return self::subString($s, $start, $end + 1);
    }

    function isPalindrom($s, $i, $j){
        while ($i < $j) {
            $ch1 = $s[$i];
            $ch2 = $s[$j];
            
            if($ch1 != $ch2) {
                return false;
            }
            $i++;
            $j--;
        }
        return true;
    }

    function subString($s, $i, $j) {
        $subString = '';
        for($i = $i; $i < $j; $i++) {
            $subString .= $s[$i];
        }
        return $subString;
    }
}