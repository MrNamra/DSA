class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $i => $num) {
            for($j=$i+1; $j<count($nums); $j++) {
                if($num + $nums[$j] == $target && $i != $j) {
                    return [$i, $j];
                }
            }
        }
    }
}