class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $carry = 0;
        $head = null;
        $tail = null;
        
        while(!($l1 === null && $l2 === null)) {
            $next = $carry;
            
            if($l1 === null) {
                $next += $l2->val;
            }else if($l2 === null) {
                $next += $l1->val;
            }else{
                $next += $l2->val + $l1->val;
            }
            
            if($next >= 10) {
                $carry = 1;
                $next -= 10;
            }else{
                $carry = 0;
            }
            
            $result = new ListNode($next);
            
            if($head === null) {
                $head = $result;
                $tail = $result;
            }else{
                $tail->next = $result;
                $tail = $result;
            }
            
            if($l1 !== null) {
                $l1 = $l1->next;    
            }
            
            if($l2 !== null) {
                $l2 = $l2->next;    
            }
        }
        
        if($carry == 1) {
            $tail->next = new ListNode(1);
        }
        
        
        return $head;
    }
    
}
