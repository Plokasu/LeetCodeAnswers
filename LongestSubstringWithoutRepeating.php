class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;      
        $strings = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
            if(!in_array ($s[$i], $strings)) {
                    $strings[] = $s[$i];
            }else{    
                if(count($strings) > $max) {
                    $max = count($strings);
                }
                $strings = array_slice($strings, array_search($s[$i], $strings) + 1);
                $strings[] = $s[$i];
            }
        }
        
        if(count($strings) > $max) {
            $max = count($strings);
        }
        
        return $max;
    }
}
