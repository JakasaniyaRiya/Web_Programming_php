<?php
        function countVowels($str)
        {
            $str=strtolower($str);
            $vowelCount=0;

            for($i=0;$i<strlen($str);$i++)
            {
                if(in_array($str[$i],["a","i","e","o","u"]))
                {
                    $vowelCount++;
                }
            }
            return $vowelCount;
        }
        $str="my name is riya";
        $vowelCount=countVowels($str);

        echo "number of vowel:  " .$vowelCount;
?>