class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $maxLength = 0;
        $left = 0;
        $list = [];
        foreach(str_split($s) as $right => $char) {
            if(isset($list[$char]) && $list[$char] >= $left) {
                $left = $list[$char] + 1;
            }
            $list[$char] = $right;

            $maxLength = max($maxLength, $right - $left + 1); 
        }
        return $maxLength;
    }
}