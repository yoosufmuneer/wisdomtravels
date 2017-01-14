<html>
    <head>
        <title>Wisdom Travels</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script lang="javascript">
            /*
           function add()
            {
                var num1 = eval(document.form1.num1.value);
                var num2 = eval(document.form1.num2.value);
                var add = num1 + num2;
                alert(add);
                if (num1 == "")
                {
                    alert("please enter a number");
                    return false;
                }
                else if(num2 == "")
                {
                    alert("Please enter another number");
                    return false;
                }
                else{
                    return true;
                    alert(add);
                }
            }
            function sub()
            {
                var num1 = eval(document.form1.num1.value);
                var num2 = eval(document.form1.num2.value);
                var sub = num1 - num2;
                confirm("Do you really want to subtract?");
                alert(sub);
            }
            function mul()
            {
                var num1 = eval(document.form1.num1.value);
                var num2 = eval(document.form1.num2.value);
                var mul = num1 * num2;
                alert(mul);
            }
            function div()
            {
                var num1 = eval(document.form1.num1.value);
                var num2 = eval(document.form1.num2.value);
                var div = num2/num1;
                alert(val);
            }
            var val1 = prompt("What is your name?");
            if(val1 !="")
                {
                    alert(val1);
                }
            function print1()
            {
                window.print();
            }
           function getdisplay()
            {
                var item = document.getElementById("selectID").value;
                document.getElementById("display").innerHTML=item;
            }
            */
            function myfunctn()
            {
                var x = document.getElementById("firstname");
                x.value = x.value.toUpperCase();
            }
       
        </script>
    </head>
    <style>
        .content{
        }
        .num{
            display: block;
            margin: 4px;
            margin-left: 50%;
        }
    </style>
    <body>
        <header>
            <h1 id="heading">File</h1>
        </header>
        <div class="content" align="center">
 <form method="post" action="" name="form1">
     <input type="number" class="num" name="num1">
     <input type="number" class="num" name="num2">
     <input type="button" value="+" onclick="add()">
     <input type="button" value="-" onclick="sub()">
     <input type="button" value="*">
     <input type="button" value="/">
     <input type="button" value="OK" onclick="youclicked()" name="okbtn">
     <input type="button" value="Cancel">
     <input type="button" value="Print" onclick="print1()">
     <select id="selectID" onchange="getdisplay()">
         <option>Galaxy S7</option>
         <option>iPhone 6s</option>
         <option>OnePlus Three</option>
         <option>Nexus 6P</option>
     </select>
     <div id="display"></div>
     <input type="text" id="firstname" onblur="myfunctn()">
     
    </form>
              
   
        </div>

        <footer>Copyright &copy; Wisdom Travels 2000-2016.All Rights Reserved.</footer>
        
        
    </body>
</html>
 