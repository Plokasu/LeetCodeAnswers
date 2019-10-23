class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $numLength = count($nums);
        
        if($numLength == 0) {
            return -1;
        }
        
        if($numLength == 1) {
            return 0;
        }
        
        $sumLeft = 0;
        $sumRight = 0;
            
        for($i = 1; $i < $numLength; $i++) {
             $sumRight += $nums[$i];
        }
        
        if($sumRight == 0) {
            return 0;
        }
        
        for($i = 1; $i < $numLength; $i++) {
            $sumLeft += $nums[$i-1];
            $sumRight -= $nums[$i];
    
           if($sumLeft == $sumRight) {
                return $i;
            }
        }
        return -1;
    }
}
