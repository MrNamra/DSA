class Solution {

    function findMedianSortedArrays($nums1, $nums2) {
        $mergeArr = array_merge($nums1, $nums2);
        sort($mergeArr);

        $half = (int) count($mergeArr) / 2;

        if(count($mergeArr) % 2 == 0){
            $median = ($mergeArr[$half] + $mergeArr[$half - 1]) / 2;
        }else{
            $median = $mergeArr[$half];
        }

        return $median;

    }
}