class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
  function twoSum($nums, $target) {
        $length = count($nums);
        $dictionary = [];
        
        for($i = 0; $i < $length; $i++) {
            if(isset($dictionary[$nums[$i]])) {
                return [$dictionary[$nums[$i]], $i];
            }
            
            $dictionary[$target - $nums[$i]] = $i;
        }
    }
}
