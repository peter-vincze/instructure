<?php
class TestExcercises
{
    public static function isBalanced(string $brackets = "" ) : bool {
        $bracketStack = [];
        $startBrackets = [']' => '[', ')' => '(', '}' => '{'];
        for($i = 0; $i < strlen($brackets); $i++) {
            if (in_array($brackets[$i],['{', '(', '['])) {
                $bracketStack[] = $brackets[$i];
            }
            elseif (in_array($brackets[$i],['}', ')', ']'])) {
                if (count($bracketStack) == 0 || 
                $bracketStack[count($bracketStack) - 1] != $startBrackets[$brackets[$i]]) {
                    return false;
                }
                else {
                    array_pop($bracketStack);
                }
            }
        }
        return empty($bracketStack);
    }
    public static function getAnagrams(string $anagram): array{
        $permuts = [];
        $output = [];
        $output[] =$anagram;
        for($i=0; $i <= strlen($anagram); $i++){
            $permuts[$i] = $i;
        }
        $i=1;

        while ($i < strlen($anagram)){
            $permuts[$i]--;
            if($i%2 == 1){
            $j = $permuts[$i];
            }
            else{
            $j = 0;
            }
            $swap =$anagram[$j];
            $anagram[$j] =$anagram[$i];
            $anagram[$i] = $swap;

            $i=1;
            while ($permuts[$i] === 0){
            $permuts[$i] = $i;
            $i++;
            }
            $output[] =$anagram;
        }
        return $output;
    }
    public static function maxNumbers(array $positiveNums) {
        usort($positiveNums,  function ($a, $b) { return strcmp("$b$a", "$a$b"); });
        return implode('', $positiveNums);
    }    
}