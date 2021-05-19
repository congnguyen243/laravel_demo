<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // Your code here.

        function range(a, b, c) {
            var ans = [];
            if(c==null){
                for(let i=a;i<=b;i++)ans.push(i)
                
            }
            else{
            if(a<b){
                for(let j=a;j<=b;j+=c)ans.push(j);
            }
            else{
            
                for(let j=a;j>=b;j+=c)ans.push(j);
            }
            }
            return ans;
        }
        function sum(...a){
            let tmp = 0;
            console.log(a);
            // for(x in a)console.log(a[x]);
            a.forEach((arg) => tmp += arg)
            return tmp;
        }


        console.log(range(1, 10));
        // → [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]



        console.log(range(1, 10, 2));
        console.log(range(5, 2, -1));
        // → [5, 4, 3, 2]
        console.log('sum:',sum(range(1, 10)));
        // → 55
        

        //List
        function arrayToList(arr){
        let obj = {};
        for(let i =arr.length-1;i>=0;i--){
            if(i==arr.length-1){
                obj = null;
            }
            obj = {
                value: arr[i],
                rest: obj
            }
        }
        return obj;
        }
        var rr = [];
        function listToArray(oj){
        let o2 = {};
        if(oj.rest!=null){
            rr.push(oj.value)
            o2 = oj.rest;
            listToArray(o2)
        }
        else rr.push(oj.value);
        return rr;
        }
        /*

        */
        console.log(arrayToList([10, 20]));
        // → {value: 10, rest: {value: 20, rest: null}}
        console.log(listToArray(arrayToList([10, 20, 30])));
        // → [10, 20, 30]
        //console.log(prepend(10, prepend(20, null)));
        // → {value: 10, rest: {value: 20, rest: null}}
        //console.log(nth(arrayToList([10, 20, 30]), 1));
        // → 20
        
    </script>
</head>
<body>
<?php
echo('test')
?>
</body>
</html>


