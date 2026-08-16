class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $len = strlen($s);
        if ($numRows === 1 || $numRows >= $len) {
            return $s;
        }

        $rows = array_fill(0, $numRows, "");
        $k = 0;
        $direction = -1;

        for ($i = 0; $i < $len; $i++) {
            $rows[$k] .= $s[$i];

            if ($k === 0 || $k === $numRows - 1) {
                $direction *= -1;
            }
            
            $k += $direction;
        }

        return implode("", $rows);
    }
}